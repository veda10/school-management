<?php

#echo "qwertyui";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'school');
if(!$db)
{
    die('Can\'t use ' . 'school' . ': ' . mysql_error());
}
if (isset($_POST['submit'])) {
	  if (empty($_POST['id'])) { echo "Username is required"; }
	$id = $_POST['id'];
	$subject = $_POST['subject'];
	$grade = $_POST['grade'];
	echo $subject;
	echo $grade;
$query = "UPDATE grade SET $subject=$grade WHERE sid=$id";
  	mysqli_query($db, $query);
	if(!$query)
{
    die("DAMMIT 1");
}else{ echo "Successfully updated"; }

	
}
if (isset($_POST['back'])) {
	header('location: mainpage.php');
}
  mysqli_close($db);

?>