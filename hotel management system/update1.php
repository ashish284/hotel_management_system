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
<h3 style="text-align: center; font-size:35px">Admin's Section<h3>
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
<?php 
require_once("connection.php");
$_SESSION["eid"]=$_GET["eid"];
$eid=$_GET["eid"];
if(!$eid){
	
	header("Location:Update_Employee_Record.php");
}
$sql="select ename from employee_records where eid={$_GET["eid"]}";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_assoc($result);
	$ans=$row["ename"];
	}
?>
<div id="content">
<h1>Update Employee</h1>
<form action="update2.php" mode="get">
<h3>EMPLOYEE NAME:</h3>
<input id="textid" type="text" name="ename" value="<?php echo $ans?>">
<?php
$sql="select address from employee_records where eid={$eid}";
 $result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_assoc($result); 
}
?><br>
<h3>ADDRESS:</h3>
<input id="textid" type="text" name="address" value="<?php echo $row["address"]?>">
<?php
$sql="select ph_no from employee_records where eid={$eid}";
 $result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_assoc($result); 
}
?><br>
<h3>PHONE NO:</h3>
<input  id="textid" type="text" name="ph_no" value="<?php echo $row["ph_no"]?>">
<br>
<br>
<input id="submitid" type="submit" value="Update">
<a  href="Update_Employee_Record.php"><input id="submitid" type="button" value="Cancel">
</form>	
</div>
</body>
</html>