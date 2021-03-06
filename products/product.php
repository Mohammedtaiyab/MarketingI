<?php
require('header.php');
?>
<!-- Page info -->
<div class="page-top-info">
<div class="container">
<h4>Product Details</h4>
<div class="site-pagination">
<a href="index.php">Home</a> /<a href="category.php">Category</a>/
<a href="">Product</a>
</div>
</div>
</div>
<!-- Page info end -->
<!-- product section -->
<section class="product-section">
<div class="container">
<div class="back-link">

</div>
<div class="row">
	 <?php 
	 $gid='';
  $id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 0;
   if(isset( $_GET['pid'])){
 $id = ( isset( $_GET['pid'] ) && is_numeric( $_GET['pid'] ) ) ? intval( $_GET['pid'] ) : 0;
  }
if ( $id != 0 ){

$productitem=$product->singleProduct($id);
   $i = 0; 
    foreach($productitem as $item): $gid=$item['Categories_id'];?>

<div class="col-lg-6">
<div class="product-pic-zoom ">
<?php echo  "<img class='product-big-img imgdetail' src='../images/product/".$item['Image']."' alt='product-thumb-nail' />" ?>
</div>
<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
<div class="product-thumbs-track">
	<?php echo "<div class='pt active' data-imgbigurl='../images/product/".$item['Image']."'>";?>
<?php echo  "<img class='product-big-img' src='../images/product/".$item['Image']."' alt='product-thumb-nail' />" ?></div>

  <?php 
$productgallery=$product->productgallery($id);
  foreach($productgallery as $gallery): ?>
  	<?php echo "<div class='pt' data-imgbigurl='../images/product/".$gallery['Image']."'>";?>
<?php echo  "<img src='../images/product/".$gallery['Image']."' alt='product-thumb-nail' />" ?></div>
  <?php  endforeach; ?>
</div>
</div>
</div>
<div class="col-lg-6 product-details">
<h2 class="p-title"><?php echo $item['Name']; ?></h2>
<h3 class="p-price"><?php echo "₹".$item['Price']."/-" ?></h3>
<h4 class="p-stock">Available: <span>In Stock</span></h4>
<div class="p-rating">
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o"></i>
<i class="fa fa-star-o fa-fade"></i>
</div>
<!-- <div class="p-review">
<a href="#">3 reviews</a>|<a href="#">Add your review</a>
</div> 
<div class="fw-size-choose">
<p>Size</p>
<div class="sc-item">
<input type="radio" name="sc" id="xs-size">
<label for="xs-size">32</label>
</div>
<div class="sc-item">
<input type="radio" name="sc" id="s-size">
<label for="s-size">34</label>
</div>
<div class="sc-item">
<input type="radio" name="sc" id="m-size" checked>
<label for="m-size">36</label>
</div>
<div class="sc-item">
<input type="radio" name="sc" id="l-size">
<label for="l-size">38</label>
</div>
<div class="sc-item disable">
<input type="radio" name="sc" id="xl-size" disabled>
<label for="xl-size">40</label>
</div>
<div class="sc-item">
<input type="radio" name="sc" id="xxl-size">
<label for="xxl-size">42</label>
</div>
</div>-->
<form method="POST" action='?action=add&pid=<?php echo $item['ID'];?>'>
  

<input type="hidden" name="pid" value='<?php echo $item['ID'];?>'>
<div class="quantity">
<p>Quantity</p>
<div class="pro-qty"><input class="quantityTxt quantity" id="quantity" value="1" name="quantity" type="text"  min="1"></div>
</div>
<button type="submit" name="action" class="site-btn">SHOP NOW </button>
</form>
<div id="accordion" class="accordion-area">
<div class="panel">
<div class="panel-header" id="headingOne">
<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
</div>
<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
<div class="panel-body">
<p><?php echo $item['Description']; ?></p>
</div>
</div>
</div>
<div class="panel">
<div class="panel-header" id="headingTwo">
<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Gift Card</button>
</div>
<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
<div class="panel-body">
<!-- <img src="img/xcards.png.pagespeed.ic.JYcvaPNjMW.png" alt=""> -->
<p>Receive special gift cards on all orders above $5000!</p>
</div>
</div>
</div>
<div class="panel">
<div class="panel-header" id="headingThree">
<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
</div>
<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
<div class="panel-body">
<h4>10 Days Returns</h4>
<p>Home Delivery <span>7 - 8 days</span></p>
<p>We are committed to returning the money in 10 working days if the product has not reached to its destination or has been damaged before receiving, provided customer had made an unboxing video without any cut, pause or editing started the video by making 360° view of the intact package from outside where the package details are clearly seen and then opening video. We are not responsible for any loss or damage product without any proof of unboxing video.</p>
</div>
</div>
</div>
</div>
<!-- <div class="social-sharing">
<a href="#"><i class="fa fa-google-plus"></i></a>
<a href="#"><i class="fa fa-pinterest"></i></a>
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
</div> -->
</div>
</div>
  <?php  endforeach; }?>
</div>
</section>
<!-- product section end -->
<!-- RELATED PRODUCTS section -->
<section class="related-product-section">
<div class="container">
	<?php
if ( $gid != 0 ){?>
<div class="section-title">
<h2>RELATED PRODUCTS</h2>
</div>
<div class="product-slider owl-carousel">

<?php
$productlist=$product->Productbycategory($gid);
   $i = 0; 
   if(count($productlist)==1){
$productitems=$product->Productcategory();
   $i = 0; 
    foreach($productitems as $item): 
        if($i >= 5) {break;}else{?>


<div class="product-item">
<div class="pi-pic">
   <?php echo  "<a href='product.php?id=".$item['ID']."'><img class='product-img' src='../images/product/".$item['Image']."' alt='product-thumb-nail' />" ?></a>
<div class="pi-links">
<a href='?action=add&pid=<?php echo $item['ID']; ?>' class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
</div>
</div>
<div class="pi-text">
<h6><?php echo "₹".$item['Price']; ?></h6>
 <?php echo "<a href='product.php?id=".$item['ID']."'>"; ?><p><?php echo $item['Name']; ?></p></a>
</div>
</div>


  <?php $i++; } endforeach;
   }else{
    foreach($productlist as $item):
    	  if($i >=5) {break;}else{ ?>
<div class="product-item">
<div class="pi-pic">
   <?php echo  "<a href='product.php?id=".$item['ID']."'><img class='product-img' src='../images/product/".$item['Image']."' alt='product-thumb-nail' />" ?></a>
<div class="pi-links">
<a href='?action=add&pid=<?php echo $item['ID']; ?>' class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
</div>
</div>
<div class="pi-text">
<h6><?php echo "₹".$item['Price']; ?></h6>
 <?php echo "<a href='product.php?id=".$item['ID']."'>"; ?><p><?php echo $item['Name']; ?></p></a>
</div>
</div>
  <?php $i++; } endforeach; }}?>
</div>
</div>
</section>
<!-- RELATED PRODUCTS section end -->


<?php
require('footer.php');
?>