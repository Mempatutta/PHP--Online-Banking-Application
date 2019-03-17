<?php 
include('conn.php');
	session_start();
	
	($_SESSION['user'])?$user=$_SESSION['user']:header("location:index.php");
	

	$balance=0.00;
	$query=mysqli_query($conn,"SELECT * from transaction 
							WHERE user='$user'");
	while($row=mysqli_fetch_array($query))
		{
			$balance= $balance + $row['amount'];
		}

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("America/Vancouver");
		$amount=mysqli_real_escape_string($conn,$_POST['amount']);

		
		if($amount>$balance)
		{
			
			Print '<script>alert("You do not have enough money!");;
			window.location.assign("balance.php")</script>';
			exit("You do not have enough money!");
			
			
		}
		$amount=(-$amount);
		$details=mysqli_real_escape_string($conn,$_POST['details']);
		
		subtract_money( $conn, $amount,$details,$user);
		
		Print '<script>alert("Success, withdraw!");
		window.location.assign("balance.php");</script>';
		
	}
	else
	{
		header("location:home.php");
	}

	function subtract_money( $conn, $amount,$details,$user)
	{
			
		$stmt = $conn->prepare("insert into transaction 
						(amount,details,user)
							VALUES (?,?,?)");
				
		$stmt->bind_param("dss",$amount,$details,$user);
		$stmt->execute();
		$stmt->close();
	}
 ?>
