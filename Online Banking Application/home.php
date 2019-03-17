<html>
	<head>
	<title>Online bank</title>
	 <link rel="stylesheet" href="main.css">
	</head>
	<?php
		session_start();
		($_SESSION['user'])? :header("location:index.php");
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h2 >Home Page</h2>
		<h3> Welcome to Online bank: <?php echo "$user" ?></h3>
		<a href="logout.php" >Logout</a><br/>
		<br/><br/>
		<button type = "button" onclick="location.href='deposit.php'" >Deposit</button>
		
		
		<button type = "button" onclick="location.href='withdraw.php'" >Withdraw</button>
	
	
		<button type = "button" onclick="location.href='balance.php'" >Check Balance</button>

	</div>
	</body>
	
</html>
