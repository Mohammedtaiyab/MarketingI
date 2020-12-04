<?php
require ('header.php');
?>

<div class="page-top-info">
<div class="container">
<h4>Your Address</h4>
<div class="site-pagination">
<a href="#">Home</a> /
<a href="#">Edit address</a>
</div>
</div>
</div>
<section class="checkout-section spad">
<div class="container">
<div class="row">
<div class="col-lg-12 order-2 order-lg-1">

<div class="cf-title"><h4>*Address Information<h4></div>
<div class="row">
<div class="col-md-7">
</div>
<?php 
$id=$_GET['id'];
$useraddress=$user->getaddressbyid($id);
foreach ($useraddress as $address) {?>
<form class="checkout-form" id="" action="address.php" method="POST">
<div class="row address-inputs">
	<div class="col-md-6">
<input type="text" name="name" value='<?php echo $address['Name']; ?>' placeholder="Full Name" required>
</div>
	<div class="col-md-6">
<input type="text" name="phone" value='<?php echo $address['Phone']; ?>' placeholder="Phone no." required>
</div>
<div class="col-md-12">
<input type="hidden" name="userid" value='<?php echo $_SESSION['userId']?>'>
<input type="text" name="addressl1" value='<?php echo $address['Address']; ?>' placeholder="Address"  required>
<input type="text"  name="addressl2" value='<?php echo $address['Address2']; ?>' placeholder="Address line 2"required>
</div>
<div class="col-md-6">
<input type="text" name="country" value='<?php echo  $address['Country'];?>' placeholder="Country"required>
</div>
<div class="col-md-6">
<input type="text" name="state" value='<?php echo $address['State']; ?>' placeholder="State"required>
</div>
<div class="col-md-6">
<input type="text" name="city" value='<?php echo $address['City']; ?>'  placeholder="City"required>
</div>
<div class="col-md-6">
<input id="zip" name="pin"  value='<?php echo $address['Pin']; ?>' placeholder="Pin Code" type="text" inputmode="numeric" pattern="[0-9]*" required>
</div>
<button class="site-btn submit-order-btn sb-dark" name="updateadd" type="submit">Save</button>
</form>
<?php }
?>
</div>
</div>
</div>

</div>
</div>
</section>
<?php
require ('footer.php');
?>