<?php
require 'connect.php';
include 'includes.php';
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST" autocomplete="off">
		<input type="email" name="email" placeholder="Email"required>
		<input type="password" name="password" placeholder="password"required>
			<input type="submit" name="login">
	</form>
<?php

						if(isset($_POST["login"])){
							echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
							$log= "User succesfully logged in!";
							$email = $_POST['email'];
							$password = $_POST['password'];

							

								$query= "select * from user WHERE email='$email'";
								$query_run = mysqli_query($con,$query);

								if(mysqli_num_rows($query_run)>0){

										//if true -> there is already a user with that username
									echo '<script type="text/javascript"> alert("Username already exists... try another username") </script>';
								}
								else{
									$query= "insert into user values(NULL,'$email','$password')";
									$query_run = mysqli_query($con,$query);

										if($query_run){
											echo '<script type="text/javascript"> alert("Username Registerd..Go to login page to login") </script>';
												logger($log);

										}
										else{
											echo '<script type="text/javascript"> alert("Error!") </script>';

										}
									}
						}
					?>
</body>
</html>