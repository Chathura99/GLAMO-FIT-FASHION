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
                                <a href="admincategories.php" class="nav-item nav-link active">Categories</a>
                                 <a href="adminproducts.php" class="nav-item nav-link ">Products</a>
                                 
                                <a href="adminorders.php" class="nav-item nav-link">Orders</a>
                                <a href="admindelivery.php" class="nav-item nav-link">Delivery</a>

                                <a href="adminpayment.php" class="nav-item nav-link">Payment</a>
                                <a href="admincustomers.php" class="nav-item nav-link">Customers</a>
                                <a href="admingiftbox.php" class="nav-item nav-link">Gift Boxes</a>
                                
                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        </div>
        </div>
        <!-- Carousel End -->

        <!-- Categories Start -->
        <div class="container-fluid pt-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class=" pr-3">Categories</span>
            </h2>
            <!-- update category part -->
            <?php
            if (isset($_GET['catId'])) {
                $catId = $_GET['catId']; ?>




                <div class="col-lg-8 ml-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class=" pr-3">Edit
                            Category</span></h5>
                    <form class="signin-form" method='POST' enctype="multipart/form-data">
                        <div class="bg-secondary p-30 mb-5 p-4">

                            <?php
                            $currentdata = mysqli_query($conn, "SELECT * FROM category where category_id='$catId'");
                            if (mysqli_num_rows($currentdata) > 0) {

                                $row = mysqli_fetch_assoc($currentdata);

                                ?>
                                <div class="row">
                                    <div class="col-md-6 form-group text-light">
                                        <label>Category Name</label>
                                        <input class="form-control" type="text" placeholder="" name='name' value="<?php echo $row['category_name'] ?>">
                                    </div>
                                    <div class="col-md-6 form-group text-light">
                                        <label>Category Description</label>
                                        <input class="form-control" type="text" placeholder="" name='description' value="<?php echo $row['description'] ?>">
                                    </div>
                                    <div class="col-md-6 form-group text-light">
                                        <label>Image</label>
                                        <input class="form-control" type="file"  name='image' >
                                    </div>
                                    <img class="img-fluid w-10 ml-3" style="width:10%;height:10%" src=<?php echo "images/" . $row['image'] ?> alt="">

                                </div>
                                <?php
                            }
                            ?>


                            <?php
                            if (isset($_POST['updateCategory'])) {
                                $name = $_POST['name'];
                                $des = $_POST['description'];
                                $img = $_FILES["image"]["name"];
                            
                                if (!$conn) {
                                    echo "Server error!";
                                } else {

                                    if ($name != '' && $des != '') {
                                        $sql1 = "update category set category_name='$name',description='$des',image='$img' where category_id='$catId'";

                                        $res1 = mysqli_query($conn, $sql1);

                                        if ($res1) {
                                            echo "<h5>Update Successfull</h5>";
                                        }

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
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3"
                                name='updateCategory'>Update</button>
                        </div>
                    </form>
                    <div class="collapse mb-5" id="shipping-address">

                    </div>
                </div>
                <!-- add category part -->
            <?php } else {
                ?>
                <div class="col-lg-8 ml-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class=" pr-3">Add
                            Category</span></h5>
                    <form class="signin-form" method='POST' enctype="multipart/form-data">
                        <div class="bg-secondary p-30 mb-5 p-4">
                            <div class="row">
                                <div class="col-md-6 form-group text-light">
                                    <label>Category Name</label>
                                    <input class="form-control" type="text" placeholder="" name='name'>
                                </div>
                                <div class="col-md-6 form-group text-light">
                                    <label>Category Description</label>
                                    <input class="form-control" type="text" placeholder="" name='description'>
                                </div>
                                <div class="col-md-6 form-group text-light">
                                    <label>Image</label>
                                    <input class="form-control" type="file" placeholder="" name='image'>
                                </div>
                            </div>
                            <?php
                            if (isset($_POST['addCategory'])) {
                                $name = $_POST['name'];
                                $des = $_POST['description'];
                                $img = $_FILES["image"]["name"];
                                if (!$conn) {
                                    echo "Server error!";
                                } else {

                                    if ($name != '' && $des != '') {
                                        $sql1 = "Insert into category (category_name,description,image) values ('$name','$des','$img')";
                                        $res1 = mysqli_query($conn, $sql1);
                                        // notify
                                        $msg = 'New category called ' . $name . 'added!';
                                        //  $notice = "INSERT INTO notification (date, description, user_id, view) VALUES ('2023-02-19 00:00:00', $msg, '', '0')";
                                        $notice = "INSERT INTO notification (date, description, view) VALUES ('2023-02-19 00:00:00', '$msg', '0')";
                                        mysqli_query($conn, $notice);
                                        if ($res1) {
                                            echo "<h5>Added Successfull</h5>";
                                        }

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
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" name='addCategory'>ADD</button>
                        </div>
                    </form>
                    <div class="collapse mb-5" id="shipping-address">

                    </div>
                </div>
            <?php }
            ?>

            <div class="row px-xl-5 pb-3">
                <?php
                $result = mysqli_query($conn, "SELECT * FROM `category`"); 
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 p-1 ">
                            <div class="cat-item d-flex align-items-center mb-4 bg-light">

                                <div class="overflow-hidden" style="width: 800px; height: 400px;">
                                    <img class="img-fluid" src=<?php echo 'images/' . $row["image"] ?> alt="">
                                </div>
                                <div class="flex-fill pl-3">

                                    <h6 class='pt-2' style='color:black'>
                                        <?php echo $row["category_name"]; ?>

                                    </h6>


                                    <p style='font-size:15px' class='text-warning'>
                                        <?php echo $row["description"]; ?>
                                    </p>


                                </div>
                                <!-- query for edit cate -->
                                <a class="btn  btn-square m-2" href='admincategories.php?catId=<?php echo $row["category_id"]; ?>'><i
                                        class="fa fa-edit">EDIT</i></a>


                            </div>

                        </div>
                        <?php
                    }
                } else {
                    echo "0 results";
                } ?>

            </div>
        </div>
        <!-- Categories End -->


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
    <script type="text/javascript">
        function incrementValue(id) {
            var value = parseInt(document.getElementById(id).value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                document.getElementById(id).value = value;
            }
        }
        function decrementValue() {
            var value = parseInt(document.getElementById(id).value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                document.getElementById(id).value = value;
            }

        }
    </script>

    </html>
    <?php
} else {
    header("location:login.php");
}
?>