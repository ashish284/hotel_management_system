
<html>
<head>
<title>HOTEL ATLANTIS</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>

<div class="content">
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
<br/>
<nav >
<ul class="nav nav-pills nav-justified">
<li class="active"><a href="index.php">HOME</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="search.php">SEARCH</a></li>
<li><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>
<br/>

<div style="width:80%;" class="content">
<img width= "100%" height="400px" id="mainImage" src="images/hotel.jpg"/>
<p class="clear"> </p>
<br>
<p class="about"><b>Atlantis, The Palm</b> is a UAE hotel resort located at the apex of the Palm Jumeirah. It was the first resort to be built on the island and is themed on the myth of Atlantis[5] but includes distinct Arabian elements. The resort opened on September 24, 2008 as a joint venture between Kerzner International Holdings Limited and Istithmar.<br/>
The 1,539 room nautically themed resort has two accommodation wings, also referred to as the Royal Towers, consisting of the East and the West Tower, both linked together by the Royal Bridge Suite. It is complemented by the Aquaventure water park and the locally popular Nasimi Beach which frequently plays host to concerts and other events.</p>

<form action="dbconnection.php" method="post" class="login" id="form1">
<fieldset>
<legend>LOGIN</legend>
<pre>
<?php 
if(isset($_GET['valid']))
{
echo "<strong>ENTER VALID USERID AND PASSWORD<strong><br/>";
}?>
USER ID:  <input id="userid" type="text" name="userid" autofocus/><br/>
PASSWORD: <input id="pwd" type="password" name="password"/><br/>

<input type="submit" value="LOGIN" id="submitform">
</pre>
<h5><a href="forgotpwd.php">FORGOT PASSWORD</a></h5>
<p class="clear">  </p>
</fieldset>

<br/>
<a href="adminlogin.php">ADMINISTRATOR LOGIN</a>
</form>
<p class="clear">  </p>
</content>
<p class="clear">  </p>


<p class="clear"> </p>

</div>

<p class="clear"> </p>
</div>
<br/>
<br/>
<br/>
<br/>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>