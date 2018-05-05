<?php 
session_start();
?>
<html>
<head>
	<title>
	Update Employee Record
	</title>
	<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<div id="sidebar">
<h3 style="text-align: center; font-size:35px">Admin's Section</h3>
<ul>
<li><a  href="View_Employee_Record.php">View Employee Record</a></li>
<br>
<li><a style="font-weight: bold" href="Update_Employee_Record.php">Update Employee Record</a></li>
<br>
<li><a href="Add_New_Employee.php">Add new employee</a></li>
<br>
<li><a href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a href="Generate Bill.php">Generate Bill</a></li>
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
	</body>
</html>