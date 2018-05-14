<?php

session_start();

#$nameErr=$_SESSION['error'];

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body bgcolor="#E6E6FA">
<h1><center>STUDENT DETAILS</center></h1>
<br><br><br>
<form method="post" action="index.php">
<center>
<div class="div1">
		<label>STUDENT ID : &nbsp;</label><input type="text" name="id" required>
		
    
	  <br><br><br> <br><div class="input-group">
  	  <button type="submit" name="sub">go</button>
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