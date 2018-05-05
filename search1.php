<?php session_start();?>
<html>
<head>
<title>SEARCH</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css" />
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

<li class="active"><a href="search.php" >SEARCH</a></li>
<li ><a href="dbconnection.php" >VIEW HOTEL</a></li>
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
<li class="active"><a href="search.php">SEARCH</a></li>
<li><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}
?>

<form action="searched.php">
<fieldset>
<legend>SEARCH</legend>


<?php
if($_GET['search']=="type")
{
echo'	
<h3>TYPE OF ROOM</h3>
<input type="radio" name="subchoice" value="double bed" checked/>DOUBLE BED
<br/>
<input type="radio" name="subchoice" value="single bed" />SINGLE BED
<br/>
<input type="submit" value="SUBMIT" class="btn btn-primary">			  <a   	class="btn btn-primary" style="margin-left:20px;" href="search.php">BACK</a>
<br/>';
}?>
<?php
if($_GET['search']=="facility"){
echo'
<h3>FACILITY</h3>
<input type="radio" name="subchoice" value="ac" checked/>AC
<br/>
<input type="radio" name="subchoice" value="non ac"/>NON AC
<br/>
<input type="submit" value="SUBMIT" class="btn btn-primary"> <a   	class="btn btn-primary" style="margin-left:20px;" href="search.php">BACK</a>
<br/>';
}?>
<?php
if($_GET['search']=="rate"){
echo '
	<h3>RATE</h3>
	<input type="radio" name="subchoice" value="10000" checked/>10000-25000
	<br/>
	<input type="radio" name="subchoice" value="25000"/>25000-40000
	<br/>
	<input type="submit" value="SUBMIT" class="btn btn-primary">  <a   	class="btn btn-primary" style="margin-left:20px;" href="search.php">BACK</a>
	<br/>';
	}?>

</fieldset>
</form>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>