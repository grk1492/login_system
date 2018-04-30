<?php 

$username = "";
$email = "";
$errors = array();
  
//connection to the db
$db = mysqli_connect('localhost','root','registration');

//if the register is clicked
if(isset($_POST['register'])) {

	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$pwd_1 = mysql_real_escape_string($_POST['pwd_2']);
	$pwd_2 = mysql_real_escape_string($_POST['pwd_2']);

	// check if form is fill properly
	if(empty($username)) {
		array_push($errors,'Username is required');
	}
}
 

 ?>