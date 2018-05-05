<html>
<head>
<title>
Bill Generation
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
<li class="active"><a href="Generate Bill.php">Generate Bill</a></li>
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
<h2>Enter the room no.</h2>
<form id="genid" action="generatebill1.php" >
<h3>Room No.:</h3>
<br>
<input class="textid" id="gentext" type="text" name="room_no" placeholder="ROOM NO" autofocus>
<br>
<br>
<input id="submitid" type="submit" value="submit">
</div>
<script src="gen.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html> 