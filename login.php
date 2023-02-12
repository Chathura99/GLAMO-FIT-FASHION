<?php
include "connect.php";
error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
	<title>GLAMO FIT FASHION LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/bg1.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">WELCOME TO GLAMO FIT FASHION!</h2>

				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">LOGIN</h3>
						<form class="signin-form" method='POST'>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" name='email' required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password"
									name='password' required>
								<span toggle="#password-field"
									class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<?php
							if (isset($_POST['login'])) {
								$password = md5($_POST['password']);
								$email = $_POST['email'];
								$sql = "select * from users where email='$email' and password='$password'";
								$res = mysqli_query($conn, $sql);
								if ($conn) {
									if (mysqli_num_rows($res) == 1) {
										echo "Login success";
										$row = mysqli_fetch_assoc($res);
										session_start();
										$_SESSION['name'] = $row['name'];
										header("location:index.php");
									} else {
										echo "<h4>Password or Email is wrong</h4>";
									}
								}
							}
							?>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3" name="login">Sign
									In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: rgb(255, 252, 252)">Forgot Password</a>
								</div>
							</div>


						</form>
						<h3 class="mb-4 text-center">New customer? Create your account</h3>
						<div class="form-group">
							<a href='./register.php'> <button class="form-control btn btn-primary px-3">Sign Up</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>