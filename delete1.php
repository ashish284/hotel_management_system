<html>
<head>
<title>
Delete of Employee record
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
<li ><a href="Update_Employee_Record.php">Update Employee Record</a></li>
<br>
<li ><a href="Add_New_Employee.php">Add new employee</a></li>
<br>
<li class="active"><a href="Delete_Employee_Record.php">Delete Employee</a></li>
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
$eid=$_GET['eid'];
if(!$eid){
	header("Location:Delete_Employee_Record.php");
}
$sql1="select * from employee_records where eid={$eid}";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)==0){
	echo '<script>alert("Enter valid Eid");</script>';
	header("refresh:0.001;url=Delete_Employee_Record.php");
}
else{
$sql="delete from employee_records where eid = {$eid}";
if(mysqli_query($con,$sql))
	echo "<h2>Record deleted successfully!</h2>";
else
	echo "Error Occured";
}
?>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html> 