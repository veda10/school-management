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
	echo $id;
$query = "DELETE FROM student WHERE sid=$id";
  	mysqli_query($db, $query);
	if(!$query)
{
    die("DAMMIT 1");
}else{ echo "Successfully deleted"; }

	
}
if (isset($_POST['back'])) {
	header('location: mainpage.php');
}
  mysqli_close($db);

?>