<?php
include 'connect.php';
$title = "Online Movie Database Management System";
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?> | Login</title>
</head>
<body>
	<form method="post" action="checklogin.php">
		<input name="username" placeholder="username">
		<input name="password" placeholder="password">
		<input type="submit">
	</form>
</body>
</html>