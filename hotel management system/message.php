<?php 
	session_start();
?><html>
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
<h2>Bill of Mr/Ms. <?php echo $_SESSION["name"]?> </h2>
<br>
<h3>Room No. : <?php echo $_SESSION["roomno"]?> </h3>
<br>
<h3>Bill : Rs <?php echo $_SESSION["bill"]?>/-</h3> 
<br>
<?php

$final=$_SESSION["bill"]*0.95;
	echo "<h3>Bill after discount : {$final}</h3>";
?>
</div>
</body>
</html> 