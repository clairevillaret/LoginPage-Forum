<?php 
session_start();
include 'connection.php';

if($conn->connect_error){
	die('connection failed: '.$conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['last_active_time']=time();

	if (empty($username)){
		header("Location: login.php?error=*Username is required");
		exit();
	}else if(empty($password)){
		header("Location: login.php?error=*Password is required");
		exit();
	}
	else{

		$user = "SELECT * FROM users WHERE Username='$username'";
		$count = $conn -> query($user);
	
		if (mysqli_num_rows($count)==1){
			$row = mysqli_fetch_assoc($count);
			if ($row['Username']==$username && $row['Password']==$password){
				$_SESSION['username']=$username;
				header("Location: home.php");
			}else{
				header('Location: login.php?error=*Invalid Username or Password'); 
			}
		}else{
			header('Location: login.php?error=*User does not exist. Please register');
		}
	}

}else{
	header("Location: login.php");
	exit();
}
