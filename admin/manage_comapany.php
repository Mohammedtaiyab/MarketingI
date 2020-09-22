<?php
ob_start();
require('top.inc.php');
$company_name='';
$hrname='';
$hremail='';
$vacancy='';
$jobdec='';
$requirements='';
$location	='';
$date=date("Y-m-d");

$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from company where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$company_name=$row['Company_name'];
		$hrname=$row['HR_Name'];
		$hremail=$row['HR_Email'];
		$vacancy=$row['Vacancy'];
		$jobdec=$row['Job_Description'];
		$requirements=$row['Requirements'];
		$location=$row['Location'];
		$date=$row['Added_on'];
	}else{
		header('location:company.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$company_name=get_safe_value($con,$_POST['Company_name']);
	$hrname=get_safe_value($con,$_POST['HR_Name']);
	$hremail=get_safe_value($con,$_POST['HR_Email']);
	$vacancy=get_safe_value($con,$_POST['Vacancy']);
	$jobdec=get_safe_value($con,$_POST['Job_Description']);
	$requirements=get_safe_value($con,$_POST['Requirements']);
	$location=get_safe_value($con,$_POST['Location']);
	$date=get_safe_value($con,$_POST['Added_on']);
	
	// $res=mysqli_query($con,"select * from Company where name='$name'");
	// $check=mysqli_num_rows($res);
	// if($check>0){
	// 	if(isset($_GET['id']) && $_GET['id']!=''){
	// 		$getData=mysqli_fetch_assoc($res);
	// 		if($id==$getData['id']){
			
	// 		}else{
	// 			$msg="Product already exist";
	// 		}
	// 	}else{
	// 		$msg="Product already exist";
	// 	}
	// }
	
	
	// if($_GET['id']==0){
	// 	if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
	// 		$msg="Please select only png,jpg and jpeg image formate";
	// 	}
	// }else{
	// 	if($_FILES['image']['type']!=''){
	// 			if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
	// 			$msg="Please select only png,jpg and jpeg image formate";
	// 		}
	// 	}
	// }
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$date=date("Y-m-d");
				$update_sql="update company set Company_name='$company_name',HR_Name='$hrname',HR_Email='$hremail',Vacancy='$vacancy',Job_Description='$jobdec',Requirements='$requirements',Location='$location',Added_on='$date' where ID='$id'";
			
			mysqli_query($con,$update_sql);
			
			}else{
				$date=date("Y-m-d");
			mysqli_query($con,"insert into company(Company_name,HR_Name,HR_Email,Vacancy,Job_Description,Requirements,Location,Added_on) values('$company_name','$hrname','$hremail','$vacancy','$jobdec','$requirements','$location','$date')");
		}
		header('location:company.php');
		die();
		}
	}

ob_end_flush();
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Comapny</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
								<div class="form-group">
									<label for="categories" class=" form-control-label">Company Name</label>
									<input type="text" name="Company_name" placeholder="Enter Company Name" class="form-control" required value="<?php echo $company_name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">HR Name</label>
									<input type="text" name="HR_Name" placeholder="Enter HR Name" class="form-control" required value="<?php echo $hrname?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">HR Email</label>
									<input type="email" name="HR_Email" placeholder="Enter product price" class="form-control" required value="<?php echo $hremail?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Vacancy</label>
									<input type="text" name="Vacancy" placeholder="Enter Vacancy" class="form-control" required value="<?php echo $vacancy?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Job Description</label>
									<textarea name="Job_Description" placeholder="Enter product description" class="form-control" required><?php echo $jobdec?></textarea>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Requirements</label>
									<textarea name="Requirements" placeholder="Enter Requirements" class="form-control"><?php echo $requirements?></textarea>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Location</label>
									<textarea name="Location" placeholder="Enter Location" class="form-control"><?php echo $location?></textarea>
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