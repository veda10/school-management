<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
</html>
<?php
session_start();
$name1="";
 $db = mysqli_connect('localhost', 'root', '', 'school');

if(!$db)
{
    die('Can\'t use ' . 'school' . ': ' . mysql_error());
}


if(isset($_POST['submit'])){
	
	 $cls = $_POST["cls"];
	  #$subject = $_POST["subject"];
	$sql= "SELECT sid,name,roll_no,cid,classroom.standard,classroom.section FROM student,classroom WHERE
	student.standard=classroom.standard and student.section = classroom.section AND cid = $cls";
	
	$result=mysqli_query($db, $sql);
	if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>standard</th><th>section</th><th>rollno</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sid"]. "</td><td>" . $row["name"]. "</td><td>" . $row["standard"]."</td><td>" .$row["section"] ."</td><td>" . $row["roll_no"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
#$name1=$array[0]['tname'];
echo $name1;

}
 mysqli_close($db);
?>