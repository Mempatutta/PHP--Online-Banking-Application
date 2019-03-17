<?php 
	
		include('conn.php');
	session_start();
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=sha1(mysqli_real_escape_string($conn,$_POST['password']));
//prepared statement login for extra security, against SQL injection attacks
	$pswd=$password;
	$stmt = $conn->prepare("SELECT username, password FROM users 
						WHERE username=? && password=? LIMIT 1");
                        $stmt->bind_param("ss", $username, $pswd);
                        $stmt->execute();
                        $stmt->bind_result($username, $pswd);
                        $yes = $stmt->fetch();
                        $stmt->close();

            if ($yes)
                {
				$_SESSION['user']= $username;
				header("location:home.php");
			}
			else
			{ 
		
				Print '<script>alert("Wrong User Name or Password!");</script>';
				
				Print '<script>window.location.assign("login.php");</script>';
			}

    
?>

