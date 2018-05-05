<html>
<head>
<title>
View Employee Record
</title>
<link rel="stylesheet" type="text/css" href="../main.css">
<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
<?php require_once("includes/navmenu.php");?>

<div id="sidebar">
<h3 style="text-align: center; font-size:35px">Admin's Section</h3>
<ul>
<li><a style="font-weight: bold" href="View_Employee_Record.php">View Employee Record</a></li>
<br>
<li><a href="Update_Employee_Record.php">Update Employee Record</a></li>
<br>
<li><a href="Add_New_Employee.php">Add new employee</a></li>
<br>
<li><a href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a href="index.php">Logout</a></li>
<li><a href="Generate Bill.php">Generate Bill</a></li>
<br>

</ul>
</div>

<?php
require_once("connection.php");
$sql="select * from employee_records";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)> 0){?>

	<div id="table1">
	<h2>Employees in hotel Atlantis, The Palm</h2>
	<table id="table2">
	<tr>
	<h2><th class="heading">Employee Id</th><h2>
	<h2><th class="heading">Employee Name</th><h2>
	<h2><th class="heading">Address</th><h2>
	<h2><th class="heading">Phone No.</th><h2>
	</tr><?php
	while($row=mysqli_fetch_assoc($result)){
		//echo "Eid :".$row["eid"]."Ename : ".$row["ename"]."Address : ".$row["address"]."Phone no : ".$row["ph_no"]."</br>";
		echo "<tr>";
		echo "<td >".$row["eid"]."</td>";
		echo "<td >".$row["ename"]."</td>";
		echo "<td >".$row["address"]."</td>";
		echo "<td >".$row["ph_no"]."</td>";
		echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
}
else {
	echo "no results".mysqli_error($con);
}
mysqli_close($con);
?>

</body>
</html>