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
	public function placeorder($userId,$productdetail,$orderid,$addon){
		$Status="Not Confirmed";
			$sql="INSERT INTO sales(user_id,pay_id,sales_date,Status) VALUES ('$userId','$orderid','$addon','$Status')";
			$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted 1");
			$saleid=$this->getsaleid($orderid);
			foreach ($productdetail as $item) {

			$sql="INSERT INTO details(sales_id,product_id,quantity,Custom_File) VALUES ($saleid,".$item['product_id'].",".$item['quantity'].",'".$item['Custom_File']."')";
			$result = mysqli_query($this->db->con,$sql) or die(mysqli_connect_errno()."Data cannot inserted 2");
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
public function fatchorder($userId){
$check=$this->db->con->query("SELECT *, sales.id AS salesid FROM sales,user,payment WHERE user.ID=sales.user_id And sales.pay_id=payment.ORDERID ORDER BY sales_date DESC");
	
//$check=$this->db->con->query("SELECT * FROM sales s ,product p,details d,payment py WHERE s.user_id=($userId) AND s.id=d.sales_id AND d.product_id=p.ID And s.pay_id=py.ORDERID");
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
public function fatchordersingle($orderId){	
$check=$this->db->con->query("SELECT  *,ar.Name As username,s.Status As orderstatus, p.Name AS ProName FROM sales s ,product p,details d,user u,payment py,address ar WHERE s.user_id=u.ID AND s.id=d.sales_id AND d.product_id=p.ID And s.pay_id=py.ORDERID AND ar.UserId=u.ID AND py.ORDERID='".$orderId."'");

		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function countdetail($ID){
		$check=$this->db->con->query("SELECT count(id) FROM details WHERE sales_id=".$ID);
		$resultArray=array();
		while ($item=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function deleteall($ID){
$check=$this->db->con->query("DELETE p,s,d FROM payment AS p,sales AS s,details AS d WHERE p.ORDERID=s.pay_id AND s.id=d.sales_id AND p.ORDERID='".$ID."'");
		return true;
	}

}
?>