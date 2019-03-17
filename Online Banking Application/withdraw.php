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
		<h2 >Withdraw Page</h2>
		<h3> Welcome to Online Bank: <?php echo "$user" ?></h3>
		
		<a href="home.php" >Back</a><br/>
		<br/><br/>
	
		<a href="logout.php" >Logout</a><br/>
		<form action="minus.php" method="POST">
			Amount to withdraw: <input type="number" name="amount" required="required" /><br/>
			Details : <input type="text" name="details"/><br/>
			<input type="submit" class="button" value="Withdraw"/>
		</form>
		<br/>
		


	</div>
	</body>
	
</html>
