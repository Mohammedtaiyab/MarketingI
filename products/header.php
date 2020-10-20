
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
<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="../css/theme-plugins.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">   
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <!-- plugins min css -->
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <!-- style min css -->
    <link rel="stylesheet" href="assets/css/style.min.css" />
       <link rel="stylesheet" href="assets/css/style.css" />
    <link href="login/assets/css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login/style.css">
    <?php
require ('functions.php');
?>
</head>
<body>
    <!-- offcanvas-overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas-menu start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <!-- offcanvas-menu-search-form end -->
        <div class="offcanvas-menu">
            <ul id="offcanvas-menu">
                <li>
                    <span class=""></span><a href="index.php">Home</a>
                </li>
                <li>
                    <span class="menu-expand"></span><a href="#"><span class="menu-text">Products</span></a>
                    <ul class="sub-menu sub1">
                        <?php
                     // $sql="select DISTINCT Categories_id,categories  from product,categories where product.Categories_id=categories.id";
                        //$res=mysqli_query($con,$sql); 
                      //     while($row=mysqli_fetch_assoc($res)){?>
                <li>
                    <?php //echo "<a href='product.php?id=".$row['Categories_id']."'>"; ?>
                    <?php //echo $row['categories']?></a></li>  
                       <?php //}
                        ?>
                                           
                    </ul>
                </li>
<?php //if (isset($_SESSION['username'])){?>
 
     <li>
                    <span class="menu-expand"></span><a href="javascript:void(0)">My Account</a>
                    <ul class="sub-menu">            <li><a href=""><?php // echo $_SESSION['username']; ?></a></li>
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
          
        <?php // } ?>
           <!--     
              -->

                <li><a href="contact.html">contact</a></li>


                   <?php // if (!isset($_SESSION['username'])) { ?>
         <li> <a  data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log In</a> </li>
                    <?php // } ?>


                
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
                <a href="../index.html"> <img src="images/mainlogo.png" style="width: 15%"></a> 
                </div>
                <div class="col-xl-4 col-lg-3">
                    <div class="logo text-center">
                        <a href="index.php">
                            <img src="images/logoproduct.jpg" alt="" style="width: 50%" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="shopping-cart d-lg-flex align-items-center justify-content-end">
                        <button class="search search-toggle" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        <div class="shopping-warraper">
                            <a href="shopping-cart.php" class="shopping-cart-box">
                                <span class="shopping-bags">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                <span class="cart-txt">Cart :₹0.00</span>
                               <?php require('Cart.php');?>
                  
                            </a>
                        
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
                       /*  $sql="select DISTINCT Categories_id,categories  from product,categories where product.Categories_id=categories.id";
                        $res=mysqli_query($con,$sql); 
                           while($row=mysqli_fetch_assoc($res)){ */?>
                <li><div class="sub-menu-li"> 
                      <?php //echo "<a href='product.php?id=".$row['Categories_id']."'>"; ?>
                    <?php // echo $row['categories']?>
                </a> 
                </div></li> 
                  

                       <?php // }
                        ?>
                                                    
                                            </ul>
                                        </li>
                                  
                                </li>
                                  <?php //if (isset($_SESSION['username'])){?>
                           <li class="position-relative">
                                    <a href="">My Account</a>
                                    <ul class="sub-menu">

                                                        <li><a href=""><?php// echo $_SESSION['username']; ?></a>
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
                      <?php //} ?>
                          
                                  <li><a href="">contact</a></li>
                                      <?php //  if (!isset($_SESSION['username'])) { ?>
         <li>  <a  data-toggle="modal" href="javascript:void(0)" data-target="#loginModal">Log In</a> </li>
                    <?php //} ?>

                        
                              
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
                    <a href="shopping-cart.php" class="mobile-shopping-bag">
                        <span>
                                <i class="fas fa-shopping-bag"></i>
                            </span>
                       <?php require('Cart.php');?>
                  
                    </a>
                </div>
                <div class="col-4">
                    <div class="logo text-center">
                        <a href="index.html">
                            <img src="images/logoproduct.jpg" alt="" />
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