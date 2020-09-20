<?php
ob_start();
require('top.inc.php');
$company='';
$reviewby='';
$review='';
$image='';
$image_required='required';
$msg='';
if(isset($_POST['submit'])){
$company=$_POST['company'];
$reviewby=$_POST['reviewby'];
$review=$_POST['review'];
$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],"media/client/".$image);
			mysqli_query($con,"insert into client(Company,ReviewBy,Review,Logo,status) values('$company','$reviewby','$review','$image',1)");
			header('location:client.php');
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
									<label for="categories" class=" form-control-label">Company Name</label>
									<input type="text" name="company" placeholder="Enter Company Name" class="form-control" required value="<?php echo $company?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Writer</label>
						<input type="text" name="reviewby" placeholder="Enter Name or Designation of Review Writer" class="form-control" required value="<?php echo $reviewby?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Review</label>
										<textarea name="review" placeholder="Enter product description" class="form-control" required><?php echo $review?></textarea>
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