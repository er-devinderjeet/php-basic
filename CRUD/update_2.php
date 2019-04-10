<?php
require("connect.php");
	if(isset($_POST['submit'])){
		//data
		$sno =$_POST['sno'];
		$username =$_POST['name'];
		$gender =$_POST['gender'];
		$option =$_POST['option'];

		$course = "";
		foreach($option as $opt){
			$course.=$opt.",";
		}	
		//query
		$query = "UPDATE `students` SET `name`='$username',`gender`='$gender',`course`='$course' WHERE `sno`='$sno' ";
		//decision
		if(mysqli_query($conn,$query))
		{
			//action
			echo "Record Updated Successfully";
			header('refresh:5; url=select_2.php');
			exit;
		}

	}	

?>