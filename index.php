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

                        <div class="btn-group mx-2">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Gift Box</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">Gift Voucher</button>

                            </div>
                        </div>


                        <a href="./logout.php" style="padding-left:10px">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-light">LOG OUT</button>
                            </div>
                        </a>

                        <p style="font-size: 16px; margin: 0;padding:0 10px 0 10px;color:black">
                            <?php echo $_SESSION['name'] ?>
                        </p>
                        <a href="profile.php">
                            <a href="profile.php">
                                <img src="images/testuser.jpg" alt="Profile Picture"
                                    style="width: 50px; height: 50px; border-radius: 50%;"></a></a>
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
                   <div class="col-lg-4 col-6 text-right">
                    <p class="m-0">Customer Service</p>
                    <h5 class="m-0">076- 4272434</h5>
                </div>

            </div>

        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid bg-dark mb-30">
            <div class="row px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a class="btn d-flex align-items-center justify-content-between  w-100" data-toggle="collapse"
                        href="#navbar-vertical" style="height: 50px; padding: 0 30px;">
                        <h6 class="text-light m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                        <i class="fa fa-angle-down text-light"></i>
                    </a>
                    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                        id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                        <div class="navbar-nav w-100">
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM `category`"); // Assuming that $conn is the database connection
                        
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $cat = $row["category_id"];
                                    ?>
                                    <a class="nav-item nav-link pl-3" href='index.php?catId=<?php echo $cat; ?>'><?php echo  $row["category_name"]; ?></a>
                                    <?php
                                }
                            } else {
                                echo "0 results";
                            } ?>
                        </div>
                    </nav>
                </div>
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
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="shop.php" class="nav-item nav-link">Shop</a>
                                <a href="cart.php" class="nav-item nav-link">Shopping Cart</a>
                                <a href="checkout.php" class="nav-item nav-link">Order</a>

                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="navbar-nav ml-auto py-0 d-none d-lg-block">

                                <a href="" class="btn px-0 ml-3">
                                    <a href="notification.php"><i class="fas fa-bell text-primary"></i></a>
                                    <span class="badge text-secondary border border-secondary rounded-circle"
                                        style="padding-bottom: 2px;">10</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        </br>
        <!-- Carousel Start -->
        <div class="container-fluid mb-3">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#header-carousel" data-slide-to="1"></li>
                            <li data-target="#header-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item position-relative active" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="images/frock2.jpg"
                                    style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">GLAMO
                                            FIT FASHION</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Modern Style Made For
                                            Every Day Wear</p>
                                        </p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                            href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="images/women.jpg"
                                    style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">GIRL'S
                                            FASHION</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Choose Your Own Design
                                        </p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                            href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="images/kidgirl.jpg"
                                    style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">KID'S
                                            FASHION</h1>
                                        <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Discover Cool Styles for
                                            Your World of Joy</p>
                                        <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                            href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="img/offer .jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="img/offer 02.jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Featured Start -->
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                        <h5 class="font-weight-semi-bold m-0">Free Delivery</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                        <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                        <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured End -->


        <!-- Categories Start -->
        <div class="container-fluid pt-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                    class="pr-3">Categories</span></h2>
            <div class="row px-xl-5 pb-3">
                <?php
                $result = mysqli_query($conn, "SELECT * FROM `category`"); // Assuming that $conn is the database connection
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1 bg-light border">
                        <a href='index.php?catId=<?php echo $row["category_id"]; ?>'>
                                <div class="cat-item d-flex align-items-center mb-2">

                                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                        <img class="img-fluid pt-1" src=<?php echo 'images/' . $row["image"] ?> alt="">
                                    </div>
                                    <div class="flex-fill pl-3 text-dark">
                                        <h6>
                                            <?php echo $row["category_name"]; ?>
                                        </h6>

                                    </div>


                                </div>
                            </a>
                        </div>
                    <?php
                    }
                } else {
                    echo "0 results";
                } ?>

            </div>
        </div>
        <!-- Categories End -->
        <!-- particular category start -->
        <?php
                
                 if(isset($_GET['catId'])){
                    $catId=$_GET['catId'];?>
                 

               
         <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3"><?php 
            $catname = mysqli_query($conn, "SELECT category_name FROM `category` where category_id=$catId ");
            $catname  = mysqli_fetch_assoc($catname);
            echo $catname['category_name'];
            
            ?></span></h2>
            <div class="row px-xl-5">


                <?php
                $result = mysqli_query($conn, "SELECT * FROM `product` where category_id=$catId "); 
                // limit latest 5
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src=<?php echo "images/" . $row['image'] ?> alt="">
                                    <div class="product-action">
                                        <h6 class='p-3'>Available -
                                            <?php echo $row['quantity'] ?>
                                        </h6>
                                        

                                        <div class="container">
                                            <form method=post>
                                            <input type="text" 
                                                value=<?php
                                            echo $row['product_id'] ?> hidden name='productId'/>
                                            <input type="button" onclick="decrementValue(<?php echo $row['product_id'] ?> )"
                                                value="-" />
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id=<?php
                                            echo $row['product_id'] ?> />
                                            <input type="button" onclick="incrementValue(<?php echo $row['product_id'] ?>)"
                                                value="+" />
                                                <button class="btn btn-outline-dark btn-square m-2" name="addcart"><i
                                                class="fa fa-shopping-cart"></i></button>
                    </form>

                    <?php 
                    if(isset($_POST['addcart'])){
                        $userID = $_SESSION['userId'];

                        // echo '<h6>'.$_POST['quantity'].'</h6>';
                        // echo '<h6>'.$_POST['productId'].'</h6>';
                        $quantity = $_POST['quantity'];
                        $productId = $_POST['productId'];
                        // get cus id
                        $cus = "select * from customer where user_id ='$userID'";                    
                        $cus = mysqli_fetch_assoc(mysqli_query($conn, $cus));
                        $customerId =$cus['customer_id'];
                        // check already have a cart
                        $exists= "select count(*) as count,cart_id from cart where customer_id ='$customerId'";                    
                        $exists = mysqli_fetch_assoc(mysqli_query($conn, $exists));
                        $c =$exists['count'];
                        // echo '<h6>'.$c.'</h6>';                    

                      // add cart
                      if($c!=0){
                        // print("exists".$exists['cart_id']);
                        $cartId=$exists['cart_id'];
                        // echo '<h6>'.$cartId.'</h6>'; 
                        // check item exits
                        $existsItem= "select count(*) as count from cart_products where cart_id ='$cartId' and product_id='$productId'";                    
                        $existsItem = mysqli_fetch_assoc(mysqli_query($conn, $existsItem));
                        $cc =$existsItem['count']; 
                        // echo '<h6>'.$cc.'</h6>';  
                        if($cc!=0){ 
                            $update= "update cart_products set quantity='$quantity' where cart_id ='$cartId' and product_id='$productId'";                    
                            mysqli_query($conn, $update);
                        }else{
                            $add = "INSERT INTO cart_products (product_id,cart_id,quantity) VALUES ('$productId','$cartId','$quantity')";
                            mysqli_query($conn, $add);
                        }

                        
                      }else{
                        // add cart first
                        $cart = "INSERT INTO cart (customer_id) VALUES ('$customerId')";
                        mysqli_query($conn, $cart);
                        // get cart id
                        $ccc= "select cart_id from cart where customer_id ='$customerId'";                    
                        $ccc = mysqli_fetch_assoc(mysqli_query($conn, $ccc));

                        $ccc= $ccc['cart_id'];

                        // add cart items
                        $add = "INSERT INTO cart_products (product_id,quantity,cart_id) VALUES ('$productId','$quantity','$ccc')";
                        mysqli_query($conn, $add);
                      }
                        

                    }
                    ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-dark font-weight-bold" href="">
                                        <?php echo $row['product_name'] ?>
                                    </a>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>
                                            <?php echo 'LKR' . ' ' . $row['price'] ?>
                                        </h5>
                                        <h6 class="text-muted ml-2"><del></del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    echo "No items yet...";
                } ?>
            </div>

        </div>
        <?php }else{
            ?>
  <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3"><?php 
            $catname = mysqli_query($conn, "SELECT category_name FROM `category` where category_id=4 ");
            $catname  = mysqli_fetch_assoc($catname);
            echo $catname['category_name'];
            
            ?></span></h2>
            <div class="row px-xl-5">


                <?php
                $result = mysqli_query($conn, "SELECT * FROM `product` where category_id=4 "); 
                // limit latest 5
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src=<?php echo "images/" . $row['image'] ?> alt="">
                                    <div class="product-action">
                                        <h6 class='p-3'>Available -
                                            <?php echo $row['quantity'] ?>
                                        </h6>
                                        <a class="btn btn-outline-dark btn-square m-2" href=""><i
                                                class="fa fa-shopping-cart"></i></a>

                                        <div class="container">
                                            <input type="button" onclick="decrementValue(<?php echo $row['product_id'] ?>)"
                                                value="-" />
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id=<?php
                                            echo $row['product_id'] ?> />
                                            <input type="button" onclick="incrementValue(<?php echo $row['product_id'] ?>)"
                                                value="+" />
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-dark font-weight-bold" href="">
                                        <?php echo $row['product_name'] ?>
                                    </a>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>
                                            <?php echo 'LKR' . ' ' . $row['price'] ?>
                                        </h5>
                                        <h6 class="text-muted ml-2"><del></del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    echo "No items yet...";
                } ?>
            </div>

        </div>
            <?php
            }?>
         <!-- particular category end -->


        <!-- Offer Start -->
        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 300px;">
                        <img class="img-fluid" src="img/EXN.jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase"></h6>
                            <h3 class="text-white mb-3">HUGE COLLECTION</h3>
                            <a href="" class="btn btn-primary">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-offer mb-30" style="height: 300px;">
                        <img class="img-fluid" src="img/F1.jpg" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase"></h6>
                            <h3 class="text-white mb-3">FIND YOUR PERFACT FIT</h3>
                            <a href="" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->


        <!-- Products Start -->

        <!-- Query for get latest five -->
        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3">NEW
                    ARRIVALS</span></h2>
            <div class="row px-xl-5">


                <?php
                $result = mysqli_query($conn, "SELECT * FROM `product`"); 
                // limit latest 5
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src=<?php echo "images/" . $row['image'] ?> alt="">
                                   
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-dark font-weight-bold" href="">
                                        <?php echo $row['product_name'] ?>
                                    </a>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>
                                            <?php echo 'LKR' . ' ' . $row['price'] ?>
                                        </h5>
                                        <h6 class="text-muted ml-2"><del></del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small class=></small>
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    echo "0 results";
                } ?>
            </div>

        </div>

        <!-- Products End -->


        <!-- Vendor Start -->
        <div class="container-fluid py-5">
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel vendor-carousel">
                        <div class="bg-light p-4">
                            <img src="images/frock3.jpg" alt="">
                        </div>
                        <div class="bg-light p-4">
                            <img src="images/frock1.jpg" alt="">
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->


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
        function decrementValue(id) {
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