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
<?php 
if(isset($_POST["order"])){
$orderId=$_POST["order"];
}
$usercart=$order->fatchordersingle($orderId);?>
<section class="cart-section spad">
<div class="container">
  <div class="card">

<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3">To:</h6>
<div>
<strong><?php echo $usercart[0]['username'];?></strong>
</div>
<div><?php echo $usercart[0]['Address']."<br>".$usercart[0]['Address2'];?></div>
<div><?php echo $usercart[0]['City']." ".$usercart[0]['State'];?></div>
<div><?php echo $usercart[0]['Country']." ".$usercart[0]['Pin'];?></div>
<div>Phone:<?php echo $usercart[0]['Phone'];?></div>
</div>

<div class="col-sm-6">
	<div style="float: right; text-align: end">
<h6 class="mb-3" >Details</h6>
<div>
Invoice
<strong><?php echo $usercart[0]['pay_id'];?></strong> 
</div>
<div>
  <span> Status:<strong><?php echo $usercart[0]['orderstatus'];?></strong></span>
</div>
<div>TXNID: <?php echo  substr($usercart[0]['TXNID'],-7); ?></div>
<div>PYTM: <?php echo $usercart[0]['BANKNAME']; ?></div>
<div>Order Date: <strong><?php echo date('M d, Y', strtotime($usercart[0]['sales_date'])); ?></strong></div>
<div >EST Delivery Date: <strong><?php echo date('M d, Y', strtotime($usercart[0]['sales_date'].'+ 10 days')); ?></strong></div>

</div>
</div>



</div>

<div class="table-responsive-sm">
<table class="table table-striped">
<thead>
<tr>
<th class="center">#</th>
<th>Item</th>
<th>Description</th>
<th class="right">Unit Cost</th>
  <th class="center">Qty</th>
<th class="right">Total</th>
</tr>
</thead>
<tbody>
<?php
$i=1;
$total=0;
foreach($usercart as $cart){ ?>

<tr>
<td class="center"><?php echo $i; ?></td>
<td class="left strong"><?php echo $cart['ProName'];?></td>
<td class="left"><?php echo $cart['Custom_File'];?></td>

<td class="right"><?php echo "₹".$cart['Price'];?></td>
  <td class="center"><?php echo $cart['quantity'];?></td>
<td class="right"><?php echo "₹".$cart['Price']*$cart['quantity']; ?></td>
</tr>

<?php $i++;  $total=$total + ($cart['Price']*$cart['quantity']); } ?>
</tbody>
</table>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto" style="float: right;">
<table class="table table-clear">
<tbody>
<tr>
<td class="left">
<strong>Subtotal</strong>
</td>
<td class="right"><?php echo "₹".$total;?></td>
</tr>
<tr>
<td class="left">
<strong>Discount</strong>
</td>
<td class="right">₹00.0</td>
</tr>
<tr>
<td class="left">
<strong>Total</strong>
</td>
<td class="right">
<strong><?php echo "₹".$total;?></strong>

</td>
</tr>

</tbody>

</table>
</div>

</div>

<a href="order.php" class="btn sb-dark">Back to Orders</a>
</div>
</div>
</div>
</section>

<!-- cart section end -->

<?php
require('footer.php');
?>

