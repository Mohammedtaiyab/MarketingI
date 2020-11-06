<?php
	include '../includes/session.php';
	include '../includes/slugify.php'
	if(isset($_POST['register'])){
		$variant = $_POST['name'];
		$product_id = $_POST['phone'];
		$price = $_POST['email'];
		$variant_type=$_POST['password'];
		$filename = $_FILES['photo']['name'];
		$status='1';
// 
		$conn = $pdo->open();
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(111111111,999999999).'_'.$product_id.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/product/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO gallery(Product_Id,Variant_type,Variant,Price,Image,Status) VALUES (:product, :vrttype, :variant, :price,:photo,:status)");
		$stmt->execute(['product'=>$product_id, 'vrttype'=>$variant_type, 'variant'=>$variant, 'price'=>$price,'photo'=>$new_filename,'status'=>$status]);
				$_SESSION['success'] = 'Product gallery added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up product form first';
	}

	header('location: gallery.php');

?>