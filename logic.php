<?php 
$servername="localhost";
$username="root";
//i am assuming that to login to your php myadmin you don't require a password
$password="";
$database="phpMysqlAjax";


$conn=mysqli_connect($servername,$username,$password,$database);

//testing connection
if (!$conn) {
	echo mysqli_error($conn);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$dateofbirth=$_POST['dateofbirth'];

	if (!empty($name)&&!empty($gender)&&!empty($dateofbirth)) {
		$sql="INSERT INTO `users` (`name`, `gender`, `dateofbirth`) VALUES ( '$name', '$gender', 'dateofbirth')";
		if (mysqli_query($conn,$sql)) {
			echo 'Record Inserted Successfully';
		}else{
			echo 'Error Inserting Record';
		}
	}
}

function sanitizeUserInput($addedInput) {
  $addedInput = trim($addedInput);
  $addedInput = stripslashes($addedInput);
  $addedInput = htmlspecialchars($addedInput);
  return $addedInput;
}
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