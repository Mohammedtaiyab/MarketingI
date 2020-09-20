<?php
ob_start();
require('top.inc.php');
$product_id='';
$variant='';
$image='';
$image_required='required';
$msg='';
if(isset($_POST['submit'])){
$product_id=$_POST['product_id'];
$variant=$_POST['variant'];
$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],"media/product/".$image);
			mysqli_query($con,"insert into gallery(Product_Id,Variant,image,status) values('$product_id','$variant','$image',1)");
			header('location:gallery.php');
		die();

}
ob_end_flush();
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Product</label>
									<select class="form-control" name="product_id">
										<option>Select Product</option>
										<?php
										$res=mysqli_query($con,"select ID,Name from product order by Name asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['ID']==$product_id){
												echo "<option selected value=".$row['ID'].">".$row['Name']."</option>";
											}else{
												echo "<option value=".$row['ID'].">".$row['Name']."</option>";
											}
											
										}
										?>
									</select>
								</div>
									<div class="form-group">
									<label for="categories" class=" form-control-label">Product Variant</label>
									<input type="text" name="variant" placeholder="Enter product variant" class="form-control" required value="<?php echo $variant?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
								</div>
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>