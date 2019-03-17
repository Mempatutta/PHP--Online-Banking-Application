<?php 
include('conn.php');
	session_start();
	($_SESSION['user'])?$user=$_SESSION['user']:header("location:index.php");
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("America/Vancouver");
		$amount=mysqli_real_escape_string($conn,$_POST['amount']);
		$details=mysqli_real_escape_string($conn,$_POST['details']);
		
		
		add_money( $conn, $amount,$details,$user);
		Print '<script>alert("Success, deposit!");
		window.location.assign("balance.php");</script>';
	
	}
	else
	{
		header("location:home.php");
	}


	function add_money( $conn, $amount,$details,$user)
	{
			
	$stmt = $conn->prepare("insert into transaction 
						(amount,details,user)
							VALUES (?,?,?)");
				
		$stmt->bind_param("dss",$amount,$details,$user);
		$stmt->execute();
		$stmt->close();
	}
 ?>
