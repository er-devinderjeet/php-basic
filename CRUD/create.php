<?php
require ("connect.php");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$option = $_POST['option'];
	$course="";  
	foreach($option as $opt) {  
		$course.= $opt.",";  
	  	} 
	  	//echo $course; 
	$query = "INSERT INTO `students`(`name`,`course`) VALUES('$name', '$course')";

	if(mysqli_query($conn,$query)){
		echo "Recorded successfully";
	}
	else{ echo "Error". mysqli_error($conn);}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Name :
		<input type="text" name="name">
		</br>
		Select Course/Courses: </br>
		<input type="checkbox" name ="option[]" value="php">PHP</br>
		<input type="checkbox" name="option[]" value="c++">C++</br>
		<input type="submit" name="submit">
	</form>
</body>
</html>