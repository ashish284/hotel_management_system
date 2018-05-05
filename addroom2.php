<html>
<head>
<title>
Add New Employee Record
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
<li><a href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a href="Generate Bill.php">Generate Bill</a></li>
<br>
<li class="active"><a href="addroom.php">Add New Room</a></li>
<br/>
<li><a href="index.php">Logout</a></li>
</ul>
</div>
<div id="content">

<?php 
require_once("connection.php");
$roomno=$_POST['roomno'];
$type=$_POST['type'];
$rate=$_POST['rate'];
$facility=$_POST['facility'];





$sql="insert into room(roomno,type,rate,facility) values('{$roomno}','{$type}','{$rate}','{$facility}')";











if(mysqli_query($con,$sql)){
	$sql="update room set 
		  status='not booked'";
		 mysqli_query($con,$sql);
		  echo "<h2>Successfully Added!</h2>";
}
else{
	echo '<script>alert("roomno already exists!");</script>';
	header("refresh:0.01;url=addroom.php");
	}
?>
</form>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>