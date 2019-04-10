<?php
require("connect.php");
$editno = $_GET['editno'];
$query = "SELECT * FROM `students` WHERE `idstudents`=".$editno."";
?>


<form action="update.php" method="post">
	<?php
if($result = mysqli_query($conn,$query)){
	while($row = mysqli_fetch_array($result)){
		?>
	<input type="hidden" name="idstudents" value="<?php echo $row['idstudents']; ?> ">
	Name:<input type="text" name="name" value ="<?php echo $row['name']; ?>" />
	Course:<input type="diasble" value ="<?php echo $row['course']; ?>" /> 
 	Select Course
 	<input type="checkbox" name ="option[]" value="php">PHP
 	<input type="checkbox" name="option[]" value="c++">C++
 	<input type="submit" name="submit">
 	<?php	
	}

}else{echo "error fetching data";} 
?>

