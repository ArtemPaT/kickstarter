<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
	mysqli_query($con_bd, "UPDATE projects SET user = '{$_GET["user"]}', title = '{$_GET["title"]}', goal = '{$_GET["goal"]}', img = '{$_GET["img"]}' WHERE id = '{$_GET["id"]}'");
	header("Location: acc.php");
 ?>