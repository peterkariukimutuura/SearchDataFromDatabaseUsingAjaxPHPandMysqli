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
function sanitizeUserInput($addedInput) {
  $addedInput = trim($addedInput);
  $addedInput = stripslashes($addedInput);
  $addedInput = htmlspecialchars($addedInput);
  return $addedInput;
}















 ?>