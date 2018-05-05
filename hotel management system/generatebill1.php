<?php
	session_start();
?>
<html>
<head>
<title>
Bill Generation
</title>
<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<div id="sidebar">
<h3 style="text-align: center; font-size:35px">Admin's Section</h3>
<ul>
<li><a  href="View_Employee_Record.php">View Employee Record</a></li>
<br>
<li><a  href="Update_Employee_Record.php">Update Employee Record</a></li>
<br>
<li><a  href="Add_New_Employee.php">Add new employee</a></li>
<br>
<li><a  href="Delete_Employee_Record.php">Delete Employee</a></li>
<br>
<li><a style="font-weight:bold" href="Generate Bill.php">Generate Bill</a></li>
</div>
<div id="content">
<?php 
require_once("connection.php");
if(!$_GET['room_no']){
	header("Location:Generate Bill.php");}
$sql="select rate from room where roomno={$_GET['room_no']}";
$sql1="select uname from registereduser as ru,room as r where ru.uid=r.guestid";
$result=mysqli_query($con,$sql);
$name=mysqli_query($con,$sql1);
if(mysqli_num_rows($name)>0)
{$namer=mysqli_fetch_assoc($name);
$n=$namer["uname"];}
if(mysqli_num_rows($result)>0){
	$rate=mysqli_fetch_assoc($result);
	$r=$rate["rate"];
}
$_SESSION["name"]=$n;
$_SESSION["bill"]=$r*1.11;
$_SESSION["roomno"]=$_GET["room_no"];
if($result && $name){
?>
<h2>Bill of Mr/Ms. <?php echo $n?> </h2>
<br>
<h3>Room No. : <?php echo $_GET['room_no']?> </h3>
<br>
<h3>Rate of room : <?php echo $r?></h3>
<br>
<h3>VAT : 11%</h3> 
<br>
<h3>Bill : Rs <?php echo $r*1.11?>/-</h3> 
<br>
Want to provide discount?
<form action="message.php">
<br>
<br>
<input type="submit" id="submitid2" name="submit" value="Generate Discount">
</form>
<form action="message1.php">
<input id="submitid2" type="submit" name="submit" value="GENERATE BILL">
</form>

<?php
$sql3="update room set status='not booked' where roomno={$_GET["room_no"]}";
$result2=mysqli_query($con,$sql3);

}
else 
	echo "Error Occured.".mysqli_error($con);
?>

</div>
</body>
</html> 