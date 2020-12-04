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

<div class="cf-title"><h4>*Billing Information<h4></div>
<div class="row">
<div class="col-md-7">
</div>
<div class="cart-table">
	<div class="d-inline-flex">
		<h3>Your Address's </h3>
<h6 style="padding-left: 15px; padding-top: 3px;">
	<a href='addressdetails.php'><span><i class="fa fa-edit" aria-hidden="true"></i>Edit</span></a>
</h6>	</div>

<div class="cart-table-warp">
<table>
<thead>
<tr>
<th  style="text-align: left;">Name</th>
<th  style="text-align: left;">Phone No: </th>
<th  style="text-align: left;">Address</th>
<th  style="text-align: left;">Select</th>

</tr>
</thead>
<tbody>
<?php $useraddress=$user->getaddress($_SESSION['userId']);
foreach ($useraddress as $address) {	?>
<tr>
<td ><?php echo $address['Name']; ?></td>
<td ><?php echo $address['Phone']; ?></td>
<td style="width: 40%">
<?php echo $address['Address']; ?>
<div>
<?php echo $address['Address2']; ?>
<p><?php echo $address['City']." ".$address['State']." ".$address['Pin']; ?></p>
</div>
</td>
<td>
	<?php if($address['Status']==1){?>
		<input type="checkbox" name="addressid" onclick="onlyOne(this)" checked>
	<?php }else{?>
		<form action="address.php" method="POST">
<input type="checkbox" name="addressid" value='<?php echo $address['Id'];?>' onChange="this.form.submit()" onclick="onlyOne(this)">
</form>
<?php } ?>
	

</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<div class="total-cost">
</div>
</div>
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
<form method="post" id="paymentform" action="payment.php">
<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"name="ORDER_ID" autocomplete="off"value="<?php echo  "ORDS" . rand(10000,99999999)?>">
<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value='<?php echo $_SESSION['userId']?>'>
<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
           size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
<input type="hidden" title="TXN_AMOUNT" tabindex="10"type="text" name="TXN_AMOUNT" value='<?php echo $total;?>'>
<input type="hidden" title="" tabindex="10"type="text" name="cart" value='<?php echo $_SESSION["shopping_cart"];?>'>
<input type="hidden" title="" tabindex="10"type="text" name="customermail" value='<?php echo $_SESSION['customermail'];?>'>
<a href="" id="">
<button class="mt-3 btn site-btn submit-order-btn sb-dark" name="address">Place Order</button></a>
</div>
</div>
</div>
</section>
<!-- checkout section end -->


<?php
require('footer.php');
?>