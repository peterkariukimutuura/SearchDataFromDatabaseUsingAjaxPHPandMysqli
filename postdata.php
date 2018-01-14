<?php 
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=sanitizeUserInput($_POST['name']);
	$gender=sanitizeUserInput($_POST['gender']);
	$dateofbirth=sanitizeUserInput($_POST['dateofbirth']);
	if (!empty($name)&&!empty($gender)&&!empty($dateofbirth)) {

		$sql="INSERT INTO `users` (`name`, `gender`, `dateofbirth`) VALUES ( '$name', '$gender', '$dateofbirth')";
		if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users WHERE name='$name'"))>0) {
			return;		}
		if (mysqli_query($conn,$sql)) {
			echo 'Record Inserted Successfully';
		}else{
			echo 'Error Inserting Record';
		}
	}
}














 ?>