<html>
<head>
	<meta charset="UTF-8"/>
	<title>ADMIN LOGIN</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body >
<div class="content">
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
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

<form id="form3" action="admincheck.php" method="post" class="form-horizontal">
<fieldset>
<legend>ADMIN LOGIN</legend>
<div class="form-group">
	<lable class="col-sm-2" for="pwd">PASSWORD:</lable> 
	<div class="col-sm-7">
		<input id="pwd" type="password" name="password" autofocus placeholder="PASSWORD" />
	</div>
</div>
<div class="form-group">
	<div style="margin-left:15px">
		<input type="submit" value="LOGIN" class="btn btn-primary">
	</div>
</div>

</fieldset>
</form>

<p class="clear">.</p>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/script3.js"></script>
</body>
</html>