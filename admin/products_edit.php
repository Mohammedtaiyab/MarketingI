<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$slug = slugify($name);
		$category = $_POST['category'];
		$price = $_POST['price'];
		$mrp = $_POST['mrp'];
		$description = $_POST['description'];
	$custmtype=$_POST['custmtype'];
		$dealer = $_POST['dealer'];
		$conn = $pdo->open();

		try{

			if($category!=0 || $category!=''){
			$stmt = $conn->prepare("UPDATE product SET Name=:name, Short_desc=:slug, Categories_id=:category,mrp=:mrp,Price=:price, Description=:description,Dealer=:dealer,Custom_Type=:custmtype WHERE ID=:id");
			$stmt->execute(['name'=>$name, 'slug'=>$slug, 'category'=>$category,'mrp'=>$mrp, 'price'=>$price,'dealer'=>$dealer, 'description'=>$description,'custmtype'=>$custmtype, 'id'=>$id]);

}else{
			$stmt = $conn->prepare("UPDATE product SET Name=:name, Short_desc=:slug,mrp=:mrp,Price=:price, Description=:description,Dealer=:dealer,Custom_Type=:custmtype WHERE ID=:id");
			$stmt->execute(['name'=>$name, 'slug'=>$slug,'mrp'=>$mrp, 'price'=>$price,'dealer'=>$dealer, 'description'=>$description,'custmtype'=>$custmtype, 'id'=>$id]);
}

			$_SESSION['success'] = 'Product updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit product form first';
	}

header('location: products.php');

?>