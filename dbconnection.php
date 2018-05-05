<?php session_start();?>
<html>
<head>
<title>ROOM AVAILABILITY</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="main.css" />
<meta charset="UTF-8"/>

</head>
<body >
<div class="content">
<h1 id="center">HOTEL ATLANTIS, THE PALM</h1>
<?php 

$temp=0;
require_once("includes/connection.php");
 if(isset($_POST['userid'])){
	$result=mysqli_query($connection,
	"select * 
	from registereduser 
	where uid={$_POST['userid']} and password='{$_POST['password']}'");
	if(mysqli_num_rows($result)==0){
		$temp=1;
		header("refresh:1;url=index.php?");
	}
	else{
		$temp=0;
		$_SESSION['userid']=$_POST['userid'];
		
	}
}

if(isset($_SESSION['userid'])){
echo'
<nav >
<ul class="nav nav-pills nav-justified">
<li ><a href="galary.php" >GALARY</a></li>

<li ><a href="search.php" >SEARCH</a></li>
<li class="active"><a href="dbconnection.php" >VIEW HOTEL</a></li>
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
<li class="active"><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}
if($temp==1)
	echo"<h3>ENTER VALID USERID AND PASSWORD</h3>"
?>

<?php 
	if(isset($_SESSION['userid'])){
	$room_set=mysqli_query($connection,"select roomno,type,rate,status,facility from room");
	
	if(!mysqli_num_rows($room_set)){
		echo "nothing to display";
	}
	else {
		echo "<br/> <table class='table table-responsive table-striped table-bordered table-hover ' > <tr><th><strong>ROOM NO</strong></th> 
							<th><strong>TYPE</strong>  </th>
							<th><strong>RATE</strong>  </th>
							<th><strong>STATUS</strong></th>
							<th><strong>FACILITY</strong></th>
							<th>IMAGE</th>
							</tr>";
		while($row=mysqli_fetch_assoc($room_set)){
			$type=strtoupper($row['type']);
			$facility=strtoupper($row['facility']);
			$status=strtoupper($row['status']);
			if($row['status']=="not booked"){
				if($row['type']=="double bed")
					$src="images/double.jpg";
				else
					$src="images/single.jpg";
				echo "<tr> <td>{$row['roomno']}</td>
					   <td>{$type}</td> 
					   <td>{$row['rate']}</td> 
					   <td><a href='booknow.php?rno={$row['roomno']}'>BOOK NOW!!</a></td>
					   <td>{$facility}</td>
					   <td><img alt='doubleroom' width='160' height='100' src='{$src}' class='img-responsive'/></td>
					   </tr>";
					   
			}
			else{
				if($row['type']=="double bed")
					$src="images/double.jpg";
				else
					$src="images/single.jpg";
				echo "<tr> <td>{$row['roomno']}</td>
					   <td>{$type}</td> 
					   <td>{$row['rate']}</td> 
					   <td>{$status}</td>
						<td>{$facility}</td>
					<td><img alt='doubleroom' width='160' height='100' src='{$src}'/></td>
					   </tr>";
			}
		}
		echo"<a href='cancel.php' class='btn btn-primary'>CANCEL BOOKING</a><br/><br/>";
		
		
	}
	
	}
?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>