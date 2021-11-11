<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css"/>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	<div style="font-family: sans-serif;" class="pop_up" id="popup_id_1" >
		<form class="popup_content" method="POST" action="createAccount.php" >
			<div class="container">
				<h1 ><center>REGISTER</center></h1>
				<?php
					if (isset($_GET['error'])) { ?>
						<p class="error"><?php echo $_GET['error']; ?></p>
					<?php }
				?>
				<input type="text" name="username" placeholder="Username">
				<div class="main_button">
					<input type="password" name="password" id="pass" placeholder="Password" >
					<span><i class="fas fa-eye" id="eye" onclick="visibility()"></i></span>
					<script>
						function visibility(){
							var state = document.getElementById("pass");
		 					if (state.type === "password"){
		 						state.type = "text";
		 	
		 					}else if(state.type === "text"){
		 						state.type = "password";
		 					}
						}
					</script>
				
					<button type="register" class="login_button">Register</button>
				</div>
			</div>
			<p style="font-size: 8%;"><center>Have an account?</center><a href="login.php"><center>Login here.</center></p>
		</form>
	</div>
</body>
</html>