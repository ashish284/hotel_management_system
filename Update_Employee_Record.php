<html>
<head>
<title>
Updation of Employee record
</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<div  style="width :20%;float:left">
<h3 style="text-align: left;"><b>ADMIN SECTION</b></h3>
<br/>
<ul class='nav nav-pills nav-stacked'>
<li ><a  href="View_Employee_Record.php">View Employee Record</a></li>
<br>
<li class="active"><a href="Update_Employee_Record.php">Update Employee Record</a></li>
<br>
<li ><a href="Add_New_Employee.php">Add new employee</a></li>
<br>
<li><a href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a href="Generate Bill.php">Generate Bill</a></li>
<br>
<li ><a href="addroom.php">Add New Room</a></li>
<br/>
<li><a href="index.php">Logout</a></li>
</ul>
</div>
<?php 
require_once("connection.php");
?>
<div id="content" style="width:70%; float:left;margin-left:15px;margin-top:80px">
<h2>Enter Employee Id of the Employee</h2>
<form id="formid" action="update1.php" mode="get">
<h3>Eid:</h3>
<input id="eidid"type="text" name ="eid" placeholder="EID" autofocus>
<br>
<br>
<input id="submitid" type="submit" value="submit"  >
</form>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="update.js"></script>

</body>
</html>