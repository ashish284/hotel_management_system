<html>
<head>
<title>
Add New Employee Record
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
<li><a style="font-weight: bold" href="Add_New_Employee.php">Add new employee</a></li>
<br>
<li><a href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a href="Generate Bill.php">Generate Bill</a></li>
</div>
<div id="content">

<?php 
require_once("connection.php");
?>
<h2>Add New Employee</h2>
<form action="add1.php" method="post">
<h3>Eid:</h3>
<input id="textid" type="text" title="Enter Employee id" name="eid" autofocus>
<br>
<h3>Name:</h3>
<input id="textid" type="text" title="Enter Name of Employee" name="ename">
<br>
<h3>Address:</h3>
<input id="textid" type="text" title="Enter Address" name="address">
<br>
<h3>Phone No:</h3>
<input id="textid" type="text" title="Phone No" name="ph_no">
<br>
<br>
<input id="submitid" type="submit" value="submit">
</form>
</div>
</body>
</html>