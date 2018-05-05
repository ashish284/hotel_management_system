<?php
require("constant.php"); 
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if(!$connection){
		die("connect error: ".mysqli_connect_error());
	}
?>