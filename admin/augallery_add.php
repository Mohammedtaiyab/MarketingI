<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$topic = $_POST['caption'];
		$filename = $_FILES['photo']['name'];
		$status='1';
// 
		$conn = $pdo->open();
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(111111111,999999999).'_'.$topic.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO aboutgallery(Caption,Image,Status) VALUES (:topic,:photo,:status)");
		$stmt->execute(['topic'=>$topic,'photo'=>$new_filename,'status'=>$status]);
				$_SESSION['success'] = 'Gallery added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Gallery form first';
	}

	header('location: augallery.php');

?>