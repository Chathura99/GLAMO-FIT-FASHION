<?php
include "connect.php";
session_start();
if (isset($_SESSION['name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Glamo Fit Fashion </title>
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
                                                        <a href="giftbox.php">Gift Box</a>


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
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="shop.php" class="nav-item nav-link">Shop</a>
                                <a href="cart.php" class="nav-item nav-link active">Shopping Cart</a>
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
                        <span class="breadcrumb-item active">Shopping Cart</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Cart Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-lg-8 table-responsive mb-5">
                    <table class="table table-light table-borderless table-hover text-center mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">

                            
                            <?php
                            $userID = $_SESSION['userId'];
                            $result = mysqli_query($conn, "select *,cart_products.quantity as q from cart_products 
                            INNER join cart on cart_products.cart_id =  cart.cart_id 
                            INNER JOIN customer on customer.customer_id=cart.customer_id 
                            INNER JOIN  product on product.product_id=cart_products.product_id 
                            INNER join users on users.id=customer.user_id 
                            where users.id='$userID';"); // Assuming that $conn is the database connection
                            $totalValue=0;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) { 
                                    $cusname = $row['name'];
                                    $cusid = $row['customer_id'];
                                    $carid = $row['cart_id'];
                                    
                                    
                                    ?>
                                

                                    
                                    <tr>
                                <td class="align-middle"><img src=<?php echo "images/" . $row['image'] ?> alt="" style="width: 50px;">  </td>                            
                            
                                <td><?php echo $row['product_name'] ?></td>
                                <td class="align-middle">LKR <?php echo $row['price'].'.00' ?></td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                    
                                        <input type="text"
                                            class="form-control form-control-sm bg-secondary border-0 text-center" value=<?php echo $row['q'] ?>
                                            disabled>

                                    </div>
                                </td>
                                <td class="align-middle">LKR <?php echo $row['q']*$row['price'].'.00' ?></td>
                                <td class="align-middle">
                                    <form method='post'>
                                    <input type="text" name='productId' value=<?php echo $row['product_id'] ?>
                                            hidden>
                                            <input name='carts' type="text" value=<?php echo $row['cart_id'] ?>
                                            hidden>
                                    <button class="btn btn-sm btn-danger p-2" name='removeitem'><i
                                            class="fa fa-times"></i></button>
                                </form>
                                <?php 
                    if(isset($_POST['removeitem'])){
                        $userID = $_SESSION['userId'];
                        $productId = $_POST['productId'];
                        $cartId = $_POST['carts'];
                        // get cus id
                        $qq = "delete  from cart_products where product_id ='$productId' and cart_id='$cartId'";                    
                        mysqli_query($conn, $qq); 
                        
                        }?>
                                        
                                        
                                        </td>
                            </tr>

                                <?php
                                 $totalValue= $totalValue+$row['q']*$row['price'];
                                }
                            } else {
                                echo "0 results";
                            } ?>

                            <tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                   
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class=" pr-3">Cart
                            Summary</span></h5>
                    <div class=" bg-secondary p-5 mb-5" >
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5><?php echo 'LKR ' .$totalValue.'.00'?></h5>
                            </div>

                        </div>
                        <div class="border-bottom pb-2">
                            
                           
                        </div>
                        
                        <!-- HTML form for payment -->
                        <form method='post'>
                            <label for="card-number"  class='text-light'>Card Number:</label>
                            <input type="text" id="card-number" name="card-number" class="form-control">
                            <label for="expiry-date"  class='text-light'>Expiration Date:</label>
                            <input type="text" id="expiry-date" name="expiry-date" class="form-control">
                            <label for="cvv" class='text-light'>CVV:</label>
                            <input type="text" id="cvv" name="cvv" class="form-control">
                        </br>
                            <label for="amount" class='text-light'>Amount:</label>
                            <input type="text" id="amount" name="amount" class="form" value=<?php echo 'LKR:'.$totalValue.'.00'?> disabled>
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" type="submit" name="pay">Proceed To
                                Order</button>
                        </form>
                        <?php
                        if(isset($_POST['pay'])){
                        $userID = $_SESSION['userId'];
                        $currentDateTime = date('Y-m-d H:i:s');
                        
                        $insertorder= "INSERT INTO orders (name,customer_id,total_price,status,date) VALUES ('$cusname',$cusid,$totalValue,'pending','$currentDateTime')";
                        print_r($insertorder);
                        mysqli_query($conn, $insertorder);
                        // get inserted order id
                        $oid = "select order_id from orders  where customer_id ='$cusid' and date='$currentDateTime'"; 
                        print_r($oid );                   
                        $oid = mysqli_fetch_assoc(mysqli_query($conn, $oid));
                        $oid =$oid['order_id'];

                        // add using loop
                        $cartresult = mysqli_query($conn, "select * from cart_products where cart_id='$carid '"); 
                            
                        if (mysqli_num_rows($cartresult) > 0) {
                            while ($row = mysqli_fetch_assoc($cartresult)) { 
                                $cid=$row['cart_id'];
                                $pid=$row['product_id'];
                                $quan=$row['quantity'];
                                $insertorderproducts= "INSERT INTO order_products (product_id,order_id,quantity) VALUES ('$pid','$oid','$quan')";
                                mysqli_query($conn, $insertorderproducts);
                            }
                        }
                        
                        // delete from cart (autimatically delete from cart_products)
                        $deletecart = "delete from cart where cart_id='$carid'";
                        mysqli_query($conn, $deletecart);

                        // insert payment
                        $insertpayment= "INSERT INTO payment(date,order_id,amount) VALUES (' $currentDateTime',$oid,$totalValue,'pending','$currentDateTime')";
                        // print_r($insertpayment);
                        mysqli_query($conn, $insertpayment);
                    
                    
                    }

                        ?>





                            
                           






                        <!-- JavaScript to handle form submission and payment request -->
                        <script>
                            var form = document.getElementById('payment-form');
                            form.addEventListener('submit', function (event) {
                                event.preventDefault();

                                var cardNumber = document.getElementById('card-number').value;
                                var expiryDate = document.getElementById('expiry-date').value;
                                var cvv = document.getElementById('cvv').value;
                                var amount = document.getElementById('amount').value;

                                // Submit payment request to payment gateway API using API key or access token
                                // Handle response and display result to user
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->


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