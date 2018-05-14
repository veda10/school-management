<html>
<head>
	<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body bgcolor="	#FFDAB9">
<h1><center>UPDATE STUDENT DETAILS</center></h1>
<br><br><br>
<form method="post" action="updatestudent.php">
<center>
<div class="div1">
		<label>STUDENT ID : &nbsp;</label><input type="text" name="id" required>
		<label>SUBJECT : &nbsp;</label><input type="text" name="subject" required>
		<label>GRADE : &nbsp;</label><input type="number" name="grade" required>
 
	  <br><br><br> <br><div class="input-group">
  	  <button type="submit" name="submit">go</button>
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