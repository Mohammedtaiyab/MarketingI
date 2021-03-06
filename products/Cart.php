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
<?php
	if(isset($_SESSION['orderstatus'])){?>
<div class="warning-msg">
  <i class="fa fa-warning"></i>
  <?php echo $_SESSION['orderstatus'];
  unset($_SESSION['orderstatus']);?>
  </div>
 <?php } ?>

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
<th class="size-th">Custom File</th>
<th class="total-th">Price</th>
<th class="delete-th">Remove</th>
</tr>
</thead>
<tbody>
<form action="login.php" id="cartform" method="POST">
<?php
$total=0;
$file=0;
if(isset($_SESSION["login"])){
	$usercart=$product->fatchcart($_SESSION['userId']);
foreach($usercart as $cart){ ?>
   <tr class="item-row">
<td class="product-col">
 <img src='../images/product/<?php echo $cart['Image'];?>' alt="">
<div class="pc-title">
<h4><?php echo $cart['Name']; ?></h4>
<p>	<span class="item_price" data-price='<?php echo $cart['Price']; ?>'>₹<?php echo $cart['Price']; ?></span></p>
</div>
</td>
<td class="quy-col">
<div class="quantity">
<div class="pro-qty">
<input class="quantityTxt quantity" id="quantity" name="quantity[]" type="text" value='<?php echo $cart['quantity'];?>' min="1">
</div>
</div>
</td>
<td class="size-col"> 
<?php 
if($cart['Custom_Type']==101){
if(!empty($cart['Custom_File'])){?>
<i class="fa fa-check" aria-hidden="true"></i>
<?php }else{$file++;}?>
<span class=''><a href='#model' class='model' data-toggle='modal' data-id='<?php echo $cart['product_id'];?>'><i class='fa fa-edit'></i></a></span>
<?php }else if($cart['Custom_Type']==102){
if(!empty($cart['Custom_File'])){?>
<i class="fa fa-check" aria-hidden="true"></i>
<?php }else{$file++;}?>
<span class=''><a href='#photo' class='photo' data-toggle='modal' data-id='<?php echo $cart['product_id'];?>'><i class='fa fa-edit'></i></a></span>
<?php }else if($cart['Custom_Type']==103){
if(!empty($cart['Custom_File'])){?>
<i class="fa fa-check" aria-hidden="true"></i>
<?php }else{$file++;}?>
<span class=''><a href='#custmtext' class='custmtext' data-toggle='modal' data-id='<?php echo $cart['product_id'];?>'><i class='fa fa-edit'></i></a></span>
<?php }else{
	echo "--";
}?>
</td>
<td class="total-col item_cost"><h4>₹  <span class="item-cost-val"><?php echo $cart['Price']*$cart['quantity']; ?></span></h4></td>
<td class="size-col"><a href='<?php echo "?action=delete&pid=".$cart['product_id'];?>'><i class="fa fa-trash"></i></a></td>
</tr>
<input type="hidden" class="sessioncartid" id="sessioncartid" name="productid[]" value='<?php echo  $cart['product_id']; ?>'>
  <?php $total=$total + ($cart['Price']*$cart['quantity']); } 
}
else if(isset($_SESSION["shopping_cart"])){
$usercart=$_SESSION["shopping_cart"];
foreach($usercart as $cart){ ?>
   <tr class="item-row">
<td class="product-col">
 <img src='../images/product/<?php echo $cart['item_image'];?>' alt="">
<div class="pc-title">
<h4><?php echo $cart['item_name']; ?></h4>
<p>	<span class="item_price" data-price='<?php echo $cart['item_price']; ?>'>₹<?php echo $cart['item_price']; ?></span></p>
</div>
</td>
<td class="quy-col">
<div class="quantity">
<div class="pro-qty">
<input class="quantityTxt quantity" id="quantity" name="quantity[]" type="text"  value='<?php echo $cart['item_quantity'];?>' min="1">
</div>
</div>
</td>
<td class="size-col"> 
<span class=''><a href='#loginModal' class='loginModal' data-toggle='modal' data-id=''><i class='fa fa-edit'></i></a></span>

</td>
<td class="total-col item_cost"><h4>₹  <span class="item-cost-val"><?php echo $cart['item_price']*$cart['item_quantity']; ?></span></h4></td>
<td class="size-col"><a href='<?php echo "?action=delete&pid=".$cart['item_id'];?>'><i class="fa fa-trash"></i></a></td>
</tr>
<input type="hidden" class="sessioncartid" id="sessioncartid" name="productid[]" value='<?php echo  $cart['item_id']; ?>'>
  <?php $total=$total + ($cart['item_price']*$cart['item_quantity']); } 
}
?>
</tbody>
</table>
</div>
<div class="total-cost">
<h6>Total      ₹<span name="subtotal" id="total_cost" style="margin-left: 0px;"><?php echo $total; ?></span>/-</h6>
<input type="hidden" class="totalbill" name="totalbill" id="subtotal" value='<?php echo $total; ?>'>

</div>
</div>
<span>Add the Details Of Customisation in Custome File Section*</span>
</div>

<div class="col-lg-4 card-right">
<!-- <form class="promo-code-form">
<input type="text" placeholder="Enter promo code">
<button>Submit</button>
</form> -->
<?php
if(!isset($_SESSION['login'])){?>
<a  data-toggle="modal" href="#loginModal" class="site-btn sb-dark">Login to Continue</a>
<?php } else {
if($file>0){?>
<button class="site-btn sb-dark" id="addtocart" href="#addfile" data-toggle="modal" name="cart" type="submit">Proceed to checkout</button>
<?php }else{?>
<button class="site-btn sb-dark" id="addtocart" name="cart" type="submit">Proceed to checkout</button>
<!-- <a href="">Proceed to checkout</a> -->
<?php } } ?>
<a href="category.php" class="btn site-btn sb-dark">Continue shopping</a>
</div>
</div>
</div>
</section>
<!-- cart section end -->
<?php
require('footer.php');
?>