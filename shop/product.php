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
                          
                            <?php
                             if($categoryname !=''){ 
                                ?>  <li class="breadcrumb-item"><a href="product.php" class="text-uppercase">shop</a></li>
            <li class="breadcrumb-item active"><a href="product.php" class="text-uppercase"><?php echo $categoryname; ?></a></li><?php
                             } else{
                               ?>  <li class="breadcrumb-item active"><a href="product.php" class="text-uppercase">shop</a></li> <?php
                             }
                            ?>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section end -->
    <!-- wrapper start -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- product tab start -->
                   <!--  <div class="product-tab-section bg-white">
                        <div class="grid-menu-wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-3 mb-lg-0">
                                    <ul class="nav nav-pills grid-nav-pills d-inline-block" id="pills-tab" role="tablist">
                                        <li class="nav-item grid">
                                            <a class="nav-link active" id="product-tab1" data-toggle="pill" href="#product-pills1" role="tab" aria-controls="product-pills1" aria-selected="true"></a>
                                        </li>
                                        <li class="nav-item list mr-0">
                                            <a class="nav-link" id="product-tab2" data-toggle="pill" href="#product-pills2" role="tab" aria-controls="product-pills2" aria-selected="false">
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="total-products text-dark text-capitalize">There are 13 products.</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <span class="sort-by">Sort by:</span>
                                        <button class="btn-dropdown dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Relevance     <i class="fas fa-sort-down"></i>
                                </button>
                                        <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item " href="#">Relevance</a>
                                            <a class="dropdown-item " href="#"> Name, A to Z</a>
                                            <a class="dropdown-item " href="#"> Price, low to high</a>
                                            <a class="dropdown-item " href="#">  Price, high to low</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

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
                                <!-- padination start -->
                                <div class="padination">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                           <!--  <p class="show-items text-center text-sm-left"> Showing 1-12 of 13 item(s)</p> -->
                                        </div>
                                        <div class="col-sm-6">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination justify-content-center justify-content-sm-end">
                                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left mr-1"></i> Previous</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next<i class="fas fa-chevron-right ml-1"></i> </a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- padination end -->
                            </div>
                         

                            </div>
                        </div>
                    </div>
                    <!-- product tab end -->
                </div>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
<?php
require('footer.php');
?>