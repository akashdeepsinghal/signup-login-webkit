<?php
include 'connect.php';
$title = "Online Movie Database Management System";
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?> | Signup</title>
</head>
<body>
	<form method="post" action="register.php">
		<input name="username" placeholder="username">
		<input name="password" placeholder="password">
		<input type="submit">
	</form>
</body>
</html>