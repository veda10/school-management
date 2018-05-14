 <?php
 $db = mysqli_connect('localhost', 'root', '', 'school');
if(!$db)
{
    die('Can\'t use ' . 'school' . ': ' . mysql_error());
}

if(isset($_POST['sub'])){
	#echo('error');
	#header('Location:index.php');
	$id=$_POST['id'];
	#echo $id;
	$sql= "SELECT * FROM student WHERE sid=$id";
	$result=mysqli_query($db, $sql);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["sid"]. " - Name: " . $row["name"]. " " . $row["standard"]. "<br>";
    }
} else {
    echo "0 results";
}
	
	  mysqli_close($db);

	
	#header('location: index.php');
}
?>