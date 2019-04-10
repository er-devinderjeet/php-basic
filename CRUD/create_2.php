<?php
require('connect.php');
if(isset($_POST['submit'])){
	//Data
	$name= $_POST['name'];
	$options= $_POST['option'];
	$gender= $_POST['gender'];

	$course = "";
	foreach($options as $option){
		$course.= $option.",";
	}
	//Decision and Action
	$query = "INSERT INTO `students`(`name`,`course`,`gender`) VALUES('$name','$course','$gender')";
	if(mysqli_query($conn,$query)){
		echo "Record Created Successfully";
	}
}
?>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
	Name: <input type="text" name="name" >
	<input type="checkbox" name="option[]" value="php" /> PHP
	<input type="checkbox" name="option[]" value="c++" /> C++
	<input type="radio" name="gender" value="male" /> Male
	<input type="radio" name="gender" value="female" /> Female
	<input type="submit" name="submit">
</form>
</body>