<?php
session_start();
$name1="";
 $db = mysqli_connect('localhost', 'root', '', 'school');

if(!$db)
{
    die('Can\'t use ' . 'school' . ': ' . mysql_error());
}


if(isset($_POST['submit'])){
	
	 $id = $_POST["id"];
	  $subject = $_POST["subject"];
	$sql= "SELECT tname from teacher join teaches on teacher.tid = teaches.tid where
	teaches.cid=(SELECT classroom.cid FROM classroom JOIN student ON classroom.standard=student.standard AND classroom.section = student.section WHERE sid = $id) 
	AND subject ='$subject'";
	
	$result=mysqli_query($db, $sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$array[] = $row;
       # echo "id: " . $row["sid"]. " - Name: " . $row["name"]. " " . $row["standard"]. "<br>";
    }
} else {
    echo "0 results";
}
$name1=$array[0]['tname'];
echo $name1;

}
 mysqli_close($db);
?>