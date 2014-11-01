<?php
session_start();
if(!session_is_registered(myusername)){
header("location:login.php");
}
?>

<html>
<body>
	Login Successful. Welcome <?php echo $_SESSION["username"];
	?>
	<a href="logout.php">Logout</a>

</body>
</html>