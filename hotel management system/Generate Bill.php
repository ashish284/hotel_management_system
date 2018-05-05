<html>
<head>
<title>
Bill Generation
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
<li><a  href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a style="font-weight: bold" href="Generate Bill.php">Generate Bill</a></li>
</div>
<div id="content">
<?php 
require_once("connection.php");
?>
<h2>Enter the room no.</h2>
<form action="generatebill1.php" >
<h3>Room No.:</h3>
<br>
<input id="textid" type="text" name="room_no" autofocus>
<br>
<br>
<input id="submitid" type="submit" value="submit">
</div>
</body>
</html> 