<?php
	include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="reg.css">
	<title>SignUP-Create your Account</title>
</head>
<body class="bg-warning">
	<div class="container mb-3">
		<div class="row d-flex justify-content-center">
			<div class="col-6">
				<div class="card shadow mt-5">
					<div class="text-center">
						<img src="YAY1.png" class="rounded-circle my-2" style="width:30%;" >
						<h1>SIGN UP</h1>
					</div>
						<div class="container">
								<div class="login-form">
								<form action="" method="post">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" name="fname" class="form-control" placeholder="Enter First Name" >
									</div>
									<div class="form-group">
										<label>Middle Name</label>
										<input type="text" name="mname" class="form-control" placeholder="Enter Middle Name">
									</div>
									<div class="form-group">
										<label>	Last Name</label>
										<input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
									</div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="uname" class="form-control" placeholder="Enter Username">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="pword" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="text" name="pword" class="form-control" placeholder="Confirm Password">
									</div>
									<center>
										<button type="submit" name="register" class="btn btn-primary btn-block<br> my-2">REGISTER</button>

										<div class="register text-center">
                                    <p>Already have an account? <a href="login.php"><u>Sign in here.</u></a></p>
                                </div>
											
									</center>
									<br>
									<?php
									if(isset($_REQUEST['register'])){
										$f_name = mysqli_real_escape_string($con, $_POST['fname']);
										$m_name = mysqli_real_escape_string($con, $_POST['mname']);
										$l_name = mysqli_real_escape_string($con, $_POST['lname']);
										$u_name = mysqli_real_escape_string($con, $_POST['uname']);
										$p_word = mysqli_real_escape_string($con, $_POST['pword']);

										mysqli_query($con, "INSERT INTO `tbl_accounts` 
											VALUES ('','$f_name','$m_name','$l_name','$u_name','$p_word',now())");
									?>
									<script type="text/javascript">window.alert('you have successfully created your account');</script>
									<?php
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
