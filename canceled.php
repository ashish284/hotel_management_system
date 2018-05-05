<?php session_start();?>
<html>
<head>
</head>
<body>
<?php require_once("includes/connection.php");
print_r($_SESSION);?>
<?php 

	$room_set=mysqli_query($connection,"update room set status='not booked',guestid=null,check_in_date=null,check_out_date=null where roomno={$_GET['roomno']}");
	header("location:cancel.php");
	
	
?>
</body>
</html>