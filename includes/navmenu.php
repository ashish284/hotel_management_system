<?php
if(isset($_SESSION['userid'])){
echo'
<nav id="main">
<ul class="menu">
<li ><a href="galary.php" >GALARY</a></li>

<li ><a href="search.php" >SEARCH</a></li>
<li ><a href="dbconnection1.php" >VIEW HOTEL</a></li>
<li ><a href="logout.php" >LOGOUT</a></li>
</ul>

</nav>';
}
else{
echo'
<nav id="main">
<ul class="menu">
<li><a href="index.php">HOME</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="search.php">SEARCH</a></li>
<li><a href="dbconnection1.php">VIEW HOTEL</a></li>
</ul>

</nav>';
}
?>