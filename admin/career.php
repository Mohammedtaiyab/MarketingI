
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
		$update_status_sql="update careers set status='$status' where id='$id'";
		mysqli_query($con,$update_status_sql);
	}
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from careers where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from careers";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Career </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Contact</th>
							   <th>Profile</th>
							   <th>BirthDate</th>
							   <th>Resume</th>
							   	<th>Bio</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['ID']?></td>
							     <td><?php echo $row['Name']?></td>
							   <td><?php echo $row['Email']?></td>
							     <td><?php echo $row['Contact']?></td>
							   <td><?php echo $row['Profile']?></td>
							     <td><?php echo $row['BirthDate']?></td>
							   <td><a href="../download/<?php echo $row['Resume']?>" download><i class="fa fa-download" aria-hidden="true"></i></a></td>
							     <td><?php echo $row['Bio']?></td>
							   <td>
								<?php
								// if($row['Status']==1){
								// 	echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['ID']."'>Active</a></span>&nbsp;";
								// }else{
								// 	echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['ID']."'>Deactive</a></span>&nbsp;";
								// }
								// echo "<span class='badge badge-edit'><a href='manage_categories.php?id=".$row['ID']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['ID']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
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