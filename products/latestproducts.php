<!-- letest product section -->
<section class="top-letest-product-section">
<div class="container">
<div class="section-title">
<h2>LATEST PRODUCTS</h2>
</div>
<div class="product-slider owl-carousel">
	   <?php 
$productitems=$product->getData();
   $i = 0; 
    foreach($productitems as $item): 
        if($i >= 5) {break;}else{?>


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
 <?php echo "<a href='category.php?id=".$item['Categories_id']."'>"; ?><p><?php echo $item['Name']; ?></p></a>
</div>
</div>


  <?php $i++; } endforeach;?>

</div>
</div>
</section>
<!-- letest product section end -->