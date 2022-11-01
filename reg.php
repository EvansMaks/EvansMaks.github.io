<?php

session_start();


$con = mysqli_connect('localhost');

mysqli_select_db($con,  'useregistration');

$name = $_POST['user'];
$ID = $_POST['ID'];
$college = $_POST['college'];
$program = $_POST['Program'];
$pass = $_POST['Password'];

$s = "select * from users where name = $name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "username already taken";
}else{
	$reg="insert into users(Student_Name , Student_ID, College_Name, Program_Name, Password) values ('$name', '$ID', '$college', '$program' , '$pass')";
	mysqi_query($con $reg);
	echo "Registration successful"
}

?>