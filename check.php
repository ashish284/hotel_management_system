
<html>
<head>
<title>FORGOT PASSWORD</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<div class="content">
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
<br/>
<?php 
echo'
<nav >
<ul class="nav nav-pills nav-justified">
<li><a href="index.php">HOME</a></li>
<li><a href="register.php">REGISTER</a></li>
<li ><a href="search.php">SEARCH</a></li>
<li ><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
?>
<?php require_once("includes/connection.php")?>
<?php 
$result=mysqli_query($connection,"select uid from registereduser where security_answer='{$_POST['securitya']}'");
if(mysqli_num_rows($result)==0){
	echo"<h2>SECURITY ANSWER INCORRECT</h2>";
	header("refresh:1;url=forgotpwd.php");
}
else{
echo"<h2>PASSWORD SENT TO YOUR EMAIL ID</h2>";
header('Refresh: 1;url=index.php');
}
?>
</form>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>