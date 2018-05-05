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

if(!$_POST['userid'])
{
	header("location:forgotpwd.php?wrong=1");
}
$result=mysqli_query($connection,"select security_question from registereduser where uid='{$_POST['userid']}'");
if(mysqli_num_rows($result)==0){
	echo "<h1>ENTER A VALID USERID<h1>";
	
	header("location:forgotpwd.php?wrong=1");
}
$quest=mysqli_fetch_assoc($result);
?>
<form action="check.php" method="post" id="form6" class="form-horizontal">
<fieldset>
<legend>PASSWORD RECOVERY</legend>
<div class="form-group">
<lable class="col-sm-3" >SECURITY QUESTION:</lable> 
<div class="col-sm-8">
<?php echo"<h3>".strtoupper($quest['security_question'])."</h3>" ?>
</div> 
</div>
<div class="form-group">
<lable class="col-sm-3" for="securitya">SECURITY ANSWER:   </lable>
<div class="col-sm-8">
 <input id="securitya" type="text" name="securitya" autofocus placeholder="SECURITY ANSWER"/><br/>
</div>
</div>
<div class="form-group">
<div style="margin-left:15px">
<input type="submit" value="SUBMIT" class="btn btn-primary">
</div>
</div>
</fieldset>
</form>
</form><script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script6.js"></script>
</body>
</html>