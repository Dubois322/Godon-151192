<?php
$servername="localhost";
$username="Godon Admin";
$password="G8M6vk1p!Sx4GJKi";
$dbname="rentii";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Conection failed because".mysqli_connect_error());
}
?>