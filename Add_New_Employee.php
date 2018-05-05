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
<li class="active"><a href="Add_New_Employee.php">Add new employee</a></li>
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
<div id="content" style="margin-top:80px; margin-left:15px;float: left; width: 60%">

<?php 
require_once("connection.php");
?>
<h2>Add New Employee</h2>

<form id="addform" action="add1.php" method="post" class="form-horizontal">
<div class="form-group">
<label for="t1" class="col-sm-2 ">Eid:</label>
<div class="col-sm-10">
<input  id="t1" type="text" title="Enter Employee id" name="eid" placeholder="EID" autofocus>
</div>
</div>
<br>

<div class="form-group">
<label for="t2" class="col-sm-2 ">Name:</label>
<div class="col-sm-10">
<input  id="t2" type="text" title="Enter Name of Employee" name="ename" placeholder="NAME">
</div>
</div>
<br>
<div class="form-group">
<label for="t3" class="col-sm-2 ">Address:</label>
<div class="col-sm-10">
<input  id="t3" type="text" title="Enter Address" name="address" placeholder="ADDRESS">
</div>
</div>
<br>
<div class="form-group">
<label for="t4" class="col-sm-2 ">Phone No:</label>
<div class="col-sm-10">
<input  id="t4" type="text" title="Phone No" name="ph_no" placeholder="PHONE NO">
</div>
</div>
<br>
<br>
<input id="submitid" type="submit" value="submit">
</form>
</div>
<script src="add.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>