<html>
<head>
<title>REGISTRATION</title>
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
<nav>
<ul class="nav nav-pills nav-justified">
<li ><a href="galary.php" >GALARY</a></li>

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
<li class="active"><a href="register.php">REGISTER</a></li>
<li ><a href="search.php">SEARCH</a></li>
<li><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}

require_once("includes/connection.php");?>
<?php
$name=$_POST['username'];
$uid=$_POST['userid'];
$pwd=$_POST['password'];
$sque=$_POST['security_question'];
$sans=$_POST['security_answer'];
$email=$_POST['emailid'];
$pno=$_POST['phoneno'];
if(!$name || !$uid || !$pwd || !$sque || !$sans || !$email || !$pno){
	echo"<h3>ALL FIELDS ARE COMPULSORY</h3>";
	header("refresh:1;url=register.php");
}
else{
$result=mysqli_query($connection,
"insert into registereduser values($uid,'$pwd','$sque','$sans','$email',$pno,'$name')");
if(!$result){
	echo"<script>
	alert('USERID ALREADY EXIST!!');
	</script>";
	header("refresh:0.5;url=register.php");
}
else{
echo"<h3>YOU ARE SUCCESSFULLY REGISTERED</h3>";
header("refresh:1;url=index.php");
}
}
?>
</div>
</body>
</html>