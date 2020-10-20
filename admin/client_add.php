<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['add'])){
		$company = $_POST['company'];
		$review = $_POST['review'];
		$reviewby = $_POST['reviewby'];
		$filename = $_FILES['photo']['name'];
		$status='1';
// 
		$conn = $pdo->open();
			if(!empty($filename)){
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$new_filename = rand(111111111,999999999).'_'.$company.'.'.$ext;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/client/'.$new_filename);	
			}
			else{
				$new_filename = '';
			}

			try{
				$stmt = $conn->prepare("INSERT INTO client(Company,ReviewBy,Review,Logo,Status) VALUES (:company, :reviewby, :review,:photo,:status)");
		$stmt->execute(['company'=>$company, 'review'=>$review, 'reviewby'=>$reviewby,'photo'=>$new_filename,'status'=>$status]);
				$_SESSION['success'] = 'Client added successfully';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Client form first';
	}

	header('location: client.php');

?>