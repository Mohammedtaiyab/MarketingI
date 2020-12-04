<?php
	include '../includes/session.php';

	if(isset($_POST['id'])){
		echo "<script>alert('inhere');</script>";
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM address WHERE Id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();
		
		$pdo->close();

		echo json_encode($row);
	}
?>