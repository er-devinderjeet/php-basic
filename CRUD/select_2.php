<?php
require("connect.php");
$query = "SELECT * FROM `students`";


if($result = mysqli_query($conn,$query)){
?>
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
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['course']; ?></td>
			<td><a href="edit_2.php?editno=<?php echo $row['sno'];?>"> edit</a></td>
			<td><a href="delete_2.php?deleteno=<?php echo $row['sno'];?> ">Delete</a></td>

		</tr>
<?php
	}
}	
?>
	
</table>
