<?php 
session_start();
?>
<html>
<head>
<title>
Update Employee Record
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
<li class="active"><a href="Update_Employee_Record.php">Update Employee Record</a></li>
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
$_SESSION["eid"]=$_GET["eid"];
$eid=$_GET["eid"];
$sql="select ename,address,ph_no from employee_records where eid={$_GET["eid"]}";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0){
	/*echo "<h2>Invalid Employee id, enter valid employee id</h2>";*/
	echo '<script>alert("Invalid Employee id , enter valid employee id");</script>';
	header("refresh:0.01;url=Update_Employee_Record.php");
}
else{

	$row=mysqli_fetch_assoc($result);
	$name=$row["ename"];
	$address=$row["address"];
	$ph_no=$row["ph_no"];?>
	<div id="content" style="margin-top:80px; margin-left:15px;float: left; width: 60%" >
	<h1>Update Employee</h1>
	<br/>
	<form action="update2.php" mode="get">
	<h3>EMPLOYEE NAME:</h3>
	<input id="textid" type="text" name="ename" value= "<?php echo $name?>">
	<br>
	<h3>ADDRESS:</h3>
	<input id="textid" type="text" name="address" value="<?php echo $address?>">
	<br>
	<h3>PHONE NO:</h3>
	<input  id="textid" type="text" name="ph_no" value="<?php echo $ph_no?>">
	<br>
	<br>
	<input id="submitid" type="submit" value="Update">
	<a  href="Update_Employee_Record.php"><input id="submitid" type="button" value="Cancel">
	</form>	
</div>
<?php }?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>	