<?php
//start session
//session_start();

//create constants to store  non repaeting values
define('SITEURL','http://localhost/food-order3/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-order');

$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD);//database connection
$db_select=mysqli_select_db($conn,DB_NAME);//selecting database

?>