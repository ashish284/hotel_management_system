<?php 
session_start();
?>
<html>
<head>
	<title>
	Update Employee Record
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
<div id="content">
<?php
require_once("connection.php");
$ename=$_GET['ename'];
$address=$_GET['address'];
$ph_no=$_GET['ph_no'];
$id=$_SESSION["eid"];
$sql="update employee_records set ename='{$ename}',address='{$address}' ,ph_no='{$ph_no}' where eid={$id}";
if(mysqli_query($con,$sql))
	echo "<h2>Successfully Updated!<h2>";
else
	echo "Failed to Update.".mysqli_error($con);
?>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

	</body>
</html>