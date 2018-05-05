<?php session_start();?>
<html>
<head>
<meta charset="UTF-8">	
<title>BOOKING</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="content">
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
<br/>
<?php 
if(isset($_SESSION['userid'])){
echo'
<nav >
<ul class="nav nav-pills nav-justified">
<li ><a href="galary.php" >GALARY</a></li>

<li ><a href="search.php" >SEARCH</a></li>
<li ><a href="dbconnection1.php" >VIEW HOTEL</a></li>
<li ><a href="logout.php" >LOGOUT</a></li>
</ul>

</nav>';
}
else{
echo'
<nav >
<ul class="nav nav-pills nav-justified">
<li><a href="index.php">HOME</a></li>
<li><a href="register.php">REGISTER</a></li>
<li ><a href="search.php">SEARCH</a></li>
<li ><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}
?>
<?php
require_once("includes/connection.php");
$_SESSION['roomno']=$_GET['rno'];


if(!isset($_SESSION['userid'])){
	header("location:index.php");
}	
?>
<pre><form action="booked.php" id="form5">
<fieldset>
<legend>BOOKING INFORMATION</legend>
CHECK IN DATE:  <input id="cid" type="date" name="check_in_date" autofocus /><br/>
CHECK OUT DATE: <input id="cod" type="date" name="check_out_date" ><br/>
<input type="submit" value="BOOK ROOM"/>
</fieldset>
</form>
</pre>
</div><script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script5.js"></script>
</body>
</html>