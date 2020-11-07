<?php
require('header.php');
?>


<!-- Page info -->
<div class="page-top-info">
<div class="container">
<h4>Products</h4>
<div class="site-pagination">
<a href="index.php">Home</a> /
<a href="category.php">products</a> /
</div>
</div>
</div>
<!-- Page info end -->
<!-- Category section -->
<section class="category-section spad">
<div class="container">
<div class="row">
<div class="col-lg-3 order-2 order-lg-1">
<div class="filter-widget">
<h2 class="fw-title">Categories</h2>
<ul class="category-menu">
	 <?php 
$productlist=$product->Productcategory();
   $i = 0; 
    foreach($productlist as $item): 
        	$categoryname=$category->getdatabyId($item['Categories_id']);

 foreach($categoryname as $name): ?>

<?php echo "<li><a href='category.php?id=".$name['id']."'>".$name['categories']."</a></li>";?>



  <?php endforeach; endforeach;?>
</ul>
</div>
</div>
<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
<div class="row">


  <?php 
  $id = ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) ? intval( $_GET['id'] ) : 0;
  
$productlist='';
if (isset( $_GET['search'])) {
  $search = $_GET['search'];
$productlist=$product->productbyname($search);
   if(count($productlist)<1){
   $productlist=$product->getData();
  }
}
else if($id != 0 ){
$productlist=$product->Productbycategory($id);
}
else{
$productlist=$product->getData();
}
 
    foreach($productlist as $item): ?>
<div class="col-lg-4 col-sm-6">
<div class="product-item">
<div class="pi-pic">
   <?php echo  "<img class='product-img' src='../images/product/".$item['Image']."' alt='product-thumb-nail' />" ?>
<div class="pi-links">
<a href='?action=add&pid=<?php echo $item['ID']; ?>' class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
</div>
</div>
<div class="pi-text">
<h6><?php echo "₹".$item['Price']; ?></h6>
 <?php echo "<a href='product.php?id=".$item['ID']."'>"; ?><p><?php echo $item['Name']; ?></p></a></div>
</div>
</div>


  <?php  endforeach; ?>



<!-- <div class="col-lg-4 col-sm-6">
<div class="product-item">
<div class="pi-pic">
<div class="tag-sale">ON SALE</div>
<img src="img/product/x6.jpg.pagespeed.ic.Nqbz4AFh6C.jpg" alt="">
<div class="pi-links">
<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
</div>
</div>
<div class="pi-text">
<h6>$35,00</h6>
<p>Black and White Stripes Dress</p>
</div>
</div>
</div>
 -->


<!-- <div class="text-center w-100 pt-3">
<button class="site-btn sb-line sb-dark">LOAD MORE</button>
</div> -->
</div>
</div>
</div>
</div>
</section>
<!-- Category section end -->











<?php
require('footer.php');
?>