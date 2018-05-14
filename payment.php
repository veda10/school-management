<html>
<head>
	<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body bgcolor="#E6E6FA">
<h1><center>STUDENT DETAILS</center></h1>
<br><br><br>
<center>
<div class="div1">
		<label>STUDENT ID : &nbsp;</label><input type="text" name="id">
      <label>NAME : &nbsp;</label><input type="text" name="sname">
	  <div>
	  <input type="submit" name="sub" style="width: 10%;" value="go">
  </div></div>
  </center>
  <?php
if(isset($_POST['sub'])){
	echo('error');
	header('Location:receipt.php');
}
?>
  </body>
  </html>