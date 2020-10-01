<?php
include('User.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>Marketing OJO</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
    <!-- vendor min css -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <!-- plugins min css -->
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <!-- style min css -->
    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>
    <!-- offcanvas-overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas-menu start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
   <!--      <button class="offcanvas-close">
                <i class="fas fa-times-circle"></i>
            </button> -->
        <!-- offcanvas-menu-header start -->
        <!-- offcanvas-menu-header end -->
        <!-- offcanvas-menu-search-form -->
       <!--  <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search..." />
                <button><i class="fas fa-search"></i></button>
            </form>
        </div> -->
        <!-- offcanvas-menu-search-form end -->
        <div class="offcanvas-menu">
            <ul id="offcanvas-menu">
                <li>
                    <span class=""></span><a href="index.php">Home</a>
                </li>
                <li>
                    <span class="menu-expand"></span><a href="#"><span class="menu-text">Products</span></a>
                    <ul class="sub-menu">
                        <?php
                        $sql="select * from categories order by categories asc";
                        $res=mysqli_query($con,$sql); 
                           while($row=mysqli_fetch_assoc($res)){?>
                <li>
                    <?php echo "<a href='product.php?id=".$row['id']."'>"; ?>
                    <?php echo $row['categories']?></a></li>  
                       <?php }
                        ?>
                                           
                    </ul>
                </li>
<?php if (isset($_SESSION['username'])){?>
 
     <li>
                    <span class="menu-expand"></span><a href="javascript:void(0)">My Account</a>
                    <ul class="sub-menu">            <li><a href=""><?php echo $_SESSION['username']; ?></a></li>
                                                    <li><a href="">check out</a></li>
                                                    <li>
                                                        <a href="">shopping cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="">order tracking</a>
                                                    </li>
                                                    <li><a href="">whish list</a></li>
                                                    <li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
                                                  
                    </ul>
                </li>
          
        <?php } ?>
           <!--     
              -->

                <li><a href="contact.html">contact</a></li>


                   <?php  if (!isset($_SESSION['username'])) { ?>
         <li> <a href="login.php">Log In</a> </li>
                    <?php } ?>


                
            </ul>
        </div>
    </div>
    <!-- offcanvas-menu end -->
    <!-- Topbar Section Start -->

    <!-- Topbar Section End -->
    <!-- header-section start -->
    <header class="header-section d-none d-lg-block">
        <div class="container container-lg-fliud">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="shipping-box"><i class="fas fa-truck"></i>Free Shipping on First Order<span></span></div>
                </div>
                <div class="col-xl-4 col-lg-3">
                    <div class="logo text-center">
                        <a href="index.php">
                            <img src="assets/img/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="shopping-cart d-lg-flex align-items-center justify-content-end">
                        <button class="search search-toggle" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        <div class="shopping-warraper">
                            <a href="" class="shopping-cart-box">
                                <span class="shopping-bags">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                <span class="cart-txt">Cart :₹0.00</span>
                                <span class="cart-badge">0</span>
                            </a>
                           <!--  <div class="shop-box-header">
                                <div class="small-cart">
                                    <div class="small-cart-item-wrapper">
                                        <div class="single-item">
                                            <div class="image">
                                                <a href="product-details-simple.html">
                                                    <img src="assets/img/product/5.jpeg" class="img-fluid" alt="" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <p class="cart-name">
                                                    <a href="product-details-simple.html">Strive Shoulder Pack</a>
                                                </p>
                                                <p class="cart-quantity"><span class="quantity-mes">1 x </span> ₹78.80</p>
                                            </div>
                                            <a href="#" class="remove-icon"><i class="ion-close-round"></i></a>
                                        </div>
                                    </div>

                                    <div class="cart-calculation-table">
                                        <table class="table mb-25">
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right"><span>₹129.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Eco Tax (-2.00) :</td>
                                                    <td class="text-right"><span>₹4.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">VAT (20%) :</td>
                                                    <td class="text-right"><span>₹25.80</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right"><span>₹158.80</span></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="cart-buttons">
                                            <a href="" class="btn btn-success">View Cart</a>
                                            <a href="" class="btn btn-success">Checkout</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-menu-section start -->
        <div class="site-menu-section">
            <div class="container container-lg-fliud">
                <div class="row">
                    <div class="col-12">
                        <nav class="site-main-menu position-relative">
                            <ul class="d-flex">
                                <li>
                                    <a href="index.php" class="active">home</a>
                                    
                                </li>
                                <li>
                                     <li class="position-relative">
                                    <a href="">Products</a>
                                    <!-- sub menu -->
                                    <ul class="sub-menu">
                                                    <?php
                        $sql="select * from categories order by categories asc";
                        $res=mysqli_query($con,$sql); 
                           while($row=mysqli_fetch_assoc($res)){?>
                              <li>
                               <?php echo "<a href='product.php?id=".$row['id']."'>"; ?>
                    <?php echo $row['categories']?></a></li>  

                       <?php }
                        ?>
                                                    
                                            </ul>
                                        </li>
                                  
                                </li>
                                  <?php if (isset($_SESSION['username'])){?>
                           <li class="position-relative">
                                    <a href="">My Account</a>
                                    <ul class="sub-menu">

                                                        <li><a href=""><?php echo $_SESSION['username']; ?></a>
                                                    <li><a href="">check out</a></li>
                                                    <li>
                                                        <a href="">shopping cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="">order tracking</a>
                                                    </li>
                                                    <li><a href="">whish list</a></li>
                                                       <li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
                                            </ul>
                                        </li> 
                      <?php } ?>
                          
                                  <li><a href="">contact</a></li>
                                      <?php  if (!isset($_SESSION['username'])) { ?>
         <li> <a href="login.php">Log In</a> </li>
                    <?php } ?>

                        
                              
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-menu-section end -->
    </header>
    <!-- header-section end -->
    <!-- mobile-header start -->
    <header class="mobile-header py-3 d-lg-none">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-4">
                    <a href="" class="mobile-shopping-bag">
                        <span>
                                <i class="fas fa-shopping-bag"></i>
                            </span>
                        <span class="item-count">0</span>
                    </a>
                </div>
                <div class="col-4">
                    <div class="logo text-center">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="Plazagarden logo" />
                        </a>
                    </div>
                </div>
                <div class="col-4 text-right">
                    <div class="mobile-menu-toggle">
                        <a href="javascript:void(0)" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)"></path>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="mobile-search">
                        <form class="form-inline position-relative">
                            <input class="form-control" type="text" placeholder="Search for a Product " />
                            <button class="form-search" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile-header end -->
    <!-- main slider start -->