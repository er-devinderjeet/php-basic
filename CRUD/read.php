<?php  
error_reporting();
require("connect.php"); 
  

$sql = "SELECT * FROM `students`"; 
if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Student Name</th>"; 
        echo "<th>Course/ Courses</th>"; 
        echo "<th>action</th>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['course']."</td>"; 
            echo "<td><a href='edit.php?editno=".$row['idstudents']."'>edit</a><td>";
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn); 
} 
mysqli_close($conn); 
?> 