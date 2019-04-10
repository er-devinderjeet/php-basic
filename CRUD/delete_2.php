<?php
require("connect.php");
if(isset($_GET['deleteno']))
{
	$deletno = $_GET['deleteno'];
	$query = "DELETE FROM `students` WHERE `sno`=".$deletno;
	if(mysqli_query($conn, $query)){
		echo "Record Deleted Successfully";
		header("refresh:5,url=select_2.php");
	}

}
?>
