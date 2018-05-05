<?php session_start();?>
<html>
<head>
<meta charset="UTF-8">	
<title>BOOKING</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="content">
<?php require_once("includes/connection.php");
require_once("includes/navmenu.php");

?>

<?php
if(mysqli_query($connection,"update room 
						set guestid={$_SESSION['userid']},
						check_in_date={$_GET['check_in_date']},
						check_out_date={$_GET['check_out_date']},
						status='booked'
						where roomno='{$_SESSION['roomno']}'
")){
	echo "<h2>ROOM SUCCESSFULLY BOOKED</h2>";
	header("refresh:1;url=dbconnection.php");
}
?>
</div>
</body>
</html>