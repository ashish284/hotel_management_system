<html>
<head>
<title>
Add New Room
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
<div id="content" style="margin-top:80px; margin-left:15px;float: left; width: 60%">

<?php 
require_once("connection.php");
?>
<h2>Add New Room</h2>
<form id="addform2" action="addroom2.php" method="post">
<h3>Room no:</h3>
<input class="textid" id="tt1" type="text" title="Enter the room no" name="roomno" placeholder="ROOM NO" autofocus>
<br>
<h3>Type:</h3>
<input class="textid" id="tt2" type="text" title="Enter the type of room" name="type" placeholder="TYPE">
<br>
<h3>Rate:</h3>
<input class="textid" id="tt3" type="text" title="Enter Rate of the room" name="rate" placeholder="RATE">
<br>
<h3>Facility:</h3>
<input class="textid" id="tt4" type="text" title="Facility" name="facility" placeholder="FACILITY">
<br>
<br>
<input id="submitid" type="submit" value="submit">
</form>
</div>
<script src="addroom.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>