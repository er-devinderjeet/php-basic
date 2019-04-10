<?php
require("connect.php");
if(isset($_POST['submit'])){

	$idstudents = $_POST['idstudents'];

	$name = $_POST['name'];

	$option = $_POST['option'];
	$course="";  
	foreach($option as $opt) {  
		$course.= $opt.",";  
	 } 
	$query = "UPDATE `students` SET `name`='$name', `course`='$course' WHERE `idstudents`='$idstudents' ";
	if(mysqli_query($conn, $query)){
		echo "User Updated Succcessfully";
	}
	else{echo "error While update database";}
}
?>
