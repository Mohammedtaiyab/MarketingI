<?php
require('header.php');
?>


<!-- Page info -->
<div class="page-top-info">
<div class="container">
<h4>Your cart</h4>
<div class="site-pagination">
<a href="#">Home</a> /
<a href="#">Your cart</a>
</div>
</div>
</div>
<!-- Page info end -->
<!-- checkout section  -->
<section class="checkout-section spad">
<div class="container">
<div class="row">
<div class="col-lg-8 order-2 order-lg-1">
<form class="checkout-form">
<div class="cf-title">Billing Address</div>
<div class="row">
<div class="col-md-7">
<p>*Billing Information</p>
</div>
<div class="col-md-5">
<div class="cf-radio-btns address-rb">
<div class="cfr-item">
<input type="radio" name="pm" id="one">
<label for="one">Use my regular address</label>
</div>
<div class="cfr-item">
<input type="radio" name="pm" id="two">
<label for="two">Use a different address</label>
</div>
</div>
</div>
</div>
<div class="row address-inputs">
<div class="col-md-12">
<input type="text" placeholder="Address">
<input type="text" placeholder="Address line 2">
<input type="text" placeholder="Country">
</div>
<div class="col-md-6">
<input type="text" placeholder="Zip code">
</div>
<div class="col-md-6">
<input type="text" placeholder="Phone no.">
</div>
</div>
<div class="cf-title">Delievery Info</div>
<div class="row shipping-btns">
<div class="col-6">
<h4>Standard</h4>
</div>
<div class="col-6">
<div class="cf-radio-btns">
<div class="cfr-item">
<input type="radio" name="shipping" id="ship-1">
<label for="ship-1">Free</label>
</div>
</div>
</div>
<div class="col-6">
<h4>Next day delievery </h4>
</div>
<div class="col-6">
<div class="cf-radio-btns">
<div class="cfr-item">
<input type="radio" name="shipping" id="ship-2">
<label for="ship-2">$3.45</label>
</div>
</div>
</div>
</div>
<div class="cf-title">Payment</div>
<ul class="payment-list">
<li>Paypal<a href="#"><img src="img/xpaypal.png.pagespeed.ic.zQ_J36CLr7.png" alt=""></a></li>
<li>Credit / Debit card<a href="#"><img src="img/mastercart.png" alt=""></a></li>
<li>Pay when you get the package</li>
</ul>
<button class="site-btn submit-order-btn">Place Order</button>
</form>
</div>
<div class="col-lg-4 order-1 order-lg-2">
<div class="checkout-cart">
<h3>Your Cart</h3>
<ul class="product-list">

<?php
$total=0;
if(isset($_SESSION["shopping_cart"])){
foreach($_SESSION["shopping_cart"] as $cart): ?>


<li>
<!-- <div class="pl-thumb"><img src="img/cart/x1.jpg.pagespeed.ic.AVpomRStqD.jpg" alt=""></div> -->
<h6><?php echo $cart['item_name']; ?></h6>
<p>₹<?php echo $cart['item_price']*$cart['item_quantity']; ?></p>
</li>
 <?php $total=$total + ($cart['item_price']*$cart['item_quantity']); endforeach;} ?>
</ul>
<ul class="price-list">
<li>Total<span>₹<?php echo $total;?></span></li>
<li>Shipping<span>free</span></li>
<li class="total">Total<span>₹<?php echo $total;?></span></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<!-- checkout section end -->


<?php
require('footer.php');
?>