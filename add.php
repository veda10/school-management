<?php

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'school');
if(!$db)
{
    die('Can\'t use ' . 'school' . ': ' . mysql_error());
}

// REGISTER USER
if (isset($_POST['submit'])) {

  if (empty($_POST['name'])) { array_push($errors, "Username is required"); }
   if (empty($_POST['standard'])) { array_push($errors, "standard is required"); }
    if (empty($_POST['section'])) { array_push($errors, "Username is required"); }
	 if (empty($_POST['gender'])) { array_push($errors, "Username is required"); }
 if (empty($_POST['dob'])) { array_push($errors, "Username is required"); }
  if (empty($_POST['age'])) { array_push($errors, "Username is required"); }
   if (empty($_POST['parent'])) { array_push($errors, "Username is required"); }
    if (empty($_POST['occupation'])) { array_push($errors, "Username is required"); }
	 if (empty($_POST['mobile'])) { array_push($errors, "Username is required"); }
	  if (empty($_POST['emailid'])) { array_push($errors, "Username is required"); }
	   if (empty($_POST['doorno'])) { array_push($errors, "Username is required"); }
	    if (empty($_POST['street'])) { array_push($errors, "Username is required"); }
		 if (empty($_POST['area'])) { array_push($errors, "Username is required"); }
 # if (empty($password_1)) { array_push($errors, "Password is required"); }
$name = $_POST['name'];
$standard = $_POST['standard'];
$section = $_POST['section'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$doorno = $_POST['doorno'];
$street = $_POST['street'];
$area = $_POST['area'];
$gender = $_POST['gender'];
$parent=$_POST['parent'];
$mobile=$_POST['mobile'];
$emailid=$_POST['emailid'];
$occupation=$_POST['occupation'];
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 	{
  #	$password = $password_1;//encrypt the password before saving in the database

  $q= "SELECT COUNT(roll_no) as total FROM student WHERE standard=$standard AND section='$section'";
  $result=mysqli_query($db, $q);
  $value = mysqli_fetch_assoc($result);
  #$value1=$value->['total']+1;
   echo $value['total'];
  $value1=$value['total'];
 
  
  	$query = "INSERT INTO student (name , gender , standard , section , roll_no, dob, h_no, colony, area, age)
	VALUES ('$name','$gender', $standard, '$section',$value1 ,'$dob', '$doorno', '$street', '$area', $age)";
  	mysqli_query($db, $query);
	if(!$query)
{
    die("DAMMIT 1");
}else{ echo "Success"; }
  	
	$sql_1="INSERT INTO parent (sid, pname, occupation, email, phno)
	VALUES ((SELECT MAX(sid) FROM student), '$parent', '$occupation','$emailid', $mobile)";
	mysqli_query($db, $sql_1);
	if(!$sql_1)
{
    die("DAMMIT 2");
}else{ echo "Success"; }
	
	#$_SESSION['username'] = $username;
  	#$_SESSION['success'] = "You are now logged in";
  	#header('location: mainpage.php');
  }
}


  mysqli_close($db);

?>
