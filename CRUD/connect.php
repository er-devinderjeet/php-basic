<?php
$host = "localhost";
$user = "root";
$password= "12345";
$dbname = "tutorial";


$conn = mysqli_connect($host,$user,$password,$dbname);


if(!$conn){ echo "Error"; }



?>