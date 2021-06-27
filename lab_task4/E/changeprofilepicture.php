<?php 

session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
	echo "<h2>Change Profile Picture</h2>";
	echo "<br><a href='file.php'>Choose file</a>";
	
	echo "<br><a href='welcome.php'>back to welcome</a>";
}

else{
	header("location:login.php");
}

 ?>