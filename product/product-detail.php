<?php
require('header.php');
// $id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 0;
// if ( $id != 0 ){
//   $product="select * from product where ID='$id'";
//   $check=mysqli_num_rows($product);
// 	if($check>0){
// 		$row=mysqli_fetch_assoc($product);
// 		$categories_id=$row['Categories_id'];
// 		$name=$row['Name'];
// 		$mrp=$row['mrp'];
// 		$price=$row['Price'];
// 		$qty=$row['qty'];
// 		$min=$row['Min'];
// 		$max=$row['Max'];
// 		$short_desc=$row['Short_desc'];
// 		$description=$row['Description'];
// 		$meta_title=$row['Meta_title'];
// 		$meta_desc=$row['Meta_desc'];
// 		$meta_keyword=$row['Meta_keyword'];
// 		$dealer=$row['Dealer'];
// 	}
// }else{
// 		header('location:product.php');
// 		die();
// 	}
$id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 0;
if ( $id != 0 ){
	$res=mysqli_query($con,"select * from product where id='$id'");
		$imgs=mysqli_query($con,"select * from gallery where Product_Id='$id'");
			$img=mysqli_query($con,"select * from gallery where Product_Id='$id'");
 
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['Categories_id'];
		$name=$row['Name'];
		$mrp=$row['mrp'];
		$price=$row['Price'];
		$qty=$row['qty'];
		$min=$row['Min'];
		$max=$row['Max'];
		$short_desc=$row['Short_desc'];
		$description=$row['Description'];
		$meta_title=$row['Meta_title'];
		$meta_desc=$row['Meta_desc'];
		$meta_keyword=$row['Meta_keyword'];
		$dealer=$row['Dealer'];
		$image=$row['Image'];
         $category=mysqli_query($con,"select categories from categories where id='$categories_id'");
 $row1=mysqli_fetch_assoc($category);
 $categoryname=$row1['categories'];
	}else{
		header('location:product.php');
		die();
	}
}

?>

<div class="breadcrumb-section mb-30 mt-30 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="index.php" class="text-uppercase">Home</a></li>
                            <li class="breadcrumb-item"><a href="product.php" class="text-uppercase">shop</a></li>
                      <li class="breadcrumb-item active">    
                        <?php echo "<a href='product.php?id=".$categories_id."'";?> 
                        class="text-uppercase"><?php echo $categoryname; ?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-section end -->
    <!-- product-details satrt -->
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-syncing mb-20">
                        <div class="single-product">
                            <div class="product-thumb">
                                <?php echo  "<img src='../admin/media/product/".$image."' alt='product-thumb-nail' />" ?>
                            </div>
                        </div>
                          <?php
                        
                        	  while($row=mysqli_fetch_assoc($imgs)){?>
                        	  		 <div class="single-product">
                            <div class="product-thumb">
                         <?php echo  "<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                            </div>
                        </div>
                        	<?php } ?>

                    </div>

                    <div class="product-nav slick-arrow-style">
                    		   <div class="single-product">
                            <div class="product-thumb">
                            		  <a href="javascript:void(0)">
                                <?php echo  "<img src='../admin/media/product/".$image."' alt='product-thumb-nail' />" ?>
                            </a>
                            </div>
                        </div>
                    	   <?php
                        
                        	  while($row=mysqli_fetch_assoc($img)){?>
                        	  		 <div class="single-product">
                            <div class="product-thumb">
                            	  <a href="javascript:void(0)">
                         <?php echo  "<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                     </a>
                            </div>
                        </div>
                        	<?php } ?>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="product-details-info">
                        <h2 class="title"><?php echo $name; ?></h2>
                        <h4 class="sub-title">Reference: demo_1</h4>
                        <div class="star-content">
                            <span class="star-on"><i class="fas fa-star"></i> </span>
                            <span class="star-on"><i class="fas fa-star"></i> </span>
                            <span class="star-on"><i class="fas fa-star"></i> </span>
                            <span class="star-on"><i class="fas fa-star"></i> </span>
                            <span class="star-on"><i class="fas fa-star"></i> </span>
                            <a href="#" id="write-comment"><span class="comment"><i class="far fa-comment-dots"></i></span> Read reviews <span></span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i class="far fa-edit"></i></span> Write a review</a>
                        </div>
                        <div class="product-info">
                            <span class="product-price text-center"><del class="old-price"><?php echo "₹".$mrp; ?></del> <span class="new-price"><?php echo "₹".$price; ?></span> </span>
                            <span class="badge badge-danger">Save 
                           <?php
                           
                           $d=100-($price/$mrp)*100;
                            echo intval($d)."%";
                        ?>
                        </span>
                            <div class="description">
                            	<h3>Short Description</h3>
                                <p><?php echo $short_desc?></p>
                            </div>
                        </div>
                        <div class="add-to-carts">
                            <button class="btn btn-primary add-to-cart ml-0" data-toggle="modal" data-target="#exampleModalCenter3" type="submit">
                                    <i class="fas fa-shopping-cart"></i>
                                   buy now
                                  </button>
                        </div>
                        <div class="product-social-links">
                            <div class="social-sharing border-0">
                                <span>Share</span>
                                <ul>
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="googleplus"><i class="fab fa-google"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="whish-list">
                            <a href="#">
                                <i class="far fa-heart"></i> Add to wishlist
                            </a>
                        </div>
                        <div class="delivery-info">
                            <ul>
                                <li>
                                    <img src="assets/img/icon/check.png" alt="icon"> Security policy (edit with Customer reassurance module)
                                </li>
                                <li>
                                    <img src="assets/img/icon/track.png" alt="icon"> Delivery policy (edit with Customer reassurance module)
                                </li>
                                <li>
                                    <img src="assets/img/icon/both-way.png" alt="icon"> Return policy (edit with Customer reassurance module)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-details end -->

    <!-- product tab start -->
    <div class="product-details-tab-section pt-40 pb-60 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills product-details-nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item my-3 my-md-0">
                            <a class="nav-link active" id="product-tab1" data-toggle="pill" href="#product-pills1" role="tab" aria-controls="product-pills1" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item my-3 my-md-0">
                            <a class="nav-link" id="product-tab2" data-toggle="pill" href="#product-pills2" role="tab" aria-controls="product-pills2" aria-selected="false">Meta title<?php echo $meta_title; ?></a>
                        </li>
                        <li class="nav-item my-3 my-md-0">
                            <a class="nav-link" id="product-tab3" data-toggle="pill" href="#product-pills3" role="tab" aria-controls="product-pills3" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="product-pills1" role="tabpanel" aria-labelledby="product-tab1">
                            <div class="product-description">
                            	<h3>Long Description</h3>
                                <p><?php echo $description?></p>
                              
                            </div>
                            <div class="pt-120">
                               
                                <div class="product-slider3 slick-arrow-style">
                               
                                
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="product-pills2" role="tabpanel" aria-labelledby="product-tab2">
                            <div class="studio-thumb">
                               <h3>Meta Description</h3>
                                <p><?php echo $meta_desc?></p>
                            </div>
                            <div class="pt-120">
                            
                                <div class="product-slider3 slick-arrow-style">
                                  
                                    <!-- slider-item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-pills3" role="tabpanel" aria-labelledby="product-tab3">
                            <div class="grade-content">
                              
                            </div>
                            <div class="pt-120">
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product tab end -->
 <div class="pt-120">
                                <div class="section-title  mb-4 text-center">
                                    <h2>Other products in the same category:</h2>
                                </div>
                                <div class="product-slider3 slick-arrow-style">
<?php 
$category=mysqli_query($con,"select * from product where Categories_id='$categories_id'");
  while($row=mysqli_fetch_assoc($category)){?>



                                    <div class="product-item">
                                        <div class="hover-style">
                                            <div class="product-thumb">
                                              
                                                <span class="offer discount-offer">
                                                 <?php
                            $o=$row['mrp'];
                            $p=$row['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."% off";
                        ?></span>
                                             
                                        <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
              <?php echo  "<img class='product-img' src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?></a>
                                              
                                            </div>
                                            <div class="product-info">
                                               
                                               <h5 class="title text-center mb-3">
                                            <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
                                                    <?php echo $row['Name']; ?></a></h5>
                                            <h3 class="product-price text-center"><del class="old-price"><?php echo "₹".$row['mrp']; ?></del> <span class="new-price"><?php echo "₹".$row['Price']; ?></span> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slider-item end --><?php } ?>
                                </div>
                            </div>
<?php
require('footer.php');
?>