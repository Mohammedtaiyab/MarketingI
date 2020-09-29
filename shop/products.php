<?php
require('header.php');
$categoryname='';
$id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 0;
if ( $id != 0 ){
  $product="select * from product where Categories_id='$id'";
  $category=mysqli_query($con,"select categories from categories where id='$id'");
 $row1=mysqli_fetch_assoc($category);
 $categoryname=$row1['categories'];
	}else{
		$product="select * from product";
	}
$result=mysqli_query($con,$product);
?>
 <div class="breadcrumb-section mb-30 mt-30 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.php" class="text-uppercase">Home</a></li>
                            <li class="breadcrumb-item active"><a href="product.php" class="text-uppercase">shop <?php echo $categoryname; ?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section end -->
       <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <!-- product tab start -->
                    <div class="product-tab-section bg-white">
                       
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active grid-sm-100" id="product-pills1" role="tabpanel" aria-labelledby="product-tab1">
                                <div class="row">
                                 
                                      <?php 

         while($row=mysqli_fetch_assoc($result)){ ?>

               <div class="product-list col-sm-6 col-lg-4 mb-60">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                                            <span class="offer discount-offer">
                                                 <?php
                            $o=$row['mrp'];
                            $p=$row['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."%";
                        ?>

                                            </span>
            <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
              <?php echo  "<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                </a>
                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to
                                                        wishlist</span> </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" data-target="#shopdetails">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="quick view"><i class="far fa-eye"></i></span>
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
                                            <h5 class="title text-center mb-3"><a href=""><?php echo $row['Name']; ?></a></h5>
                                            <h3 class="product-price text-center"><del class="old-price"><?php echo "₹".$row['mrp']; ?></del> <span class="new-price"><?php echo "₹".$row['Price']; ?></span> </h3>
                                        </div>
                                    </div>

                      
  <?php }?>
                
          

                    </div>
                <div class="col-md-4 col-lg-3 order-md-first">
                    <aside class="left-sidebar">
                        <!-- search-filter start -->
                        <div class="search-filter mb-30">
                            <div class="check-box-wrapper">
                                <form action="#">
                                    <div class="check-box-inner">
                                        <h4 class="title">Brand</h4>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test1" />
                                            <label for="test1"> Graphic Corner</label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test2" />
                                            <label for="test2"> Studio Design</label>
                                        </div>
                                    </div>
                                    <!-- check-box-inner -->
                                    <div class="check-box-inner">
                                        <h4 class="title">Price</h4>
                                        <div class="filter-check-box">
                                            <input type="radio" id="test3" name="radio-group">
                                            <label for="test3"> $8.00 - $10.00 <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="radio" id="test4" name="radio-group">
                                            <label for="test4">$8.00 - $10.00 <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="radio" id="test5" name="radio-group">
                                            <label for="test5">$8.00 - $10.00 <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="radio" id="test6" name="radio-group">
                                            <label for="test6">$8.00 - $10.00 <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="radio" id="test7" name="radio-group">
                                            <label for="test7">$8.00 - $10.00 <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="radio" id="test8" name="radio-group">
                                            <label for="test8">$8.00 - $10.00 <span>(2)</span></label>
                                        </div>
                                    </div>
                                    <!-- check-box-inner -->
                                    <div class="check-box-inner">
                                        <h4 class="title">Size</h4>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test9">
                                            <label for="test9">sm <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test10">
                                            <label for="test10">md <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test11">
                                            <label for="test11">lg <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test12">
                                            <label for="test12">xl <span>(2)</span></label>
                                        </div>
                                    </div>
                                    <!-- check-box-inner -->

                                    <div class="check-box-inner">
                                        <h4 class="title">color</h4>
                                        <div class="filter-check-box color-white">
                                            <input type="checkbox" id="test13">
                                            <label for="test13">white <span>(4)</span></label>
                                        </div>
                                        <div class="filter-check-box color-black">
                                            <input type="checkbox" id="test14">
                                            <label for="test14">black <span>(4)</span></label>
                                        </div>
                                    </div>
                                    <!-- check-box-inner -->

                                    <div class="check-box-inner">
                                        <h4 class="title">Dimension</h4>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test15">
                                            <label for="test15">40x60cm <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test16">
                                            <label for="test16">40x60cm <span>(2)</span></label>
                                        </div>
                                        <div class="filter-check-box">
                                            <input type="checkbox" id="test17">
                                            <label for="test17">40x60cm <span>(2)</span></label>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- search-filter end -->
                        <div class="advertise-thumb mb-30">
                            <a href="shop-grid-left-sidebar.html">
                                <img src="assets/img/advertisement/7.jpg" alt="advertise-thumb">
                            </a>
                        </div>
                        <!-- advertise-thumb end -->
                        <!-- product category start -->
                        <div class="product-category">
                            <div class="section-title mb-4">
                                <h2 class="bg-white">Top rated </h2>
                            </div>
                            <div class="category slick-arrow-style mb-4">
                                <div class="slider-item">
                                    <ul class="media-list">
                                        <li class="mb-4">
                                            <div class="media">
                                                <div class="cat-product-thumb mr-3">
                                                    <a href="product-details-simple.html"> <img src="assets/img/category/1.jpg" alt="category thumb"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="raiting mb-3">
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star decent"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h5 class="title mb-2"><a href="product-details-simple.html">Established fact</a></h5>
                                                    <h3 class="product-price"><del class="old-price">$23.90</del> <span class="new-price">$19.12</span> </h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="media">
                                                <div class="cat-product-thumb mr-3">
                                                    <a href="product-details-simple.html"> <img src="assets/img/category/2.jpg" alt="category thumb"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="raiting mb-3">
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star decent"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h5 class="title mb-2"><a href="product-details-simple.html">MH02-Gray</a></h5>
                                                    <h3 class="product-price"><del class="old-price">$23.90</del> <span class="new-price">$28.72</span> </h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="cat-product-thumb mr-3">
                                                    <a href="product-details-simple.html"> <img src="assets/img/category/3.jpg" alt="category thumb"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="raiting mb-3">
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star decent"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h5 class="title mb-2"><a href="product-details-simple.html">MH03-Gray</a></h5>
                                                    <h3 class="product-price"><del class="old-price">$23.90</del> <span class="new-price">$19.12</span> </h3>
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
                                                    <a href="product-details-simple.html"> <img src="assets/img/category/1.jpg" alt="category thumb"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="raiting mb-3">
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star decent"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h5 class="title mb-2"><a href="product-details-simple.html">Established fact</a></h5>
                                                    <h3 class="product-price"><del class="old-price">$23.90</del> <span class="new-price">$19.12</span> </h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="media">
                                                <div class="cat-product-thumb mr-3">
                                                    <a href="product-details-simple.html"> <img src="assets/img/category/2.jpg" alt="category thumb"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="raiting mb-3">
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star decent"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h5 class="title mb-2"><a href="product-details-simple.html">MH02-Gray</a></h5>
                                                    <h3 class="product-price"><del class="old-price">$23.90</del> <span class="new-price">$28.72</span> </h3>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="cat-product-thumb mr-3">
                                                    <a href="product-details-simple.html"> <img src="assets/img/category/3.jpg" alt="category thumb"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="raiting mb-3">
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star"><i class="fas fa-star"></i></span>
                                                        <span class="star decent"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <h5 class="title mb-2"><a href="product-details-simple.html">MH03-Gray</a></h5>
                                                    <h3 class="product-price"><del class="old-price">$23.90</del> <span class="new-price">$19.12</span> </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- slider-item end -->
                            </div>
                        </div>
                        <!-- product category end -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- wrapper end -->
<?php
require('footer.php');
?>