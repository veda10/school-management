<?php

session_start();

#$name1=$_SESSION['value'];

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body bgcolor="	#FFA500">
<h1><center>enter details</center></h1>
<br><br><br>
<form method="post" action="q22.php">
<center>
<div class="div1">
		<label>Classroom no : &nbsp;</label><input type="text" name="cls" required>
			
 
	  <br><br><br> <br><div class="input-group">
  	  <button type="submit" name="submit">go</button>
  	</div><br>
  </div>
  
  </center></form>
  <div class="input-group">
  	  <button type="submit" id="back1">Back</button>
  	</div>
<script>
var btn1 = document.getElementById('back1');
btn1.addEventListener('click', function() {
  document.location.href = 'mainpage.php';
});

</script>
  </body>
  </html>
