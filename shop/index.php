<?php
require('../admin/connection.inc.php');
$sql="select * from banner where Status='1'";
$res=mysqli_query($con,$sql);
$resi=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
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

    <!--Css File-->

    <!-- fontawesome css -->
    <!-- <link rel="stylesheet" href="assets/css/all.min.css" /> -->
    <!-- ionicons css -->
    <!-- <link rel="stylesheet" href="assets/css/ionicons.min.css" /> -->
    <!-- bootstrap css-->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <!-- plugins css -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.css" /> -->
    <!-- style css -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!-- ====== minified  css ======-->

    <!-- vendor min css -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <!-- plugins min css -->
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <!-- style min css -->
    <link rel="stylesheet" href="assets/css/style.min.css" />
<style type="text/css">
    <?php 
    $i=1;
         while($row=mysqli_fetch_assoc($resi)){
                $url="../admin/media/banner/".$row['Image'];
            echo ".b".$i."{ ";
            echo "background-image:";
            echo "url(".$url.");";
            echo "background-repeat: no-repeat;
        background-position: center;}";
 $i++;
        }

    ?>
  
</style>
</head>

<body>
    <!-- offcanvas-overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas-menu start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close">
                <i class="fas fa-times-circle"></i>
            </button>
        <!-- offcanvas-menu-header start -->
        <!-- offcanvas-menu-header end -->
        <!-- offcanvas-menu-search-form -->
        <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search..." />
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <!-- offcanvas-menu-search-form end -->
        <div class="offcanvas-menu">
            <ul id="offcanvas-menu">
                <li>
                    <span class="menu-expand"></span><a href="../index.html">Home</a>
                </li>
                <li>
                    <span class="menu-expand"></span><a href="index.html"><span class="menu-text">shop</span></a>
                   
                </li>

                <li>
                    <span class="menu-expand"></span><a href="javascript:void(0)">My Account</a>
                    <ul class="sub-menu">
                        <li><a href="check-out.html">check out</a></li>
                                                    <li>
                                                        <a href="shopping-cart.html">shopping cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-tracking.html">order tracking</a>
                                                    </li>
                                                    <li><a href="whish-list.html">whish list</a></li>
                                                     <li><a href="my-account.html">Logout</a></li>
                    </ul>
                </li>
             

                <li><a href="contact.html">contact</a></li>
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
                    <div class="shipping-box"><i class="fas fa-truck"></i>Free Shipping on Orders<span>Over ₹100</span></div>
                </div>
                <div class="col-xl-4 col-lg-3">
                    <div class="logo text-center">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="Plazagarden-logo" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="shopping-cart d-lg-flex align-items-center justify-content-end">
                        <button class="search search-toggle" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        <div class="shopping-warraper">
                            <a href="shopping-cart.html" class="shopping-cart-box">
                                <span class="shopping-bags">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                <span class="cart-txt">Cart :₹0.00</span>
                                <span class="cart-badge">0</span>
                            </a>
                            <div class="shop-box-header">
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
                                    </div>
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
                                    <a href="../index.html" class="active">home</a>
                                    
                                </li>
                                <li>
                                    <a href="index.html">shop</a>
                                  
                                </li>
                                  <li><a href="">contact</a></li>
                                <li class="position-relative">
                                    <a href="">My Account</a>
                                    <!-- sub menu -->
                                    <ul class="sub-menu">
                                                     <li><a href="">Log In</a></li>
                                                    <li><a href="">check out</a></li>
                                                    <li>
                                                        <a href="">shopping cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="">order tracking</a>
                                                    </li>
                                                    <li><a href="">whish list</a></li>
                                                     <li><a href="">Logout</a></li>
                                            </ul>
                                        </li>
                                       
                          
                              
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
                            <input class="form-control" type="text" placeholder="Search our catalog" />
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
  <section class="main-slider-section position-relative">
        <div class="main-slider">

<?php 
$j=1;
         while($row=mysqli_fetch_assoc($res)){

  ?>
<?php echo "<div class='slider-item b".$j."'>";?>
    <div class="container">
                    <div class="row align-items-center slider-height2">
                        <div class="col-12 col-xl-8 offset-xl-4">
                            <div class="slider-content">
                                <h4 class="title animate__animated animate__bounce"><?php echo $row['Topic']; ?></h4>
                                <h2 class="sub-title animate__animated">
                                    <span><?php echo $row['Header']; ?></span>
                                </h2>
                                <p class="animate__animated"><?php echo $row['Paragraph']; ?></p>
                                <a href="#" class="btn btn-warning animate__animated">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $j++;} ?>
               




            <!-- slider-item end -->
          <!--   <div class="slider-item bg-img bg4">
                <div class="container">
                    <div class="row align-items-center slider-height2">
                        <div class="col-12 col-xl-8 offset-xl-4">
                            <div class="slider-content">
                                <h4 class="title animate__animated">Clear & Beautiful</h4>
                                <h2 class="sub-title animate__animated">
                                    <span>Gardening Tips and Inspriration</span>
                                </h2>
                                <p class="animate__animated">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                                <a href="shop-grid-left-sidebar.html" class="btn btn-warning animate__animated">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- slider-item end -->
        </div>
        <!-- slick-progress -->
        <div class="slick-progress">
            <span></span>
        </div>
        <!-- slick-progress  end-->
    </section>
    <!-- main slider end -->
    <!-- banner start -->
   <!--  <section class="banner-section bg-gray py-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-xl-0">
                    <div class="banner-thumb">
                        <img src="assets/img/banner/banner1.png" alt="banner thumb-nail" />
                    </div>
                    <div class="banner-info">
                        <span class="text-muted">Sale up to 30% off</span>
                        <h3 class="title">Garden Machine</h3>
                        <p class="text-muted mt-3">
                            Proin vehicula velit blandit leo molestie pulvinar. Praesent sollicitudin libero ex.
                        </p>
                        <a href="shop-grid-left-sidebar.html" class="btn btn-outline-success rounded-0">Shop now!</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-xl-0">
                    <div class="banner-thumb">
                        <img src="assets/img/banner/banner2.png" alt="banner thumb-nail" />
                    </div>
                    <div class="banner-info">
                        <span class="text-muted">Sale up to 20% off</span>
                        <h3 class="title">Garden Tools</h3>
                        <p class="text-muted mt-3">
                            Proin vehicula velit blandit leo molestie pulvinar. Praesent sollicitudin libero ex.
                        </p>
                        <a href="" class="btn btn-outline-success rounded-0">Shop now!</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-thumb">
                        <img src="assets/img/banner/banner3.png" alt="banner thumb-nail" />
                    </div>
                    <div class="banner-info">
                        <span class="text-muted">Sale up to 15% off</span>
                        <h3 class="title">Garden Flowers</h3>
                        <p class="text-muted mt-3">
                            Proin vehicula velit blandit leo molestie pulvinar. Praesent sollicitudin libero ex.
                        </p>
                        <a href="" class="btn btn-outline-success rounded-0">Shop now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- banner end -->
    <!-- product tab start -->
    <section class="product-tab-section py-60 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills product-nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab1" data-toggle="pill" href="#product-pills1" role="tab" aria-controls="product-pills1">New Arrival</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab2" data-toggle="pill" href="#product-pills2" role="tab" aria-controls="product-pills2">OnSale </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab3" data-toggle="pill" href="#product-pills3" role="tab" aria-controls="product-pills3">Featured Products</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="product-pills1" role="tabpanel" aria-labelledby="product-tab1">
                            <div class="product-slider slick-arrow-style">
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-20%</span>
                                            <a href=""> <img src="assets/img/product/1.jpeg" alt="product-thumb-nail" /></a>

                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info position-relative">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="">Strive Shoulder Pack</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-5%</span>
                                            <a href=""> <img src="assets/img/product/2.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="">MH02-Gray</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹28.72</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-12%</span>
                                            <a href=""> <img src="assets/img/product/3.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">Silver - Recertified</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-15%</span>
                                            <a href=""> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="">MH05-Black</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-15%</span>
                                            <a href=""> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">MH05-Black</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-pills2" role="tabpanel" aria-labelledby="product-tab2">
                            <div class="product-slider slick-arrow-style">
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-20%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/1.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">Strive Shoulder Pack</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-5%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/2.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">MH02-Gray</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹28.72</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-12%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/3.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">Silver - Recertified</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-15%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">MH05-Black</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-15%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">MH05-Black</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-pills3" role="tabpanel" aria-labelledby="product-tab3">
                            <div class="product-slider slick-arrow-style">
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-20%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/1.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">Strive Shoulder Pack</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-5%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/2.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">MH02-Gray</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹28.72</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-12%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/3.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">Silver - Recertified</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-15%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">MH05-Black</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">-15%</span>
                                            <a href="product-details-simple.html"> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="raiting text-center pt-3 mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title text-center mb-3">
                                                <a href="product-details-simple.html">MH05-Black</a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <span class="new-price">₹11.90</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product tab end -->
    <!-- advertisement section start-->
    <div class="advertisement bg-white pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="advertise-thumb">
                        <a href="">
                            <img src="assets/img/advertisement/1.jpg" alt="advertisement-thumb " />
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="advertise-thumb">
                                <a href="">
                                    <img src="assets/img/advertisement/2.jpg" alt="advertisement-thumb " />
                                </a>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="advertise-thumb">
                                <a href="">
                                    <img src="assets/img/advertisement/3.jpg" alt="advertisement-thumb " />
                                </a>
                            </div>
                        </div>
                         <div class="col-12 mb-4">
                            <div class="advertise-thumb">
                                <a href="">
                                    <img src="assets/img/advertisement/2.jpg" alt="advertisement-thumb " />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- murtaza jhina-->
    <!-- advertisement section end-->
    <!-- best sellers product start -->
    <section class="best-seller-product pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-4 text-center">
                        <h2>Best sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-slider slick-arrow-style">
                        <div class="product-item">
                            <div class="hover-style">
                                <div class="product-thumb">
                                    <span class="offer new-offer">new</span>
                                    <span class="offer discount-offer">-20%</span>
                                    <a href=""> <img src="assets/img/product/1.jpeg" alt="product-thumb-nail" /></a>
                                    <div class="product-buttons d-flex">
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                        </a>
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                        </a>
                                        <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="raiting text-center pt-3 mb-3">
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                    </div>
                                    <h5 class="title text-center mb-3">
                                        <a href="product-details-simple.html">Strive Shoulder Pack</a>
                                    </h5>
                                    <h3 class="product-price text-center">
                                        <del class="old-price">₹23.90</del>
                                        <span class="new-price">₹19.12</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- slider-item end -->
                        <div class="product-item">
                            <div class="hover-style">
                                <div class="product-thumb">
                                    <span class="offer new-offer">new</span>
                                    <span class="offer discount-offer">-5%</span>
                                    <a href=""> <img src="assets/img/product/2.jpeg" alt="product-thumb-nail" /></a>
                                    <div class="product-buttons d-flex">
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                        </a>
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                        </a>
                                        <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="raiting text-center pt-3 mb-3">
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                    </div>
                                    <h5 class="title text-center mb-3">
                                        <a href="product-details-simple.html">MH02-Gray</a>
                                    </h5>
                                    <h3 class="product-price text-center">
                                        <del class="old-price">₹23.90</del>
                                        <span class="new-price">₹28.72</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- slider-item end -->
                        <div class="product-item">
                            <div class="hover-style">
                                <div class="product-thumb">
                                    <span class="offer new-offer">new</span>
                                    <span class="offer discount-offer">-12%</span>
                                    <a href=""> <img src="assets/img/product/3.jpeg" alt="product-thumb-nail" /></a>
                                    <div class="product-buttons d-flex">
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                        </a>
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                        </a>
                                        <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="raiting text-center pt-3 mb-3">
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                    </div>
                                    <h5 class="title text-center mb-3">
                                        <a href="">Silver - Recertified</a>
                                    </h5>
                                    <h3 class="product-price text-center">
                                        <span class="new-price">₹11.90</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- slider-item end -->
                        <div class="product-item">
                            <div class="hover-style">
                                <div class="product-thumb">
                                    <span class="offer new-offer">new</span>
                                    <span class="offer discount-offer">-15%</span>
                                    <a href=""> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                    <div class="product-buttons d-flex">
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                        </a>
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                        </a>
                                        <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="raiting text-center pt-3 mb-3">
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                    </div>
                                    <h5 class="title text-center mb-3">
                                        <a href="">MH05-Black</a>
                                    </h5>
                                    <h3 class="product-price text-center">
                                        <span class="new-price">₹11.90</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- slider-item end -->
                        <div class="product-item">
                            <div class="hover-style">
                                <div class="product-thumb">
                                    <span class="offer new-offer">new</span>
                                    <span class="offer discount-offer">-15%</span>
                                    <a href=""> <img src="assets/img/product/4.jpeg" alt="product-thumb-nail" /></a>
                                    <div class="product-buttons d-flex">
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                        </a>
                                        <a href="#" class="product-btn">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                        </a>
                                        <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                            <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick-view"><i class="far fa-eye"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="raiting text-center pt-3 mb-3">
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                        <span class="star"><i class="fas fa-star"></i></span>
                                    </div>
                                    <h5 class="title text-center mb-3">
                                        <a href="">MH05-Black</a>
                                    </h5>
                                    <h3 class="product-price text-center">
                                        <span class="new-price">₹11.90</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- slider-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best sellers product end -->
    <!-- instagram-section start-->
    <section class="bg-success py-60 text-center">
        <div class="instagram">
            <h3 class="title">
                <a href="#"><i class="fab fa-instagram"></i>follow @ instagram</a>
            </h3>
        </div>
    </section>
    <!-- instagram-section end-->
    <!-- product category start -->
    <section class="product-category bg-dark-gray py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="section-title mb-4">
                        <h2>Movbile Cover</h2>
                    </div>
                    <div class="category slick-arrow-style">
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/1.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/2.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">MH02-Gray</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹28.72</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/3.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">MH03-Gray</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/1.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/2.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">MH02-Gray</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹28.72</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/3.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">MH03-Gray</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="section-title mb-4">
                        <h2>Passport Cover</h2>
                    </div>
                    <div class="category slick-arrow-style">
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/4.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/5.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/6.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/4.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/5.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/6.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="section-title mb-4">
                        <h2>clutch</h2>
                    </div>
                    <div class="category slick-arrow-style">
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <img src="assets/img/category/8.jpeg" alt="category thumb" />
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href="#"> <img src="assets/img/category/7.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/9.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <img src="assets/img/category/4.jpeg" alt="category thumb" />
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/7.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/9.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="section-title mb-4">
                        <h2>Photo clutch</h2>
                    </div>
                    <div class="category slick-arrow-style">
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/10.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/11.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""><img src="assets/img/category/12.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/9.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""> <img src="assets/img/category/3.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <a href=""><img src="assets/img/category/4.jpeg" alt="category thumb" /></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="raiting mb-3">
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star"><i class="fas fa-star"></i></span>
                                                <span class="star decent"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="title mb-2">
                                                <a href="">Established fact</a>
                                            </h5>
                                            <h3 class="product-price">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product category end -->
  
    <!-- banner-bottom start -->
    <section class="banner-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="media">
                        <span class="banner-icon mr-4"><i class="fas fa-anchor"></i></span>
                        <div class="media-body">
                            <div class="banner-bottom-info">
                                <h3 class="title">Return &amp; Exchange</h3>
                                <p>Committed to return the money in 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="media">
                        <span class="banner-icon mr-4"><i class="fas fa-gift"></i></span>
                        <div class="media-body">
                            <div class="banner-bottom-info">
                                <h3 class="title">Recieve Gift Card</h3>
                                <p>Receive gift all over order ₹5000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media">
                        <span class="banner-icon mr-4"><i class="far fa-life-ring"></i></span>
                        <div class="media-body">
                            <div class="banner-bottom-info">
                                <h3 class="title">Online Support 24/7</h3>
                                <p>24/7 online support is always ready</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-bottom end -->
  
    <!-- footer start -->
    <footer>
        <!-- footer-top start -->
        <div class="footer-top bg-light-gray py-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="footer-widget">
                            <h3 class="title">About Us</h3>
                            <ul class="address">
                                <li>
                                    <div class="media">
                                        <span class="adress-icon"><i class="fas fa-map-marker-alt"></i></span>
                                        <div class="media-body">
                                            <p>Pune,Maharastra IN</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <span class="adress-icon"><i class="fas fa-mobile-alt"></i></span>
                                        <div class="media-body">
                                            <p>+91 9136773853</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <span class="adress-icon"><i class="fas fa-envelope"></i></span>
                                        <div class="media-body">
                                            <p>Email us:</p>
                                            <a href="mailto:">info@MarketingOJO.com</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="footer-widget">
                            <h3 class="title">Products</h3>
                            <ul class="footer-menu">
                                <li>
                                   <!--  <a href="#" class="d-flex align-items-end justify-content-between">
                                            Prices drop
                                            <span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                                <li>
                                  <!--   <a href="#" class="d-flex align-items-end justify-content-between">
                                            New products
                                            <span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                                <li>
                                  <!--   <a href="#" class="d-flex align-items-end justify-content-between">
                                            Best sales <span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                                <li>
                                   <!--  <a href="login.html" class="d-flex align-items-end justify-content-between">
                                            Login <span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                                <li>
                                  <!--   <a href="my-account.html" class="d-flex align-items-end justify-content-between">
                                            My account <span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                        <div class="footer-widget">
                            <h3 class="title">Our company</h3>
                            <ul class="footer-menu">
                                <li>
                                  <!--   <a href="#" class="d-flex align-items-end justify-content-between">
                                            delivery <span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>

                                <li>
                                 <!--    <a href="#" class="d-flex align-items-end justify-content-between">
                                            Legal notice
                                            <span><i class="fas fa-caret-right"></i></span>
                                        </a>
 -->                                </li>
                                <li>
                                   <!--  <a href="#" class="d-flex align-items-end justify-content-between">
                                            about us<span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                                <li>
                                  <!--   <a href="#" class="d-flex align-items-end justify-content-between">
                                            secure payment method
                                            <span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                                <li>
                                   <!--  <a href="#" class="d-flex align-items-end justify-content-between">
                                            Sitemap<span><i class="fas fa-caret-right"></i></span>
                                        </a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="title">Product Tags</h3>
                            <ul class="product-tag d-flex flex-wrap">
                                <li><a href="#">Mobile Cover</a></li>
                                <li><a href="#">Key Chain</a></li>
                                <li><a href="#">Perfume</a></li>
                                <li><a href="#">Frame</a></li>
                                <li><a href="#">Bottles</a></li>
                                <li><a href="#">Gifts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top end -->
        <!-- footer-bottom start -->
        <div class="footer-bottom bg-dark-light py-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="payment text-center text-md-left">
                            <a href="#">
                                <img src="assets/img/payment/payment.png" alt="payment method" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright text-center text-md-right">
                            <p>
                                &copy; Copyright
                                <a href="https://hasthemes.com/">MarketingOJO</a>. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom end -->
    </footer>
    <!-- footer end -->
    <!-- search-box and overlay- -->
    <div class="overlay">
        <div class="scale"></div>
        <form class="search-box" action="#">
            <input type="text" name="search" placeholder="Search our catalog" />
            <button id="close" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <button class="close"><i class="fas fa-times-circle"></i></button>
    </div>
    <!-- search-box and overlay end -->
    <!-- scrollUp -->
    <a id="scrollUp" href="#"><i class="fas fa-arrow-up"></i></a>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="shopdetails" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog products-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-syncing mb-20">
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <img src="assets/img/product-syncing/xl-1.jpeg" alt="product-thumb" />
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <img src="assets/img/product-syncing/xl-2.jpeg" alt="product-thumb" />
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <img src="assets/img/product-syncing/xl-3.jpeg" alt="product-thumb" />
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <img src="assets/img/product-syncing/xl-4.jpeg" alt="product-thumb" />
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <img src="assets/img/product-syncing/xl-1.jpeg" alt="product-thumb" />
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>

                                <div class="product-nav slick-arrow-style">
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="assets/img/product-syncing/1.jpeg" alt="product-thumb" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <a href="javascript:void(0)"> <img src="assets/img/product-syncing/2.jpeg" alt="product-thumb" /></a>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <a href="javascript:void(0)"> <img src="assets/img/product-syncing/3.jpeg" alt="product-thumb" /></a>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <a href="javascript:void(0)"><img src="assets/img/product-syncing/4.jpeg" alt="product-thumb" /></a>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <div class="single-product">
                                        <div class="product-thumb">
                                            <a href="javascript:void(0)"> <img src="assets/img/product-syncing/1.jpeg" alt="product-thumb" /></a>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mt-md-0">
                                <div class="product-details-info">
                                    <h2 class="title">Strive Shoulder Pack</h2>
                                    <h4 class="sub-title">Reference: demo_1</h4>
                                    <div class="star-content">
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <a href="#" id="write-comment">
                                            <span class="comment"><i class="far fa-comment-dots"></i></span> Read reviews <span>(1)</span>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                            <span class="edite"><i class="far fa-edit"></i></span> Write a review
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <span class="product-price text-center">
                                                <del class="old-price">₹23.90</del>
                                                <span class="new-price">₹19.12</span>
                                        </span>
                                        <span class="badge badge-danger">Save 20%</span>
                                        <div class="description">
                                            <p>
                                                Canon's first 4K UHD Camcorder, the GX10 has a compact and portable design that delivers outstanding video quality with remarkable detail. With a combination of incredible features and functionality, the GX10 is the ideal camcorder for aspiring filmmakers.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-size">
                                        <h3 class="title">size</h3>
                                        <select>
                                                <option value="0">S</option>
                                                <option value="1">M</option>
                                                <option value="2">L</option>
                                                <option value="3">XL</option>
                                            </select>
                                    </div>
                                    <div class="check-box-inner check-box-inner2">
                                        <h4 class="title">color</h4>
                                        <div class="d-flex">
                                            <div class="filter-check-box color-white">
                                                <input type="checkbox" id="test13" />
                                                <label for="test13"></label>
                                            </div>
                                            <div class="filter-check-box color-black">
                                                <input type="checkbox" id="test14" />
                                                <label for="test14"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-quantity">
                                        <h3 class="title">Quantity</h3>
                                        <div class="quantity">
                                            <input type="number" min="1" max="9" step="1" value="1" />
                                            <button class="btn btn-primary add-to-cart" data-toggle="modal" data-target="#exampleModalCenter3" type="submit">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    Add to cart
                                                </button>
                                        </div>
                                    </div>
                                    <div class="product-social-links">
                                        <div class="social-sharing">
                                            <span>Share</span>
                                            <ul>
                                                <li>
                                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="googleplus"><i class="fab fa-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="whish-list">
                                        <a href="#"> <i class="far fa-heart"></i> Add to wishlist </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Js Files -->

    <!-- jquery min js -->
    <!-- <script src="assets/js/vendor/jquery-3.5.1.min.js"></script> -->
    <!-- modernizr min js -->
    <!-- <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script> -->
    <!-- poppe min js -->
    <!-- <script src="assets/js/popper.min.js"></script> -->
    <!-- bootstrap min js -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <!-- plugins js -->
    <!-- <script src="assets/js/plugins.js"></script> -->
    <!-- main js -->
    <!-- <script src="assets/js/main.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!-- ====== minified  js ======-->

    <!-- vendor min js -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <!-- plugins min js -->
    <script src="assets/js/plugins.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>