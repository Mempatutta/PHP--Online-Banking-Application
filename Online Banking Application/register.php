
<html>
	<head>
	<title>Online bank</title>
<link rel="stylesheet" href="main.css">
	</head>
	<body>

	<div class="container">
		<h2 >Registraion Page</h2>
		<a href="index.php" >Back</a><br/>
		<form action="register.php" method="POST">
			User Name : <input type="text" name="username" required="required"/><br/>
			Password : <input type="password" name="password" required="required"/><br/>
			Address : <input type="text" name="address"/><br/>
			Phone Number: <input type="text" name="phone_number"/><br/>
			
			<input type="submit" value="Register" class="button"/>
			</form>	
	</div>
	</body>
	
</html>

<?php
	include('conn.php');
	
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$phone_number = mysqli_real_escape_string($conn,$_POST['phone_number']);
		
		$bool=true;

		
		$query=mysqli_query($conn,"SELECT * FROM users");	
		while($row=mysqli_fetch_array($query))
		{
			$table_user=$row['username'];
			if($username==$table_user)
			{
				$bool=false;
				Print '<script>alert("User Name is not available!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}
		if($bool)
		{	$pswd=SHA1($password);
	register_user( $conn, $username,$pswd,$address,$phone_number);
	
	
			Print '<script>alert("Success, registered! ");</script>';
			Print '<script>window.location.assign("index.php");</script>';
		}
	}
	
	function register_user( $conn, $username,$pswd,$address,$phone_number)
	{
			
	$stmt = $conn->prepare("insert INTO users 
						(username,password,address,phone_number)
							VALUES (?,?,?,?)");
				
	$stmt->bind_param("sssi",$username,$pswd,$address,$phone_number);
	$stmt->execute();
	$stmt->close();
	}
?>
