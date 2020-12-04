<?php
require('header.php');
?>

<!-- Page info -->
<div class="page-top-info">
<div class="container">
<h4>Address Details</h4>
<div class="site-pagination">
<a href="index.php">Home</a> /
<a href="#">Address's</a>

<section class="cart-section spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="cart-table">
	<div class="d-inline-flex">
		<h3>Your Address's </h3>
<h4 style="padding-left: 15px; padding-top: 3px;">
	<a href='#address' class='address' data-toggle='modal' data-id=''><span><i class="fa fa-plus" aria-hidden="true"></i>Add</span></a>
</h4>	</div>

<div class="cart-table-warp">
<table>
<thead>
<tr>
<th  style="text-align: left;">Name</th>
<th  style="text-align: left;">Phone No: </th>
<th  style="text-align: left;">Address</th>
<th  style="text-align: left;">Tool</th>

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
	<a href='#deleteAdd' class='deleteAdd' data-toggle='modal' data-id='<?php echo $address['Id'];?>'><span><i class="fa fa-trash" aria-hidden="true"></i></a>
	<a href='addressedit.php?id=<?php echo $address['Id'];?>'><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
	
	
<?php
	if($address['Status']==0){?>
		<a href='address.php?aid=<?php echo $address['Id'];?>'><i class="fa fa-map-marker" aria-hidden="true"></i>Set Default</a>
		<?php
		
	}else{
		?>
		<i class="fa fa-map-marker" aria-hidden="true"></i>Default
		<?php
	}
?>


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
</div>
</section>
<!-- cart section end -->
<!-- <form action="address.php" method="POST">
	<input type="text"  name="addressid" value="7" onclick="submit()">
	
</form> -->
</div>
</div>
</div>
</section>
<?php
require('footer.php');
?>