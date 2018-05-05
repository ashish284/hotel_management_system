<?php session_start();
?>
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
<nav >
	<ul class="nav nav-pills nav-justified">
	<li><a href="index.php">HOME</a></li>
	<li class="active"><a href="register.php">REGISTER</a></li>
	<li><a href="search.php">SEARCH</a></li>
	<li><a href="dbconnection1.php">VIEW HOTEL</a></li>
	</ul>
</nav>

<form id="form2" action="registration.php" method="post" class="form-horizontal">
<fieldset>
	<legend><b>REGISTRATION</b></legend>
		<div class="form-group">
			<lable for="username" class="col-sm-3">USER NAME:</lable> 		  
			<div class="col-sm-7">
				<input class='form-control' id="username" type="text" name="username" autofocus placeholder="USER NAME"/><br/>
			</div>
		 </div>
		 <div class="form-group">
			<lable for="userid" class="col-sm-3">USER ID: </lable> 		 
			<div class="col-sm-7">	
				<input class='form-control' id="userid" type="text" name="userid" placeholder="USER ID"/><br/>
			</div>
		 </div>
		<div class="form-group">
			<lable for="password" class="col-sm-3">PASSWORD:</lable> 
			<div class="col-sm-7">
				<input class='form-control' id="password"type="text" name="password" placeholder="PASSWORD"/><br/>
			</div>
		</div>
		<div class="form-group">
			<lable for="security_question" class="col-sm-3">SECURITY QUESTION:</lable>
			<div class="col-sm-7">
				<input class='form-control' id="security_question" type="text" name="security_question" placeholder="SECURITY QUESTION"/><br/>
			</div>
		</div>
		<div class="form-group">
			<lable for="security_answer" class="col-sm-3">SECURITY ANSWER:</lable>   	  
			<div class="col-sm-7">
				<input class='form-control' id="security_answer" type="text" name="security_answer" placeholder="SECURITY ANSWER"/><br/>
			</div>
		</div>
		<div class="form-group">
			<lable for="emailid" class="col-sm-3">EMAIL ID:</lable> 		   
			<div class="col-sm-7">
				<input class='form-control' id="emailid" type="email" name="emailid" placeholder="EMAIL ID"/><br/>
			</div>
		</div>
		<div class="form-group">
			<lable for="phoneno" class="col-sm-3">PHONE NO: </lable>
			<div class="col-sm-7">
				<input class='form-control' id="phoneno" type="text" name="phoneno" placeholder="PHONE NUMBER"/><br/>
			</div>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-5">
		<input type="submit" value="REGISTER" class="btn btn-primary">
		</div>
	</fieldset>

</form>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script2.js"></script>
</body>
</html>