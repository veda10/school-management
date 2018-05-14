<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
		<center> <h1>The School</h1></center>

<center>		
<div class="log-form">
	<h2>Login to your account</h2>
<!-- your html -->
<form method="POST">
 username:
 <input type="text" name="uname" required>
 <br />
 Password:
 <input type="password" name="pass" required>
 <br />
 <input type="submit" name="sub">
</form>
 </div></center>
<?php
if(isset($_POST['sub']) && !empty($_POST['uname'])=='False' && !empty($_POST['pass'])=='False'){
$con = mysqli_connect('localhost','root','','school');
$query = "SELECT * FROM users WHERE uname='".$_POST['uname']."' AND pass='".$_POST['pass']."'";
 
$con1 = $con->query($query);
$n = $con1->num_rows;
if($n>0){
	#echo 'succesfully connected to the database.......................';
	header("Location:mainpage.php");
	exit;
	}
else{
	#echo('error');
	header("Location:loginerror.php");
	exit;
}
}
?>

</body>
</html>