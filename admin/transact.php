<?php
	include 'includes/session.php';

	$id = $_POST['id'];

	$conn = $pdo->open();

	$output = array('list'=>'');

	$stmt = $conn->prepare("SELECT  *,ar.Name As username,s.Status As orderstatus, p.Name AS ProName,ar.Phone As custphone,p.ID AS proid FROM sales s ,product p,details d,user u,payment py,address ar WHERE s.user_id=u.ID AND s.id=d.sales_id AND d.product_id=p.ID And s.pay_id=py.ORDERID AND ar.ID=s.setaddrid AND s.id=:id");
	$stmt->execute(['id'=>$id]);

	$total = 0;
	foreach($stmt as $row){
		$output['transaction'] = $row['pay_id'];
		$output['address']=$row['Address']."<br>".$row['Address2'];
		$output['city']=$row['City'].",".$row['State']."<br>".$row['Country'].",".$row['Pin'];
		$output['name']=$row['username'];
		$output['phone']=$row['custphone'];
		$output['date'] = date('M d, Y', strtotime($row['sales_date']));
		$subtotal = $row['Price']*$row['quantity'];
		$total += $subtotal;
		$output['list'] .= "
			<tr class='prepend_items'>
				<td>".$row['ProName']."-".$row['proid']."</td>
				<td><a href='../images/orderfiles/".$row['Custom_File']."'download>".$row['Custom_File']."</i></a></td>
				<td>₹ ".number_format($row['Price'], 2)."</td>
				<td>".$row['quantity']."</td>
				<td>₹ ".number_format($subtotal, 2)."</td>
			</tr>
		";
	}
	
	$output['total'] = '<b>₹'.number_format($total, 2).'<b>';
	$pdo->close();
	echo json_encode($output);

	// if($row['Custom_Type']==102){
 //                 echo "<td><a href='../images/orderfiles/".$row['Custom_File']."'download><i class='fa fa-download' aria-hidden='true'></i></a></td>";
	// 			}else{
	// 			echo "<td><a hre".$row['Custom_File']."</td>";
	// 			}echo "
?>