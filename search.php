<?php 
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name= sanitizeUserInput($_POST['name']);
	$query =mysqli_query($conn,"SELECT * FROM users WHERE name ='$name'");
	if ($query) {
		# code...
		if (mysqli_num_rows($query)>0) {
			# code...
			 $row=mysqli_fetch_assoc($query);
			 $json=json_encode($row);
			 echo $json;
		}else{
			echo "That User does not exist in database!";
		}
	}else{
		echo mysqli_error($conn);
	}

}







 ?>