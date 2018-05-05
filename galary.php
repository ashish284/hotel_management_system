<?php session_start();?>
<html>
<head>
<title>GALARY</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css"/>
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
<li class="active"><a href="galary.php" >GALARY</a></li>

<li ><a href="search.php" >SEARCH</a></li>
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
<li ><a href="search.php">SEARCH</a></li>
<li ><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}

require_once("includes/connection.php");
?>
<br/>

<div  class="content" style="width:75%">
<img width= "100%" height="400px" id="mainImage" src="images/hotel.jpg" />
</div>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>