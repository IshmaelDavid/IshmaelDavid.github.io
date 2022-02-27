<?php  

//declaring global valiables
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "root_application";
$errors = array();

//connecting to database using mysql
$conn = mysqli_connect($sname, $uname, $password, $db_name);

//if connection fails display this
if (!$conn) {
	echo "Connection Failed!";
	exit();
}