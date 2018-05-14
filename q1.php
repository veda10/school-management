<?php

session_start();

#$name1=$_SESSION['value'];

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body bgcolor="	#FFB6C1">
<h1><center>enter details</center></h1>
<br><br><br>
<form method="post" action="q11.php">
<center>
<div class="div1">
		<label>STUDENT ID : &nbsp;</label><input type="text" name="id" required>
		<label>SUBJECT : &nbsp;</label><input type="text" name="subject" required>
		
 
	  <br><br><br> <br><div class="input-group">
  	  <button type="submit" name="submit">go</button>
	 <!-- <label>TEACHER NAME: &nbsp;</label><input type="text" name="value">-->
  	</div><br>
  </div>
  
  </center></form>
  <div class="input-group">
  	  <button type="submit" id="back">Back</button>
  	</div>
<script>
var btn1 = document.getElementById('back');
btn1.addEventListener('click', function() {
  document.location.href = 'mainpage.php';
});

</script>
  </body>
  </html>
