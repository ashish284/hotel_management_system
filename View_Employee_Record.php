<html>
<head>
<title>
View Employee Record
</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<div  style="width :20%;float:left">
<h3 style="text-align: left;"><b>ADMIN SECTION</b></h3>
<br/>
<ul class='nav nav-pills nav-stacked'>
<li class="active"><a  href="View_Employee_Record.php">View Employee Record</a></li>
<br>
<li ><a href="Update_Employee_Record.php">Update Employee Record</a></li>
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
$sql="select * from employee_records";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)> 0){?>

	<div id="table1" style="margin-top:80px; margin-left:15px;float: left; width: 60%" >
	<h2>Employees in hotel Atlantis, The Palm</h2>
	<table id="table2" class='table table-responsive table-striped table-bordered table-hover '>
	<tr>
	<h2><th class="heading">Employee Id</th><h2>
	<h2><th class="heading">Employee Name</th><h2>
	<h2><th class="heading">Address</th><h2>
	<h2><th class="heading">Phone No.</th><h2>
	</tr><?php
	while($row=mysqli_fetch_assoc($result)){
		//echo "Eid :".$row["eid"]."Ename : ".$row["ename"]."Address : ".$row["address"]."Phone no : ".$row["ph_no"]."</br>";
		echo "<tr>";
		echo "<td class='others'>".$row["eid"]."</td>";
		echo "<td class='others'>".$row["ename"]."</td>";
		echo "<td class='others'>".$row["address"]."</td>";
		echo "<td class='others'>".$row["ph_no"]."</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
}
else {
	echo "no results";
}
mysqli_close($con);
?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>