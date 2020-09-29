<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}else{
			$status='0';
		}
		$update_status_sql="update gallery set Status='$status' where Id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from gallery where Id='$id'";
		mysqli_query($con,$delete_sql);
	}
	 if($type=='search'){
		$id=get_safe_value($con,$_GET['id']);
		$sql="select gallery.*,product.Name,product.ID from gallery,product where gallery.Product_Id=product.ID And Product_Id='$id'";
		mysqli_query($con,$sql);
		$res=mysqli_query($con,$sql);
	}
		$sql="select gallery.*,product.Name from gallery,product where gallery.Product_Id=product.Id order by gallery.Id desc";
		$res=mysqli_query($con,$sql);
}else{
		$sql="select gallery.*,product.Name from gallery,product where gallery.Product_Id=product.Id order by gallery.Id desc";
		$res=mysqli_query($con,$sql);
	}


?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Gallery</h4>
				   <h4 class="box-link"><a href="manage_gallery.php">Add Product Photos</a> </h4>
				   <div class="dropdown" style="float: right;">
  <button class="btn btn-secondary dropdown-toggle" style="font-size:16px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Product
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  	 <?php
  $resi=mysqli_query($con,"select ID,Name from product order by Name asc");
while($row=mysqli_fetch_assoc($resi)){ 
echo "<a class='dropdown-item'  style='font-size:16px;' href='?type=search&id=".$row['ID']."'>";
echo $row['Name']."</a>";
 } 
echo "<a class='dropdown-item'  style='font-size:16px;' href='gallery.php'>All</a>";
 ?>
  </div>
</div>
				</div>
				
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Product ID</th>
							   <th>Variant</th>
							   <th>Image</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['Id']?></td>
							   <td><?php echo $row['Product_Id']?></td>
							   <td><?php echo $row['Variant']?></td>
							   <td><img src="<?php echo "media/product/".$row['Image']?>"/></td>
							  
							   <td>
								<?php
								if($row['Status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['Id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['Id']."'>Deactive</a></span>&nbsp;";
								}
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['Id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php $i++;} ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>