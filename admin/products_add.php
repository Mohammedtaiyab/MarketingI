<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$slug = slugify($name);
		$category = $_POST['category'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$custmtype=$_POST['custmtype'];
		$mrp = $_POST['mrp'];
		$dealer = $_POST['dealer'];
		$filename = $_FILES['photo']['name'];
		 $status='1';
// 
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM product WHERE Name=:slug");
		$stmt->execute(['slug'=>$slug]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Product already exist';
		}
		else{
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = $slug.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/product/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO product(Categories_id,Name,Description,Short_desc,Price,mrp,Image,Custom_Type,Dealer,Status) VALUES (:category, :name, :description, :slug, :price,:mrp, :photo, :custmtype,:dealer,:status)");
				$stmt->execute(['category'=>$category, 'name'=>$name, 'description'=>$description, 'slug'=>$slug, 'price'=>$price, 'mrp'=>$mrp,'photo'=>$new_filename,'custmtype'=> $custmtype,'dealer'=>$dealer,'status'=>$status]);
				$_SESSION['success'] = 'User added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up product form first';
	}

	header('location: products.php');

?>