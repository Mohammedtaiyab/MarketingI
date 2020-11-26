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
<h3>Your Order's</h3>
<div class="cart-table-warp">
<table class="responsive">
<thead>
<tr>
<th class="product-th">Order ID</th>
<th class="date">Date of Order</th>
<th class="quy-th">Custume</th>
<th class="size-th">No: of Products</th>
<th class="total-th">Total Price</th>
<th class="total-th">Delivery Date</th>
<th class="delete-th">Status</th>
</tr>
</thead>
<tbody>
<?php
$total=0;
if(isset($_SESSION["login"])){
$usercart=$order->fatchorder($_SESSION['userId']);
foreach($usercart as $cart){ ?>
   <tr class="item-row">
<td class="product-col">
	<form method="POST" action="orderdetails.php">
	<input type="hidden" name="order" value='<?php echo $cart['pay_id'];?>'>
<a href=""><input type="submit" name="" value='<?php echo "#".$cart['pay_id'];?>'></a>
</form>
</td>
<td>
<?php echo date('M d, Y', strtotime($cart['sales_date'])); ?>
</td>
<td class="quy-col">
<span><?php echo $cart['Name'];?></span>
</td>
<td>
	<?php
	$count=$order->countdetail($cart['id']);
	echo $count[0]['count(id)'];
	?>
</td>

<td>
	<span><?php echo "₹".$cart['TXNAMOUNT']."/-";?></span>
</td>
<td>
<?php echo date('M d, Y', strtotime($cart['sales_date'].'+ 10 days')); ?>
</td>
<td>
	<span><?php echo $cart['Status'];?></span>
</td>
<?php  } 
}?>
</tbody>
</table>
</div>
<div class="total-cost">
</div>
</div>
</div>

</div>
</div>
</section>

<!-- cart section end -->
<?php
require('footer.php');
?>