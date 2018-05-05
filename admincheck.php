<html>
<head>
<title>ROOM AVAILABILITY</title>
<link rel="stylesheet" type="text/css" href="main.css" />
<meta charset="UTF-8"/>

</head>
<body >
<div class="content">
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
<?php 
require_once("includes/connection.php");
require_once("includes/navmenu.php");
?>
<?php 
$result=mysqli_query($connection,"select * from admin ");
$pwd=mysqli_fetch_assoc($result);
if($_POST['password']==$pwd['password'])
{
	header("location:employee record menu.php");
}
else{
	echo "<h2>INVALID ADMIN PASSWORD</h2>";
	header("refresh:1;url=adminlogin.php");
}
?>
</div>
</body>
</html>