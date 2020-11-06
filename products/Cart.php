<?php
require('header.php');
?>


<!-- Page info -->
<div class="page-top-info">
<div class="container">
<h4>Your cart</h4>
<div class="site-pagination">
<a href="index.php">Home</a> /
<a href="#">Your cart</a>
</div>
</div>
</div>
<!-- Page info end -->
<!-- cart section end -->
<section class="cart-section spad">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="cart-table">
<h3>Your Cart</h3>
<div class="cart-table-warp">
<table>
<thead>
<tr>
<th class="product-th">Product</th>
<th class="quy-th">Quantity</th>
<th class="size-th">SizeSize</th>
<th class="total-th">Price</th>
</tr>
</thead>
<tbody>
<?php
$total=0;
if(isset($_SESSION["shopping_cart"])){
foreach($_SESSION["shopping_cart"] as $cart): ?>
<tr>
<td class="product-col">
<!-- <img src="img/cart/1.jpg" alt=""> -->
<div class="pc-title">
<h4><?php echo $cart['item_name']; ?></h4>
<p>₹<?php echo $cart['item_price']; ?></p>
</div>
</td>
<td class="quy-col">
<div class="quantity">
<div class="pro-qty">
<input type="text" value='<?php echo $cart['item_quantity']; ?>'>
</div>
</div>
</td>
<td class="size-col"><h4>Size M</h4></td>
<td class="total-col"><h4>₹<?php echo $cart['item_price']*$cart['item_quantity']; ?></h4></td>
</tr>


  <?php $total=$total + ($cart['item_price']*$cart['item_quantity']); endforeach; }?>
</tbody>
</table>
</div>
<div class="total-cost">
<h6>Total <span>₹<?php echo $total;?></span></h6>
</div>
</div>
</div>
<div class="col-lg-4 card-right">
<form class="promo-code-form">
<input type="text" placeholder="Enter promo code">
<button>Submit</button>
</form>
<a href="checkout.php" class="site-btn">Proceed to checkout</a>
<a href="category.php" class="site-btn sb-dark">Continue shopping</a>
</div>
</div>
</div>
</section>
<!-- cart section end -->
<?php
require('footer.php');
?>