<?php 
require 'connect.php';
//this get method fetchs the value the User is typing
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$name=sanitizeUserInput($_GET['name']);
	$sql="SELECT * FROM users WHERE name  LIKE '%$name%'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
			$row=mysqli_fetch_assoc($result);
			if(!empty($row['name'])){
				echo $row['name'];
			}else{
				echo "1";
			}
	}else{
		echo "2";
	}
}


 ?>