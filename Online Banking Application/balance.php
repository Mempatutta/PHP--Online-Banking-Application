<html>
	<head>
	<title>Online bank</title>
	<link rel="stylesheet" href="main.css">
	</head>
	<?php
		session_start();
		($_SESSION['user'])?$user=$_SESSION['user']:header("location:index.php");
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h2 >Balance Page</h2>
		<h3> Welcome to Online Bank: <?php echo "$user" ?></h3>
		<a href="home.php" >Back</a><br/>
		<br/><br/>
		
		<a href="logout.php" >Logout</a><br/>
		<br/><br/>
		<?php 
			include('conn.php');
	
			
			$balance=0.00;
			$query=mysqli_query($conn, "SELECT * from transaction 
										WHERE user='$user'");
			while($row=mysqli_fetch_array($query))
			{
				$balance= $balance + $row['amount'];
			}
			Print "Your Balance is : $  " . $balance;

		 ?>



	</div>
	</body>
	
</html>
