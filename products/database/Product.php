<?php
class Product
{
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}

	public function getData($table = 'product'){
		$result =$this->db->con->query("SELECT * FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function singleProduct($id){
		$result =$this->db->con->query("SELECT * FROM product WHERE ID=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
		public function Productcategory(){
		$result =$this->db->con->query("SELECT * FROM product WHERE Categories_id IN (SELECT DISTINCT Categories_id FROM product) GROUP BY Categories_id");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function Productbycategory($id){
		$result =$this->db->con->query("SELECT * FROM product WHERE Categories_id=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function productgallery($id){
		$result =$this->db->con->query("SELECT * FROM gallery WHERE Product_Id=($id)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function productbyname($name){
		$result =$this->db->con->query("SELECT * FROM product WHERE Name LIKE '%$name%'");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return $resultArray;
	}
	public function productapi($table = 'product'){
		$result =$this->db->con->query("SELECT ID,Name,Price FROM ($table)");
		$resultArray=array();
		while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$resultArray[]=$item;
			# code...
		}
		return json_encode($resultArray);
	}
}

//SELECT * FROM `product` WHERE Name LIKE '%mobil%'
?>