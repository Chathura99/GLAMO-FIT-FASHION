<?php
include "connect.php";
error_reporting(0);
session_start();
if (isset($_SESSION['name'])) {
    header("location:login.php");
}
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
                <div class="col-md-6 text-center mb-2">
                    <h2 class="heading-section">WELCOME TO GLAMO FIT FASHION!</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-3 text-center">Sign Up</h3>
                        <form class="signin-form" method='POST'>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name='name' required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name='email' required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telephone" name='phone' required>
                            </div>

                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    name='password' required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input id="password-field2" type="password" class="form-control"
                                    placeholder="Re-Password" name='cpassword' required>
                                <span toggle="#password-field2"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <?php
                            if (isset($_POST['register'])) {
                                $name = $_POST['name'];
                                $password = md5($_POST['password']);
                                $cpassword = md5($_POST['cpassword']);
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                if (!$conn) {
                                    echo "Server error!";
                                } else {
                                    $sql = "select * from users where email='$email'";
                                    $res = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($res) > 0) {
                                        echo "Email already exists!";
                                    } else {
                                        if ($password == $cpassword) {
                                            $sql1 = "Insert into users (name,email,password,date,telephone) values ('$name','$email','$password','2023-02-12','$phone')";
                                            $res1 = mysqli_query($conn, $sql1);
                                            if ($res1) {
                                                echo "<h5>Registration Successfull</h5>";
                                            } else {
                                                echo "<h5>Something went wrong!</h5>";
                                            }
                                        } else {
                                            echo "<h5>Password doesn't match</h5>";
                                        }
                                    }
                                }
                            }
                            ?>

                            <div class="form-group">
                                <button class="form-control btn btn-primary px-3" name="register">Sign
                                    Up</button>

                            </div>
                        </form>
                        <h3 class="mb-4 text-center">Login your account</h3>
						<div class="form-group">
							<a href='./login.php'> <button class="form-control btn btn-primary px-3">Sign In</button>
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