<?php
include 'connect.php';
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword = md5($mypassword);


$sql="SELECT * FROM $tbl_name WHERE username='$myusername'";
// $sql = "INSERT ";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==0){
	$reg_sql = "INSERT INTO people (username, password) VALUES ('$myusername', '$mypassword')";
	if (mysql_query($reg_sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . mysql_error($conn);
	}
}
else {
	echo "User already exists";
}
?>