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
$eid=$_POST['eid'];
$ename=$_POST['ename'];
$address=$_POST['address'];
$ph_no=$_POST['ph_no'];
if(!$eid&&!$ename&&!$address&&!$ph_no){
	header("Location:Add_New_Employee.php");
}
$sql="insert into employee_records values('{$eid}','{$ename}','{$address}','{$ph_no}')";
if(mysqli_query($con,$sql))
	echo "<h2>Successfully Added!</h2>";

	else
	echo "Error Occured".mysqli_error($con);

?>
</form>
</div>
</body>
</html>