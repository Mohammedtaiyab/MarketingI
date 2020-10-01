<?php
require('header.php');
$sql="select * from banner where Status='1'";
$newarr="select * from product limit 5";
$result=mysqli_query($con,$newarr);
$detail=mysqli_query($con,"select * from product");
$onsale=mysqli_query($con,"select * from product ORDER BY Id DESC");
$feature=mysqli_query($con,"select * from product where Categories_id IN (SELECT DISTINCT Categories_id from product) GROUP BY Categories_id LIMIT 0,5");
$bestsale=mysqli_query($con,"select * from product where Categories_id IN (SELECT DISTINCT Categories_id from product) GROUP BY Categories_id LIMIT 0,5");
$showcase=mysqli_query($con,"select * from product where Categories_id IN (SELECT DISTINCT Categories_id from product) GROUP BY Categories_id LIMIT 0,4");
$res=mysqli_query($con,$sql);
$resi=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
?>
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
               
        </div>
        <!-- slick-progress -->
        <div class="slick-progress">
            <span></span>
        </div>
        <!-- slick-progress  end-->
    </section>
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
                                <?php 

         while($row=mysqli_fetch_assoc($result)){ ?>


                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                            <span class="offer new-offer">new</span>
                    <span class="offer discount-offer">
                        <?php
                            $o=$row['mrp'];
                            $p=$row['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."% off";
                        ?>

                    </span>
             <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
    <?php echo  "<img class='product-img' src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
        </a>

                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" 
                                              <?php  echo "data-target='#p".$row['ID']."'"; ?>>
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
                                                <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?><?php echo $row['Name']; ?></a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$row['mrp']; ?></del>
                                                <span class="new-price"><?php echo "₹".$row['Price']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
  <?php }?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-pills2" role="tabpanel" aria-labelledby="product-tab2">
                            <div class="product-slider slick-arrow-style">
                                  <?php 

         while($row=mysqli_fetch_assoc($onsale)){ ?>


                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                      
                    <span class="offer discount-offer">
                        <?php
                            $o=$row['mrp'];
                            $p=$row['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."%off";
                        ?>

                    </span>
                <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
    <?php echo  "<img class='product-img' src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
        </a>

                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" 
                                              <?php  echo "data-target='#p".$row['ID']."'"; ?>>
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
                                                <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?><?php echo $row['Name']; ?></a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$row['mrp']; ?></del>
                                                <span class="new-price"><?php echo "₹".$row['Price']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
  <?php }?>

                            
                            </div>
                        </div>

                                          <div class="tab-pane fade" id="product-pills3" role="tabpanel" aria-labelledby="product-tab3">
                            <div class="product-slider slick-arrow-style">
                               <?php 

         while($row=mysqli_fetch_assoc($feature)){ ?>


                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                      
                    <span class="offer discount-offer">
                        <?php
                            $o=$row['mrp'];
                            $p=$row['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."% off";
                        ?>

                    </span>
                <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
    <?php echo  "<img class='product-img' src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
        </a>

                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" 
                                              <?php  echo "data-target='#p".$row['ID']."'"; ?>>
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
                                                <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?><?php echo $row['Name']; ?></a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$row['mrp']; ?></del>
                                                <span class="new-price"><?php echo "₹".$row['Price']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
  <?php }?>
                                <!-- slider-item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product tab end -->


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
                     <?php 

         while($row=mysqli_fetch_assoc($bestsale)){ ?>


                                <div class="product-item">
                                    <div class="hover-style">
                                        <div class="product-thumb">
                                      
                    <span class="offer discount-offer">
                        <?php
                            $o=$row['mrp'];
                            $p=$row['Price'];
                           $d=100-($p/$o)*100;
                            echo intval($d)."% off";
                        ?>

                    </span>
              <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
    <?php echo  "<img class='product-img' src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
        </a>

                                            <div class="product-buttons d-flex">
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="wishlist"><i class="far fa-heart"></i></span>
                                                </a>
                                                <a href="#" class="product-btn">
                                                    <span class="p-0 border-0 bg-transparent quick-view" data-toggle="tooltip" data-placement="bottom" data-original-title="Add to wishlist">Add to wishlist</span>
                                                </a>
                                                <a href="javascript:void:(0)" class="product-btn" data-toggle="modal" 
                                              <?php  echo "data-target='#p".$row['ID']."'"; ?>>
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
                                         <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?>
                                                 <?php echo $row['Name']; ?></a>
                                            </h5>
                                            <h3 class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$row['mrp']; ?></del>
                                                <span class="new-price"><?php echo "₹".$row['Price']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider-item end -->
  <?php }?>
                       
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
                <a href="https://www.instagram.com/marketingojo/"><i class="fab fa-instagram"></i>follow @ instagram</a>
            </h3>
        </div>
    </section>
    <!-- instagram-section end-->
    <!-- product category start -->
    <section class="product-category bg-dark-gray py-60">
        <div class="container">
            <div class="row">
<?php 
  while($row=mysqli_fetch_assoc($showcase)){ 
    $cat=$row['Categories_id'];
    $category=mysqli_query($con,"select categories from categories where id='$cat'");
    $row1=mysqli_fetch_assoc($category);
    $categoryname=$row1['categories'];?>
    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div class="section-title mb-4">
                        <h2><?php echo  $categoryname; ?></h2>
                    </div>
                    <?php 
                    $products=mysqli_query($con,"select * from product where Categories_id='$cat' LIMIT 3");
                     while($row2=mysqli_fetch_assoc($products)){
                    ?>

                    <div class="category slick-arrow-style">
                        <div class="slider-item">
                            <ul class="media-list">
                                <li class="mb-4">
                                    <div class="media">
                                        <div class="cat-product-thumb mr-3">
                                            <?php echo "<a href='product-detail.php?id=".$row2['ID']."'>"; ?>
    <?php echo  "<img class='product-img' src='../admin/media/product/".$row2['Image']."' alt='product-thumb-nail' />" ?></a>
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
                                                <?php echo "<a href='product-detail.php?id=".$row['ID']."'>"; ?><?php echo $row['Name']; ?></a>
                                            </h5>
                                            <h3 class="product-price">
                                                  <del class="old-price"><?php echo "₹".$row['mrp']; ?></del>
                                                <span class="new-price"><?php echo "₹".$row['Price']; ?></span>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- slider-item end -->
                    </div>
                </div>
           <?php } ?>
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
   <!-- Modal -->
   <?php
   while($row=mysqli_fetch_assoc($detail)){ 
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
    ?>

    <div class="modal fade" 
    <?php echo  "id='p".$row['ID']."'";?>
    tabindex="-1" role="dialog" aria-hidden="true">
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
                                <?php  $image="<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                                <?php echo  "<img src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                            </div>
                        </div>
                          <?php
                          $pid=$row['ID'];
                            $imgs=mysqli_query($con,"select * from gallery where Product_Id='$pid'");
                              while($row=mysqli_fetch_assoc($imgs)){?>
                                     <div class="single-product">
                            <div class="product-thumb">
                         <?php echo  "<img class='product-img' src='../admin/media/product/".$row['Image']."' alt='product-thumb-nail' />" ?>
                            </div>
                        </div>
                            <?php } ?>

                    </div>

                    <div class="product-nav slick-arrow-style">
                               <div class="single-product">
                            <div class="product-thumb">
                                      <a href="javascript:void(0)">
                            <?php echo  $image; ?>
                            </a>
                            </div>
                        </div>
                           <?php
                           $img=mysqli_query($con,"select * from gallery where Product_Id='$pid'");
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
                                    <h4 class="sub-title">Short Description: <?php echo $short_desc; ?></h4>
                                    <div class="star-content">
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                        <span class="star-on"><i class="fas fa-star"></i> </span>
                                    
                                    </div>
                                    <div class="product-info">
                                        <span class="product-price text-center">
                                                <del class="old-price"><?php echo "₹".$mrp; ?></del>
                                                <span class="new-price"><?php echo "₹".$price; ?></span>
                                        </span>
                                        <span class="badge badge-danger">Save 20%</span>
                                        <div class="description">
                                            <p>Description :
                                               <?php echo $description; ?>
                                            </p>
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
<?php } ?>
  <?php
require('footer.php');
?>