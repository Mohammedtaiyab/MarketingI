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
		$update_status_sql="update client set Status='$status' where Id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from client where Id='$id'";
		mysqli_query($con,$delete_sql);
	}
	}
	

		$sql="select * from client";
		$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Clients</h4>
				   <h4 class="box-link"><a href="manage_client.php">Add Client</a> </h4>
		
				</div>
				
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Company</th>
							   <th>ReviewBy</th>
							    <th>Review</th>
							   <th>Logo</th>
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
							   <td><?php echo $row['Company']?></td>
							   	   <td><?php echo $row['ReviewBy']?></td>
							   <td><?php echo $row['Review']?></td>
							   <td><img src="<?php echo "media/client/".$row['Logo']?>"/></td>
							  
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