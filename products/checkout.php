<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require('header.php');
// setcookie('userIssd',$_SESSION['userId'], time() + (86400 * 30), "/"); // 86400 = 1 day
// setcookie('customer',$_SESSION['customer'], time() + (86400 * 30), "/"); // 86400 = 1 day
// setcookie('customermail',$_SESSION['customermail'], time() + (86400 * 30), "/"); // 86400 = 1 day
//setcookie('cart',$_SESSION['shopping_cart'], time() + (86400 * 30), "/"); // 86400 = 1 day
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

<div class="cf-title">Billing Address</div>
<div class="row">
<div class="col-md-7">
<p>*Billing Information</p>
</div>
<div class="col-md-5">
<div class="cf-radio-btns address-rb">
	<div class="cfr-item">
<button class="btn" onclick="functionclick()">Use a different address</button> 
</div>
</div>
</div>
<form class="checkout-form" id="addressform" action="address.php" method="POST">
<div class="row address-inputs">
<div class="col-md-12">
<input type="hidden" name="userid" value='<?php echo $_SESSION['userId']?>'>
<input type="text" name="addressl1" placeholder="Address"  required>
<input type="text"  name="addressl2" placeholder="Address line 2"required>
</div>
<div class="col-md-6">
<input type="text" name="country" placeholder="Country"required>
</div>
<div class="col-md-6">
<input type="text" name="state" placeholder="State"required>
</div>
<div class="col-md-6">
<input type="text" name="city" placeholder="City"required>
</div>
<div class="col-md-6">
<input id="zip" name="pin"  placeholder="Pin Code" type="text" inputmode="numeric" pattern="[0-9]*" required>
</div>
<div class="col-md-12">
<input type="text" name="phone" placeholder="Phone no." required>
</div>
<button class="site-btn submit-order-btn sb-dark" name="address" type="submit">Save Address</button>
</form>
</div>
<?php
$useraddress=$user->getaddress($_SESSION['userId']);
	$avalbleadd=false;
if(count($useraddress)>0){
	$avalbleadd=true;
}
if($avalbleadd==true){?>
	<table class="table table-response">
		<tr>
	<th></th>
		<th>ADDRESS:-</th>
		<th>Country/city</th>
		<th>Phone No:</th>
	</tr>
		<tbody>
      <form method="post" id="paymentform" action="payment.php">
			<?php foreach ($useraddress as $address) {?>
			<tr>
				<td><input type="radio" name="addr" id="one" value='<?php echo $address['Id']; ?>'></td>
				<td class="ml-3"><?php echo $address['Address']; ?></td>
		<td><?php echo  $address['Country'].",".$address['State'].",".$address['City'].",".$address['Pin'];?></td>
		<td><?php echo $address['Phone']; ?></td>
		</tr>
	<?php } ?>
		</tbody>
	</table>


<?php }else{ ?>
<button class="btn mb-3" onclick="functionclick()">ADD New ADDRESS</button> 
 <?php }
?>
</div>
</div>


<div class="col-lg-4 order-1 order-lg-2">
<div class="checkout-cart">
<h3>Your Cart</h3>
<ul class="product-list">

<?php
$total=0;
if(isset($_SESSION["login"])){
	$usercart=$product->fatchcart($_SESSION['userId']);
foreach($usercart as $cart){ ?>
<li>
<!-- <div class="pl-thumb"><img src="img/cart/x1.jpg.pagespeed.ic.AVpomRStqD.jpg" alt=""></div> -->
<h6><?php echo $cart['Name']; ?></h6>
<p>₹<?php echo $cart['Price']*$cart['quantity']; ?></p>
</li>
 <?php $total=$total + ($cart['Price']*$cart['quantity']);
}

}else if(isset($_SESSION["shopping_cart"])){
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
<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"name="ORDER_ID" autocomplete="off"value="<?php echo  "ORDS" . rand(10000,99999999)?>">
<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value='<?php echo $_SESSION['userId']?>'>
<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
           size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
<input type="hidden" title="TXN_AMOUNT" tabindex="10"type="text" name="TXN_AMOUNT" value='<?php echo $total;?>'>
<input type="hidden" title="" tabindex="10"type="text" name="cart" value='<?php echo $_SESSION["shopping_cart"];?>'>
<input type="hidden" title="" tabindex="10"type="text" name="customermail" value='<?php echo $_SESSION['customermail'];?>'>
<a href="" id="" onclick="return checkrideo()">
<button class="mt-3 btn site-btn submit-order-btn sb-dark" name="address">Place Order</button></a>
</div>
</div>
</div>
</section>
<!-- checkout section end -->


<?php
require('footer.php');
?>