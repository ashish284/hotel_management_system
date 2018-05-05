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

require_once("includes/connection.php");
if(isset($_SESSION['userid'])){
echo'
<nav>
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

<form action="search1.php">
<fieldset>
<legend>SEARCH</legend>
<pre>

<input type="radio" name="search" value="type" checked/>TYPE OF ROOM
<input type="radio" name="search" value="facility"/>FACILITIES
<input type="radio" name="search" value="rate"/>PRICE OF ROOM
<input type="submit" value="SUBMIT" class="btn btn-primary">  		
</pre>

</fieldset>
</form>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>