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
<form id="form4" action="changepwd.php" method="post" class="form-horizontal" >
<fieldset>
<legend>FORGOT PASSWORD</legend>
<?php 
if(isset($_GET['wrong'])){
	echo"<h4>ENTER VALID USERID</h4>";
}
?>
<div class="form-group">
<lable for="userid" class="col-sm-2">USER ID:</lable>
<div class="col-sm-8"> 
 <input id="userid"type="text" name="userid" autofocus placeholder="USER ID"/><br/>
</div>
</div>
<div class="form-group">
	<div style="margin-left:15px">
		<input type="submit" value="SUBMIT" class="btn btn-primary">
	</div>
</div>

</fieldset>
</form><script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script4.js"></script>
</body>
</html>