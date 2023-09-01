<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>LOG IN </title>
</head>
<body class="bg-light">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-6">
				<div class="card shadow mt-5">
					<div class="text-center">
						<img src="img_avatar1.png" class="rounded-circle my-3" style="width:30%;" >
						<h1>LOGIN</h1>
					</div>
						<div class="container">
							<div class="login-form">
								<form action="" method="post">
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="uname" class="form-control" placeholder="username" required>
							
										<label>Password</label>
										<input type="password" name="pword" class="form-control" placeholder="password" required>
									</div>
									
									<center>
										<button type="submit" name="login" class="btn btn-primary btn-block<br> my-2">Login</button>
											<br>
											<p>Don't have an account?</p>
										<button type="submit" name="sign_up" class="btn btn-warning btn-block<br> my-2"><a href="signup.php">
										Sign Up</a></button>
									</center>
									<br>
						<?php
							if(isset($_POST['login'])){
								$username = $_POST['uname'];
								$password = $_POST['pword'];

								$result = mysqli_query($con, "SELECT * FROM tbl_accounts WHERE username = '$username' AND password ='$password'");

								if(mysqli_num_rows($result) > 0){
									echo "<script type='text/javascript'>window.alert('welcome!'); location.replace('home.php')</script>";

								}

								else{
									echo "<script>window.alert('access denied')</script>";
								}
							}
						?>
								</form>
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
