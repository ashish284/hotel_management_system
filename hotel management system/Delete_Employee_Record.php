<html>
<head>
<title>
Delete of Employee Record
</title>
<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<div id="sidebar">
<h3 style="text-align: center; font-size:35px">Admin's Section</h3>
<ul>
<li><a  href="View_Employee_Record.php">View Employee Record</a></li>
<br>
<li><a  href="Update_Employee_Record.php">Update Employee Record</a></li>
<br>
<li><a  href="Add_New_Employee.php">Add new employee</a></li>
<br>
<li><a style="font-weight: bold" href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a href="Generate Bill.php">Generate Bill</a></li>
</div>
<div id="content">
<?php 
require_once("connection.php");
?>
<h2>Enter Eid of the employee</h2>
<form action="delete1.php" mode="get">
<h3>Eid:</h3>
<input type="text" name ="eid" autofocus>
<br>
<br>
<input id="submitid" type="submit" value="submit">
</form>
<div>
</body>
</html> 