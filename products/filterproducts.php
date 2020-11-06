<!-- Product filter section -->
<section class="product-filter-section">
<div class="container">
<div class="section-title">
<h2>BROWSE TOP SELLING PRODUCTS</h2>
</div>
<ul class="product-filter-menu">


  <?php 
$productlist=$product->Productcategory();
   $i = 0; 
    foreach($productlist as $item): 
        if($i >=4) {break;}else{
        	$categoryname=$category->getdatabyId($item['Categories_id']);

 foreach($categoryname as $name): ?>

<?php echo "<li><a href='category.php?id=".$name['id']."'>".$name['categories']."</a></li>";?>



  <?php endforeach; $i++; } endforeach;?>
</ul>
<div class="row">

  <?php 
$productlist=$product->Productcategory();
   $i = 0; 
    foreach($productlist as $item): 
        if($i >= 4) {break;}else{?>


<div class="col-lg-3 col-sm-6">
<div class="product-item">
<div class="pi-pic">
   <?php echo  "<img class='product-img' src='../images/product/".$item['Image']."' alt='product-thumb-nail' />" ?>
<div class="pi-links">
<a href='?action=add&id=<?php echo $item['ID']; ?>' class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
</div>
</div>
<div class="pi-text">
<h6><?php echo "₹".$item['Price']; ?></h6>
 <?php echo "<a href='product.php?id=".$item['ID']."'>"; ?><p><?php echo $item['Name']; ?></p></a></div>
</div>
</div>


  <?php $i++; } endforeach;?>



</div>
<div class="text-center pt-5">
<button class="site-btn sb-line sb-dark">LOAD MORE</button>
</div>
</div>
</section>
<!-- Product filter section end -->