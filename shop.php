<?php
include "connect.php";
session_start();
if (isset($_SESSION['name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Glamo Fit Fashion -Online shop Website</title>
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
                                    echo '<a href="" class="nav-item nav-link pl-3">' . $row["category_name"] . '</a>';
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
                                <a href="index.php" class="nav-item nav-link ">Home</a>
                                <a href="shop.php" class="nav-item nav-link active">Shop</a>
                                <a href="cart.php" class="nav-item nav-link">Shopping Cart</a>
                                <a href="checkout.php" class="nav-item nav-link">Order</a>

                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="navbar-nav ml-auto py-0 d-none d-lg-block">

                                <a href="" class="btn px-0 ml-3">
                                    <a href="notification.php"><i class="fas fa-bell text-primary"></i></a>
                                    <span class="badge text-secondary border border-secondary rounded-circle"
                                        style="padding-bottom: 2px;">0</span>
                                </a>
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
                        <a class="breadcrumb-item text-dark" href="#">Shop</a>
                        <span class="breadcrumb-item active">Shop List</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Shop Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <!-- Shop Sidebar Start -->
                <div class="col-lg-3 col-md-4">
                    <!-- Price Start -->
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class=" pr-3">FILTER
                            BY PRICE </span></h5>
                    <div class="bg-light p-4 mb-30">
                        <form method='post'>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" checked id="price-all" name='pricecategory' value='500'>
                                <label class="custom-control-label" for="price-all">below LKR 500</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="price-1" name='pricecategory' value='1000'>
                                <label class="custom-control-label" for="price-1">below 1000</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="price-2" name='pricecategory' value='2000'>
                                <label class="custom-control-label" for="price-2">below LKR 2000</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="price-3" name='pricecategory' value='4000'>
                                <label class="custom-control-label" for="price-3">below LKR 4000</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="price-4" name='pricecategory' value='5000'>
                                <label class="custom-control-label" for="price-4">below LKR 5000</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="radio" class="custom-control-input" id="price-5" name='pricecategory' value='10000'>
                                <label class="custom-control-label" for="price-5">below LKR 10000</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" name='searchbyprice'>Search</button>

                        </form>
                    </div>
                    <!-- Price End -->

            

                    <!-- Size Start -->
                    <h5 class="section-title position-relative text-uppercase mb-3 mt-2"><span class=" pr-3">ALL
                            SIZES</span></h5>
                    <div class="bg-light p-4 mb-30">
                        <form method='post'>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" checked id="size-all" name='sizecategory' value='xs'>
                                <label class="custom-control-label" for="size-all">XS</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div name='sizecategory'
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="size-1"  name='sizecategory' value='s'>
                                <label class="custom-control-label" for="size-1">S</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="size-2" name='sizecategory' value='m'>
                                <label class="custom-control-label" for="size-2">M</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="size-3" name='sizecategory' value='l'>
                                <label class="custom-control-label" for="size-3">L</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div
                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                <input type="radio" class="custom-control-input" id="size-4" name='sizecategory' value='xl'>
                                <label class="custom-control-label" for="size-4">XL</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="radio" class="custom-control-input" id="size-5" name='sizecategory' value='xll'>
                                <label class="custom-control-label" for="size-5">XLL</label>
                                <span class="badge border font-weight-normal"></span>
                            </div>
                            
                           
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" name='searchbysize'>Search</button>
                       

                        </form>
                    </div>
                    <!-- Size End -->
                </div>
                <!-- Shop Sidebar End -->


                <!-- Shop Product Start -->
                <div class="col-lg-9 col-md-8">
                    <div class="row pb-3">

                        <!-- Query for get latest five -->
        <div class="container-fluid pt-5 pb-3">
            
            <?php
            if(isset($_POST['searchbyprice'])){
                echo '<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3">Search Results</span></h2>';

                echo '<h5>For price below - '.$_POST['pricecategory'].'</h5>';
            }

            if(isset($_POST['searchbysize'])){

                echo '<h5>For size - '.$_POST['sizecategory'].'</h5>';
            }

            if (!isset($_POST['searchbysize']) && !isset($_POST['searchbyprice'])){
                echo '<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="pr-3">All Items</span></h2>';
            }


                    ?>
            <div class="row px-xl-5">


                <?php

                if(isset($_POST['searchbyprice'])){
                    $pricecategory=$_POST['pricecategory'];
                   
                    // echo '<h3>For price below - '.$pricecategory.'</h3>';
                    $query2 = "SELECT * FROM `product` where price <$pricecategory";
                
                $result = mysqli_query($conn,  $query2 ); 
                // search by price, category, size
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src=<?php echo "images/" . $row['image'] ?> alt="">
                                    <div class="product-action">
                                        <h6 class='p-3'>Available -
                                            <?php echo $row['quantity'] ?>
                                        </h6>                                

                                        <div class="container">
                                            <form method='post'>
                                            <input type="text" 
                                                value=<?php
                                            echo $row['product_id'] ?> hidden name='productId'/>
                                            <input type="button" onclick="decrementValue(<?php echo $row['product_id'] ?>)"
                                                value="-" />
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id=<?php
                                            echo $row['product_id'] ?> />
                                            <input type="button" onclick="incrementValue(<?php echo $row['product_id'] ?>)"
                                                value="+" />
                                                <button class="btn btn-outline-dark btn-square m-2" name="addcartfromprice"><i
                                                class="fa fa-shopping-cart"></i></button>
                                            </form>
                                            <?php 
                    if(isset($_POST['addcartfromprice'])){
                        $userID = $_SESSION['userId'];

                        echo '<h6>'.$_POST['quantity'].'</h6>';
                        echo '<h6>'.$_POST['productId'].'</h6>';
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
                        echo '<h6>'.$c.'</h6>';                    

                      // add cart
                      if($c!=0){
                        // print("exists".$exists['cart_id']);
                        $cartId=$exists['cart_id'];
                        echo '<h6>'.$cartId.'</h6>'; 
                        // check item exits
                        $existsItem= "select count(*) as count from cart_products where cart_id ='$cartId' and product_id='$productId'";                    
                        $existsItem = mysqli_fetch_assoc(mysqli_query($conn, $existsItem));
                        $cc =$existsItem['count']; 
                        echo '<h6>'.$cc.'</h6>';  
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
                        $ccc = mysqli_fetch_assoc(mysqli_query($conn, $exists));

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
                                    <a class="h6 text-decoration-none text-truncate" href="">
                                        <?php echo $row['product_name'] ?>
                                    </a>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h6>
                                            <?php echo 'Available sizes' . ' ' . $row['size'] ?>
                                        </h6></br>
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
                    echo "</br></br></br>Sorry! There are no items yet in  below price";
                } ?>

                <?php }else if (!isset($_POST['searchbysize']) && !isset($_POST['searchbyprice'])){?>
                    <?php
                
                $result = mysqli_query($conn, "SELECT * FROM `product`"); 
                // search by price, category, size
            
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src=<?php echo "images/" . $row['image'] ?> alt="">
                                    <div class="product-action">
                                        <h6 class='p-3'>Available -
                                            <?php echo $row['quantity'] ?>
                                        </h6>                                  

                                        <div class="container">
                                            <form method='post'>
                                            <input type="text" 
                                                value=<?php
                                            echo $row['product_id'] ?> hidden name='productId'/>
                                            <input type="button" onclick="decrementValue(<?php echo $row['product_id'] ?>)"
                                                value="-" />
                                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id=<?php
                                            echo $row['product_id'] ?> />
                                            <input type="button" onclick="incrementValue(<?php echo $row['product_id'] ?>)"
                                                value="+" />
                                                <button class="btn btn-outline-dark btn-square m-2" name="addcartfromall"><i
                                                class="fa fa-shopping-cart"></i></button>
                    </form>
                    <?php 
                    if(isset($_POST['addcartfromall'])){
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
                        $ccc = mysqli_fetch_assoc(mysqli_query($conn, $exists));

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
                                    <a class="h6 text-decoration-none text-truncate" href="">
                                        <?php echo $row['product_name'] ?>
                                    </a>
                                    <p>
                                        <?php echo $row['description'] ?>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h6>
                                            <?php echo 'Available sizes' . ' ' . $row['size'] ?>
                                        </h6></br>
                        
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
                    echo "</br></br></br>Sorry! There are no items yet";
                } ?>
                    <?php }?>

                <br>

<?php

if(isset($_POST['searchbysize'])){
    $sizecategory=$_POST['sizecategory'];
    // echo '<h3>For size - '.$sizecategory.'</h3></hr>';
    $query1 = "SELECT * FROM `product` where size like '%" .$sizecategory. "%'";
    // print($query1);

$result = mysqli_query($conn, $query1); 
// search by price, category, size

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src=<?php echo "images/" . $row['image'] ?> alt="">
                    <div class="product-action">
                        <h6 class='p-3'>Available -
                            <?php echo $row['quantity'] ?>
                        </h6>
                       

                        <div class="container">
                            <form method='post'>
                            <input type="text" 
                                                value=<?php
                                            echo $row['product_id'] ?> hidden name='productId'/>
                            <input type="button" onclick="decrementValue(<?php echo $row['product_id'] ?>)"
                                value="-" />
                            <input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id=<?php
                            echo $row['product_id'] ?> />
                            <input type="button" onclick="incrementValue(<?php echo $row['product_id'] ?>)"
                                value="+" />
                                <button class="btn btn-outline-dark btn-square m-2" name="addcartfromsize"><i
                                                class="fa fa-shopping-cart"></i></button>
    </form>
    <?php 
                    if(isset($_POST['addcartfromsize'])){
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
                        echo '<h6>'.$c.'</h6>';                    

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
                        $ccc = mysqli_fetch_assoc(mysqli_query($conn, $exists));

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
                    <a class="h6 text-decoration-none text-truncate" href="">
                        <?php echo $row['product_name'] ?>
                    </a>
                    <p>
                        <?php echo $row['description'] ?>
                    </p>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                    <h6>
                                            <?php echo 'Available sizes' . ' ' . $row['size'] ?>
                                        </h6></br>
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
    echo "</br></br></br>Sorry! There are no items yet in given size";
} ?>    
<?php }?>
            </div>

        </div>
        




                    </div>
                </div>
                <!-- Shop Product End -->
            </div>
        </div>
        <!-- Shop End -->


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
                            <h5 class="text-secondary text-uppercase mb-4">Subscribe</h5>
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
    </body>

    </html>

<?php
} else {
    header("location:login.php");
}
?>