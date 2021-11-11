<?php 

session_start();
include 'connection.php';

if($conn->connect_error){
	die('connection failed: '.$conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$uppercase = preg_match('@[A-Z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$specialchar = preg_match('@[^\w]@', $password);


	if (empty($username) || empty($password)){
		header("Location: register.php?error=*Please fill in all the blanks");
		exit();
	}
	if (strlen($password) < 8 || !$uppercase || !$number || !$specialchar){
		header("Location: register.php?error=*Password must have at least 8 characters, 1 Uppercase, 1 number, 1 symbol");
	}
	else{

		$user = "SELECT * FROM users WHERE Username='$username'";
		$count = $conn -> query($user);

		if (mysqli_num_rows($count)==1){
			header('Location: register.php?error=*Username already exists');
		}else{
			$sql = "INSERT INTO users (Username, Password) VALUES ('$username','$password')";
			$result = $conn -> query($sql);
				
				if ($result == TRUE){
					$_SESSION['username']=$username;
					header('location: register.php?error=Account created succesfully!'); 
				}
		}
	}

}else{
	header("Location: register.php");
	exit();
}
