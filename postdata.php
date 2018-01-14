<?php 
require 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=sanitizeUserInput($_POST['name']);
	$gender=sanitizeUserInput($_POST['gender']);
	$dateofbirth=sanitizeUserInput($_POST['dateofbirth']);
	echo $name."....".$gender."....".$dateofbirth;
	// $name=$_POST['name'];
	// $gender=$_POST['gender'];
	// $dateofbirth=$_POST['dateofbirth'];

	// if (!empty($name)&&!empty($gender)&&!empty($dateofbirth)) {
	// 	$sql="INSERT INTO `users` (`name`, `gender`, `dateofbirth`) VALUES ( '$name', '$gender', 'dateofbirth')";
	// 	if (mysqli_query($conn,$sql)) {
	// 		echo 'Record Inserted Successfully';
	// 	}else{
	// 		echo 'Error Inserting Record';
	// 	}
	// }
}














 ?>