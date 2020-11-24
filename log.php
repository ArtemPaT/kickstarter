<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
	$con_table = mysqli_query($con_bd, "SELECT * FROM projects WHERE user = '{$_POST["user"]}' AND password = '{$_POST["password"]}'");
	$result = $con_table -> fetch_assoc();
	if ($result["user"] == null) {
		header('Location: authorization.php?message=wrond password or username');
	}
	else {
		header('Location: acc.php?name={$result["user"]}');
	}
 ?>