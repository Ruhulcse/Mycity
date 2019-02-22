<?php
$server="localhost";
$user="root";
$pass="";
$dbname="login";

$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
	die("Connection failed".mysql_connect_error());
}
