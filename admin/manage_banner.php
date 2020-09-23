<?php
ob_start();
require('top.inc.php');
$topic='';
$header='';
$image='';
$para='';
$goto='';
$image_required='required';
$msg='';
if(isset($_POST['submit'])){
$topic=$_POST['topic'];
$header=$_POST['header'];
$para=$_POST['para'];
$goto=$_POST['goto'];
$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],"media/banner/".$image);
			mysqli_query($con,"insert into banner(Topic,Header,Paragraph,Image,Goto,status) values('$topic','$header','$para','$image','$goto',1)");
			header('location:banner.php');
		die();

}
ob_end_flush();
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Banner</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
									<div class="form-group">
									<label for="categories" class=" form-control-label">Topic</label>
									<input type="text" name="topic" placeholder="Enter Topic" class="form-control" required value="<?php echo $topic?>">
								</div>
																	<div class="form-group">
									<label for="categories" class=" form-control-label">Header</label>
									<input type="text" name="header" placeholder="Enter Header" class="form-control" required value="<?php echo $topic?>">
								</div>
									<div class="form-group">
									<label for="categories" class=" form-control-label">Paragraph</label>
									<textarea name="para" placeholder="Enter Detail Paragraph" class="form-control" required><?php echo $para?></textarea>
								</div>
																	<div class="form-group">
									<label for="categories" class=" form-control-label">Goto Product</label>
								<select class="form-control" name="goto">
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
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?>>
									<span style="font-size: 15px;">Add 1349X615 size banner</span> 
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