<?php
include "connect.php";
session_start();
if (isset($_SESSION['name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Glamo Fit Fashion - Online Shop Website </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/logo.jpg" rel="icon">

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
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            .flip-card {
                background-color: transparent;
                width: 300px;
                height: 300px;
                perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front,
            .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .flip-card-front {
                background-color: #bbb;
                color: black;
            }

            .flip-card-back {
                background-color: #2980b9;
                color: white;
                transform: rotateY(180deg);
            }
        </style>
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
                        <a href="adminprofile.php">
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
                        <img src="./images/logo.jpg" alt="Avatar" style='border-radius: 50%;width:30%'>
                        <span class="h3 text-uppercase text-dark bg-light px-2">GLAMO</span>
                        <span class="h3 text-uppercase text-light bg-primary px-2 ml-n1"> FIT FASHION</span>
                    </a>
                </div>
                <div class="col-lg-4 col-6 text-left">

                </div>
                <a href="" class="text-decoration-none">
                    <span class="h6 text-uppercase text-light bg-primary px-2 ml-n1">ADMIN</span>
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
                                <a href="admincategories.php" class="nav-item nav-link ">Categories</a>
                                <a href="adminproducts.php" class="nav-item nav-link">Products</a>
                                <a href="adminorders.php" class="nav-item nav-link ">Orders</a>
                                <a href="admindelivery.php" class="nav-item nav-link ">Delivery</a>

                                <a href="adminpayment.php" class="nav-item nav-link">Payment</a>
                                <a href="admincustomers.php" class="nav-item nav-link ">Customers</a>
                                <a href="admingiftbox.php" class="nav-item nav-link active">Gift Boxes</a>

                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
        <div class="container-fluid pt-5 pb-3">
            
        <div class="col-lg-8 ml-5">
        <h5>Gift Boxes Creations</h5>
                    <form class="signin-form" method='POST' enctype="multipart/form-data">
                        <div class="bg-secondary p-30 mb-5 p-4">
                            <div class="row">
                                <div class="col-md-6 form-group text-light">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="" name='name'>
                                </div>
                                <div class="col-md-6 form-group text-light">
                                    <label>Image</label>
                                    <input class="form-control" type="file" placeholder="" name='image'>
                                </div>
                            </div>
                            <?php
                            if (isset($_POST['addgift'])) {
                                $name = $_POST['name'];
                                $img = $_FILES["image"]["name"];
                                $randomNumber = rand(1, 3);
                                if (!$conn) {
                                    echo "Server error!";
                                } else {
                                    $field1='item'.$randomNumber;
                                    $field2='image'.$randomNumber;

                                    if ($name != '') {
                                        $sql1 = "Insert into gift_box  ( $field1, $field2) values ('$name','$img')";
                                        // print($sql1);
                                        $res1 = mysqli_query($conn, $sql1);
                                      
                                    } else {
                                        echo "<h5>Something went wrong!</h5>";

                                    }

                                }
                            }
                            ?>
                            <?php
                            // print($_FILES['image']);
                            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                                // The file was uploaded successfully
                                $target_dir = "images/"; // Change this to the path of your target directory
                                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                // Check if the file is an image
                                $check = getimagesize($_FILES["image"]["tmp_name"]);
                                if ($check !== false) {
                                    // Move the uploaded file to the target directory
                                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                        echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                                    } else {
                                        echo "Sorry, there was an error uploading your file.";
                                    }
                                } else {
                                    echo "File is not an image.";
                                }
                            }
                            ?>
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" name='addgift'>ADD</button>
                        </div>
                    </form>
                    <div class="collapse mb-5" id="shipping-address">

                    </div>
                </div>
        </div>
        <!-- Featured Start -->
        <div class="container-fluid pt-5 ml-5">
            
            <?php

            $set = 1;
            $result = mysqli_query($conn, "SELECT * from gift_box"); // Assuming that $conn is the database connection
        
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <h5>SET :
                        <?php echo $set ?>
                    </h5>

                    <div class='row'>

                        <div class="flip-card pr-3">
                            <div class="flip-card-inner">
                                <div class="flip-card-back">
                                    <h6>
                                        <?php echo $row['item1'] ?>
                                    </h6>
                                    <img src=<?php echo './images/' . $row['image1'] ?> style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-front">
                                    <h1>Hey</h1>
                                    <p>I am here . . .</p>
                                    <button class='btn btn-sm btn-light'>Open</button>
                                </div>
                            </div>

                        </div>
                        <div class="flip-card pr-3">
                            <div class="flip-card-inner">
                                <div class="flip-card-back">
                                    <h6>
                                        <?php echo $row['item2'] ?>
                                    </h6>
                                    <img src=<?php echo './images/' . $row['image2'] ?> style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-front">
                                    <h1>Hey</h1>
                                    <p>No, I am here . . .</p>
                                    <button class='btn btn-sm btn-light'>Open</button>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-back">
                                    <h6>
                                        <?php echo $row['item3'] ?>
                                    </h6>
                                    <img src=<?php echo './images/' . $row['image3'] ?> style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-front">
                                    <h1>Hey</h1>
                                    <p>No, No, I am here . . .</p>
                                    <button class='btn btn-sm btn-light'>Open</button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <?php
                    $set = $set + 1;
                }
            } else {
                echo "0 results";
            } ?>


        </div>

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
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>

                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping
                                    Cart</a>
                                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Order</a>
                                <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
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
                                <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
                <div class="col-md-6 px-xl-0">
                    <p class="mb-md-0 text-center text-md-left text-secondary">


                    </p>
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