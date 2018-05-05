<?php session_start();?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<div class="content">
<?php require_once("includes/connection.php");
if(isset($_SESSION['userid'])){
echo'
<nav >
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
<li><a href="register.php">REGISTER</a></li>
<li ><a href="search.php">SEARCH</a></li>
<li ><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}
?>
<?php 

	$room_set=mysqli_query($connection,"select roomno,type,rate,status from room where guestid={$_SESSION['userid']}");
	
	if(!mysqli_num_rows($room_set)){
		echo "<h3>YOU DID NOT BOOK ANY ROOM</h3>";
		header("refresh:1;url=dbconnection.php");
	}
	else {
		echo "<br/> <table ><tr><th><strong>ROOM NO</strong></th> 
							<th><strong>TYPE</strong>  </th>
							<th><strong>RATE</strong>  </th>
							<th><strong></strong></th></tr>";
		while($row=mysqli_fetch_assoc($room_set)){
			echo "<tr> <td>{$row['roomno']}</td>
					   <td>{$row['type']}</td> 
					   <td>{$row['rate']}</td> 
					   <td><a href='canceled.php?roomno={$row['roomno']}' class='btn btn-primary'>CANCEL</a></td></tr>";
					   
			
		}
		
		
	}
	
?>
<p class="clear">.</p>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>