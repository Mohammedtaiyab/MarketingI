<?php
require('header.php');
?>
<!-- Page info -->
<div class="page-top-info">
<div class="container">
<h4>Your Order List</h4>
<div class="site-pagination">
<a href="index.php">Home</a> /
<a href="#">Your Order</a>
</div>
</div>
</div>
<!-- Page info end -->


<section class="cart-section spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="cart-table">
<h3>Your Cart</h3>
<div class="cart-table-warp">
<table>
<thead>
<tr>
<th class="product-th">Product</th>
<th class="quy-th">Quantity</th>
<th class="size-th">Custume</th>
<th class="total-th">Price</th>
<th class="delete-th">Remove</th>
</tr>
</thead>
<tbody>
<?php
$total=0;
if(isset($_SESSION["login"])){
$usercart=$order->fatchorder($_SESSION['userId']);
print_r($usercart);
foreach($usercart as $cart){ ?>
   <tr class="item-row">
<td class="product-col">
 <img src='../images/product/<?php echo $cart['Image'];?>' alt="">
<div class="pc-title">
<h4><?php echo $cart['Name']."-".$cart['product_id']; ?></h4>
<p>	<span class="item_price" data-price='<?php echo $cart['Price']; ?>'>₹<?php echo $cart['Price']; ?></span></p>
</div>
</td>
<td class="quy-col">
<p><span><?php echo $cart['quantity'];?></span>
</p>
</div>
</div>
</td>
<!-- <td class="size-col"><h4>Size M</h4></td> -->
<td class="total-col item_cost"><h4>₹  <span class="item-cost-val"><?php echo $cart['Price']; ?></span></h4></td>
<td class="size-col"><a href='<?php echo "?action=delete&pid=".$cart['product_id'];?>'><i class="fa fa-trash"></i></a></td>
</tr>
<input type="hidden" class="sessioncartid" id="sessioncartid" name="productid[]" value='<?php echo  $cart['product_id']; ?>'>
  <?php $total=$total + ($cart['Price']*$cart['quantity']); } 
}?>
</tbody>
</table>
</div>
<div class="total-cost">
<h6>Total <span>$99.90</span></h6>
</div>
</div>
</div>
<!-- <div class="col-lg-4 card-right">
<form class="promo-code-form">
<input type="text" placeholder="Enter promo code">
<button>Submit</button>
</form>

</div> -->
<!-- <a href="#" class="site-btn">Proceed to checkout</a>
<a href="#" class="site-btn sb-dark">Continue shopping</a> -->
</div>
</div>
</section>
<!-- cart section end -->

<?php
require('footer.php');
?>