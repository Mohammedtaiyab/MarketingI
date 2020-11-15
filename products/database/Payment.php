<?php
class Payment
{
	
	public $db=null;
	function __construct(DBcontroller $db)
	{
		if(!isset($db->con))return null;
		$this->db=$db;
	}



	public function paymentmade($insData){
		//print_r(array_keys($insData));
		foreach ($insData as $paramName => $paramValue) {
		
 			$datakey[]=$paramName;
 			$datavalue[]=$paramValue;
		}
		$sql = "INSERT INTO payment(".implode(",",array_values($datakey)).") VALUES('".implode("','",array_values($datavalue))."')";
			$result = mysqli_query($this->db->con,$sql) or die(mysqli_error($con));
			return $result;

		}
}
?>