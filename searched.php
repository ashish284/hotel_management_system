<?php session_start();?>
<html>
<head>
<title>SEARCH</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
<div class="content">
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
<br/>
<?php 
require_once("includes/connection.php");
if(isset($_SESSION['userid'])){
echo'
<nav >
<ul class="nav nav-pills nav-justified">
<li ><a href="galary.php" >GALARY</a></li>

<li class="active"><a href="search.php" >SEARCH</a></li>
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
<li class="active"><a href="search.php">SEARCH</a></li>
<li><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}
?>

<?php $sub=$_GET['subchoice'];?>

<?php

		if($_GET['subchoice']=="double bed" || $_GET['subchoice']=="single bed")
		{
		$room_set=mysqli_query($connection,"select roomno,type,rate,status,facility from room where status='not booked' and type='$sub'");
		
		}
		else if($_GET['subchoice']=="ac" || $_GET['subchoice']=="non ac"){
			$room_set=mysqli_query($connection,"select roomno,type,rate,status,facility from room where status='not booked' and facility='$sub' ");
		
			}
		else{
			$sub1=$sub+15000;
			
			$room_set=mysqli_query($connection,"select roomno,type,rate,status,facility from room where status='not booked' and rate>=$sub  and rate<$sub1");
		
		}
		
	if(!mysqli_num_rows($room_set)){
		echo "<h3>NOTHING TO DISPLAY</h3>".mysqli_error($connection);
	}
	else {
		echo "<br/> <table class='table table-responsive table-striped table-bordered table-hover ' > <tr><th><strong>ROOM NO</strong></th> 
								<th><strong>TYPE</strong>  </th>
								<th><strong>RATE</strong>  </th>
								<th><strong>STATUS</strong></th>
								<th><strong>FACILITIES<strong></th>
								
							</tr>";
		while($row=mysqli_fetch_assoc($room_set)){
			$type=strtoupper($row['type']);
			$facility=strtoupper($row['facility']);
			$status=strtoupper($row['status']);
				echo "<tr> <td>{$row['roomno']}</td>
					   <td>{$type}</td> 
					   <td>{$row['rate']}</td> 
					   <td><a href='booknow.php?rno={$row['roomno']}'>BOOK NOW</a></td>
					   <td>{$facility}</td></tr>";
					   
		}
	}

?>


<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>