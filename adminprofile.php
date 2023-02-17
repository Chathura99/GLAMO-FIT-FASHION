<?php
include "connect.php";
session_start();
if (isset($_SESSION['name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>GLAMO FIT FASHION</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
       <!-- Topbar Start -->
       <div class="container-fluid">
            <div class="row bg-secondary py-1 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center h-100">
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a href="./logout.php" style="padding-left:10px">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-light">LOG OUT</button>
                            </div>
                        </a>

                        <p style="font-size: 16px; margin: 0;padding:0 10px 0 10px;color:black">
                            <?php echo $_SESSION['name'] ?>
                        </p>
                        <a href="profile.php">
                            <img src="images/testuser.jpg" alt="Profile Picture"
                                style="width: 50px; height: 50px; border-radius: 50%;"></a>
                    </div>
                    <div class="d-inline-flex align-items-center d-block d-lg-none">
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-heart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-2">
                            <i class="fas fa-shopping-cart text-dark"></i>
                            <span class="badge text-dark border border-dark rounded-circle"
                                style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                <div class="col-lg-4">
                    <a href="" class="text-decoration-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">GLAMO</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1"> FIT FASHION</span>
                    </a>
                </div>
                <div class="col-lg-4 col-6 text-left">

                </div>
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">ADMIN</span>
                </a>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid bg-dark mb-30">
            <div class="row px-xl-5">
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                        <a href="" class="text-decoration-none d-block d-lg-none">
                            <span class="h1 text-uppercase text-dark bg-light px-2">GLAMO</span>
                            <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1"> FIT FASHION</span>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="adminhome.php" class="nav-item nav-link active">Home</a>
                                <a href="adminorders.php" class="nav-item nav-link">Orders</a>
                                <a href="admindelivery.php" class="nav-item nav-link">Delivery</a>

                                <a href="adminpayment.php" class="nav-item nav-link">Payment</a>
                                <a href="admincustomers.php" class="nav-item nav-link">Customers</a>
                            </div>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Breadcrumb Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light mb-30">
                        <a class="breadcrumb-item text-dark" href="#">Home</a>
                        <span class="breadcrumb-item active">Profile</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Order Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <?php
                $user_id = $_SESSION['userId'];
                $result = mysqli_query($conn, "SELECT *
                FROM users
                INNER JOIN customer ON users.id = customer.user_id where id='$user_id'"); // Assuming that $conn is the database connection
            
                if (mysqli_num_rows($result) > 0) {
                   
                                
                
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-8">
                            <h5 class="section-title position-relative text-uppercase mb-3"><span class=" pr-3">User
                                    Profile</span></h5>
                            <div class="bg-dark p-30 mb-5 p-4">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" placeholder="" value=<?php echo $row["name"]; ?>>
                                    </div>
                                   
                                    <div class="col-md-6 form-group">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="" value=<?php echo $row["email"]?>>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text" placeholder="" value=<?php echo $row["Telephone"]?>>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="" value=<?php echo $row["address"]?>>
                                    </div>
                                    
                                
                            
                                    <div class="col-md-6 form-group">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="" value=<?php echo $row["zip_code"]?>>
                                    </div>
                                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" name='updateUser'>Update</button>

                                </div>
                            </div>
                         
                            
                        </div>


                        <?php
                    }
                } else {
                    echo "0 results";
                } ?>


                <!-- Footer Start -->
                <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
                    <div class="row px-xl-5 pt-5">
                        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                            <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Abathann Kandy</p>
                            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>glamofit@gmail.com</p>
                            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>077-0052775</p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-md-4 mb-5">
                                    <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="text-secondary mb-2" href="#"><i
                                                class="fa fa-angle-right mr-2"></i>Home</a>
                                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our
                                            Shop</a>

                                        <a class="text-secondary mb-2" href="#"><i
                                                class="fa fa-angle-right mr-2"></i>Shopping
                                            Cart</a>
                                        <a class="text-secondary mb-2" href="#"><i
                                                class="fa fa-angle-right mr-2"></i>Order</a>
                                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact
                                            Us</a>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 mb-5">
                                    <h5 class="text-secondary text-uppercase mb-4">SUBSCRIBE</h5>
                                    <p>Sign up to the lates news and offers</p>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Your Email Address">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary">Sign Up</button>
                                            </div>
                                        </div>
                                    </form>
                                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                                    <div class="d-flex">
                                        <a class="btn btn-primary btn-square mr-2" href="#"><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-primary btn-square mr-2" href="#"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-primary btn-square mr-2" href="#"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
                        <div class="col-md-6 px-xl-0">
                            <p class="mb-md-0 text-center text-md-left text-secondary">

                        </div>
                        <div class="col-md-6 px-xl-0 text-center text-md-right">
                            <img class="img-fluid" src="img/payments.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>

                <!-- Contact Javascript File -->
                <script src="mail/jqBootstrapValidation.min.js"></script>
                <script src="mail/contact.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>
    </body>

    </html>
    <?php
} else {
    header("location:login.php");
}
?>