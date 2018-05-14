<html>
<head> 
<style>
header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
.button {
    background-color: #3B9C9C;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<center><h1><header>WELCOME &nbsp;TO &nbsp;HOME &nbsp;PAGE</header></h1></center>
</head>

<body>
<?php

	#echo 'succesfully logged in';
?>
<center>
<p>
<button class="button" id="add"> add user</button><br><br>
<button class="button" id="student"> Add Student</button><br><br>
<button class="button" id="delete"> Delete Student</button><br><br>
<button class="button" id="update"> update student</button><br><br>
<button class="button" id="report"> Generate report card</button><br><br>
<button class="button" id="logout"> logout</button><br>
<br>
<p><h3>->teacher teaching a particular subject to a particular student</h3></p>
<button class="button" id="q1"> Go</button>
<p><h3>->students of particular classroom</h3></p>
<button class="button"  id="q2"> Go</button>
</center>
		 <script>
var btn = document.getElementById('add');
btn.addEventListener('click', function() {
  document.location.href = 'register.php';
});
var btn1 = document.getElementById('logout');
btn1.addEventListener('click', function() {
  document.location.href = 'first.php';
});
var btn2 = document.getElementById('report');
btn2.addEventListener('click', function() {
  document.location.href = 'report.php';
});
var btn4 = document.getElementById('student');
btn4.addEventListener('click', function() {
  document.location.href = 'addstudent.php';
});
var btn5 = document.getElementById('delete');
btn5.addEventListener('click', function() {
  document.location.href = 'deletestudent.php';
});
var btn6 = document.getElementById('q1');
btn6.addEventListener('click', function() {
  document.location.href = 'q1.php';
});
var btn7 = document.getElementById('q2');
btn7.addEventListener('click', function() {
  document.location.href = 'q2.php';
});
var btn8 = document.getElementById('update');
btn8.addEventListener('click', function() {
  document.location.href = 'update.php';
});


</script>
  	</p>
</body>
</html>