<!DOCTYPE html>
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
	<form action="/action_page.php">
  <fieldset style=" border-color: #A9A9A9;">
	<center><b><font size="5">RECEIPT</font></b></center>
	<hr size="5" noshade style=" background-color: #000000 ; border-color : #000000 ">
	<div class="border">
	<div class="third">
	<div class="form-container">
	<div>
    Name:</div>
    <input type="text" name="name" style="width:250px;height:24px;border: 1px solid #A9A9A9 ;">
	</div>	
	<div class="form-container">
	<div>Standard:</div>
 <input type="number" name="standard"style="width:250px;height:25px;border: 1px solid #A9A9A9 ;">
</select>
	</div>
	<div class="form-container">
	<div>
    Section:</div>
    <input type="text" name="name" style="width:250px;height:23px;border: 1px solid #A9A9A9 ;">
	</div><div class="form-container">
	<div>Roll No:</div>
 <input type="number" name="standard"style="width:250px;height:25px;border: 1px solid #A9A9A9 ;">
</select>
	</div>
	<div class="form-container">
	<div>
    DOB:</div>
    <input type="text" name="name" style="width:250px;height:24px;border: 1px solid #A9A9A9 ;">
	</div>
	<div class="form-container">
	<div>Age:</div>
 <input type="number" name="standard"style="width:250px;height:25px;border: 1px solid #A9A9A9 ;">
</select>
	</div></div></div>
<br>
<div class="border"><div class="third"><div class="form-container"><div>
    Parent Name:</div>
    <input type="text" name="userid" style="width:250px;height:25px;border: 1px solid #A9A9A9 ;"></div>
<div class="form-container"><div>
    Mobile</div>
    <input type="number" name="mobile" style="width:250px;height:25px;border: 1px solid #A9A9A9 ;"></div>
  <div class="form-container"> <div>
Email id</div>
    <input type="text" name="emailid1" style="width:387px;height:25px;border: 1px solid #A9A9A9 ;"></div>
	</div></div>
	<br>
	<div class="border"><div class="form-container"><div>
    <b>DETAILS:</b></div>
    <center><table style="width:50%">
  <tr>
    <th>Installment No</th>
    <th colspan="2">Amount</th>
  </tr>
  <tr>
    <td>1</td>
    <td>55577854</td>
  </tr> <tr>
    <td>2</td>
    <td>55577854</td>
  </tr> <tr>
    <td>3</td>
    <td>55577854</td>
  
</table></center></div>
</div>
    </fieldset>
</form>

    </body>
</html>
    