<?php
class Order
{
	
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}
public function getuserid($usermail){
	$sql="SELECT * FROM user WHERE Email='$usermail'";
 			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
	}
	return $resultArray[0]['ID'];
}
	public function placeorder($userId,$productdetail,$orderid){
		
			$addon=date('Y ,D M');
			$sql="INSERT INTO user(user_id,pay_id,sales_date) VALUES ('$userID','$orderid','$addon')";
				$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			$saleid=$this->getsaleid($orderid);
			foreach ($productdetail as $item) {
				$sql="INSERT INTO details(sales_id,product_id,quantity) VALUES ('$saleid',".$item['item_id'].",".$item['item_quantity'].")";
				$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
			}

	}

public function getsaleid($orderid){
	$sql="SELECT * FROM sales WHERE pay_id='$orderid'";
 			//checking if the username or email is available in db
			$check =  $this->db->con->query($sql) ;
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
	}
	return $resultArray[0]['id'];
}
}
?>