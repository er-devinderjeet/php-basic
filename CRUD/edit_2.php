<?php
require("connect.php");
if(isset($_GET['editno'])){
	//data
	$editno = $_GET['editno'];
}
	//query
	$query = "SELECT * FROM `students` WHERE `sno`=".$editno;

	//decision
	if($result = mysqli_query($conn, $query)){

?>	
	<form action="update_2.php" method="post">	
	<table>
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>Course</th>
		</tr>
	<?php
		while($row = mysqli_fetch_assoc($result)){
	?>
	<tr>
		<td><input type="hidden" name="sno" value="<?php echo $row['sno'];?>"></td>
	</tr>

	<tr>
		<td>Name:<input type="text" name="name" value="<?php echo $row['name'];?>"></td>
	</tr>

	<tr>
		<td>Gender:<input type="text" disabled value="<?php echo $row['gender'];?>">
			Male:<input type="radio" name="gender" value="male">
			Female:<input type="radio" name="gender" value="femal">
		</td>
	</tr>

	<tr>
	<td>Course:<textarea disabled><?php echo $row['course'];?> </textarea>
		<input type="checkbox" name="option[]" value="c++"> C++
		<input type="checkbox" name="option[]" value="php"> PHP 
	</tr>
	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>
	<?php		
		}
	?>
	</table>
	</form>
	
<?php
	}
?>
