<!DOCTYPE html>
<html>
<head>
	<title>New Login</title>
	
</head>
<body>
<?php 
include("connection.php");

if(isset($_POST['submit']))
{
	$user=mysqli_real_escape_string($mysqli, $_POST['username']);
}
?>
</body>
</html>