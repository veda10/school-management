<!DOCTYPE html>
<?php
session_start();
$errors = array(); 
$nameErr="";
 $db = mysqli_connect('localhost', 'root', '', 'school');
if(!$db)
{
    die('Can\'t use ' . 'school' . ': ' . mysql_error());
}

if(isset($_POST['sub'])){
	#echo('error');
	#header('Location:index.php');
	
	#$id=$_POST['id'];
	 if (empty($_POST["id"])) {
		  $nameErr = " id Missing";
		 #die("Unable ");
       
    }
    else {
        $id = $_POST["id"];
    }
	$_SESSION['error'] = $nameErr;
	#$nameErr=$_SESSION['error'];

	$sql= "SELECT * FROM student WHERE sid=$id";
	$result=mysqli_query($db, $sql);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$array[] = $row;
       # echo "id: " . $row["sid"]. " - Name: " . $row["name"]. " " . $row["standard"]. "<br>";
    }
} else {
    echo "0 results";
}

	$name=$array[0]['name'];
	$standard=$array[0]['standard'];
	$section=$array[0]['section'];
	$rollno=$array[0]['roll_no'];
	$dob=$array[0]['dob'];
	$age=$array[0]['age'];
	
	$sql2= "SELECT * FROM parent WHERE sid=$id";
	$result2=mysqli_query($db, $sql2);
	
	if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
		$array2[] = $row2;
    }
} else {
    echo "0 results";
}

$pname=$array2[0]['pname'];
$ph=$array2[0]['phno'];
$email=$array2[0]['email'];



	$sql1= "SELECT * FROM grade WHERE sid=$id and standard=$standard";
	$result1=mysqli_query($db, $sql1);
	
	if ($result1->num_rows > 0) {
    #echo "<table><tr><th>SUBJECT</th><th>GRADE</th></tr>";
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
		$array1[] = $row1;
    }
    echo "</table>";
} else {
    echo "0 results";
}
$tel=$array1[0]['tel'];
$hin=$array1[0]['hin'];
$eng=$array1[0]['eng'];
$math=$array1[0]['math'];
$sci=$array1[0]['sci'];
$ss=$array1[0]['ss'];

	  mysqli_close($db);

	
	#header('location: index.php');
}

if(isset($_POST['back'])){
header('Location:mainpage.php');
}
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step Progress Bar</title>
    <style type="text/css">
        .container{
            width:100%;
        }
		[class*="col-"] {
    float: center;
    padding: 15px;
}
		.row::after {
    content: "";
    clear: both;
    display: table;
}
		/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
		

body {
	font-family: 'segoe ui';
}
	
	.first {
		display: grid;
		grid-template-columns: 50% 50%;
		grid-row-gap: 10px;
		width: 100%;
	}
	.second {
		display: grid;
		grid-template-columns: 25% 25% 25% 25%;
		grid-row-gap: 10px;
		width: 100%;
	}
	.third {
		display: grid;
		grid-template-columns: 33% 33% 34%;
		grid-row-gap: 10px;
		width: 100%;
	}
	@media(max-width: 850px) {
		.first {
			grid-template-columns: calc(100% - 400px);
			width: 100%;
		}
		.second {
			grid-template-columns: calc(100% - 400px);
			width: 100%;
		}
		.third {
			grid-template-columns: calc(100% - 400px);
			width: 100%;
		}
		.form-container {
		width: 100%;
		grid-template-columns: -1fr !important;
		
		}
	}
	.form-container {
		display: grid;
		grid-template-columns: -1fr 3fr;
	}
	.border {
		border:1px solid #A9A9A9;
		padding: 10px;
		width: auto;

	}
	table, th, td {
    border: 1px solid #A9A9A9;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
	
    </style>
    </head>
<body>
<br>
	<form method="post" action="/action_page.php">
  <fieldset style=" border-color: #A9A9A9;">
	<center><b><font size="5">REPORT CARD</font></b></center>
	<hr size="5" noshade style=" background-color: #000000 ; border-color : #000000 ">
	<div class="border">
	<div class="third">
	<div class="form-container">
	<div>
    Name:</div>
    <input type="text" name="name" value='<?php echo  $name; ?>' style="width:250px;height:24px;border: 1px solid #A9A9A9 ;">
	</div>	
	<div class="form-container">
	<div>Standard:</div>
 <input type="number" name="standard" value='<?php echo  $standard; ?>' style="width:250px;height:25px;border: 1px solid #A9A9A9 ;">
</select>
	</div>
	<div class="form-container">
	<div>
    Section:</div>
    <input type="text" name="name" value='<?php echo  $section; ?>' style="width:250px;height:23px;border: 1px solid #A9A9A9 ;">
	</div><div class="form-container">
	<div>Roll No:</div>
 <input type="number" name="standard" value='<?php echo  $rollno; ?>' style="width:250px;height:25px;border: 1px solid #A9A9A9 ;">
</select>
	</div>
	<div class="form-container">
	<div>
    DOB:</div>
    <input type="text" name="name" value='<?php echo  $dob; ?>' style="width:250px;height:24px;border: 1px solid #A9A9A9 ;">
	</div>
	<div class="form-container">
	<div>Age:</div>
 <input type="number" name="standard" value='<?php echo  $age; ?>' style="width:250px;height:25px;border: 1px solid #A9A9A9 ;">
</select>
	</div></div></div>
<br>
<div class="border"><div class="third"><div class="form-container"><div>
    Parent Name:</div>
    <input type="text" name="userid" value='<?php echo  $pname; ?>' style="width:250px;height:25px;border: 1px solid #A9A9A9 ;"></div>
<div class="form-container"><div>
    Mobile</div>
    <input type="number" name="mobile" value='<?php echo  $ph; ?>' style="width:250px;height:25px;border: 1px solid #A9A9A9 ;"></div>
  <div class="form-container"> <div>
Email id</div>
    <input type="text" name="emailid1" value='<?php echo  $email; ?>' style="width:387px;height:25px;border: 1px solid #A9A9A9 ;"></div>
	</div></div>
	<br>
	<div class="border"><div class="form-container"><div>
    <b>GRADE:</b></div>
    <center><table style="width:50%">
  <tr>
    <th>Subject</th>
    <th colspan="2">Grade</th>
  </tr>
  <tr>
    <td>Telugu</td>
    <td><?php echo  $tel; ?></td>
  </tr> <tr>
    <td>Hindi</td>
    <td><?php echo  $hin; ?></td>
  </tr> <tr>
    <td>English</td>
    <td><?php echo  $eng; ?></td>
  </tr> <tr>
    <td>Maths</td>
    <td><?php echo  $math; ?></td>
  </tr> <tr>
    <td>Science</td>
    <td><?php echo  $sci; ?></td>
  </tr><tr>
    <td>S.S.</td>
    <td><?php echo  $ss; ?></td>
  </tr>
  
</table></center></div>
</div><br>
<br>
    </fieldset>
</form>
<div class="input-group">
  	  <button id="back1">Back</button>
  	</div>
<script>
var btn1 = document.getElementById('back1');
btn1.addEventListener('click', function() {
  document.location.href = 'report.php';
});

</script>

    </body>
</html>