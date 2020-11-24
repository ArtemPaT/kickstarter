<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
	$con_table = mysqli_query($con_bd, "SELECT * FROM projects WHERE id = '{$_GET["id"]}'");
	$result = $con_table -> fetch_assoc();
	$res = $result["donated"] + $_GET["donated"];
	mysqli_query($con_bd, "UPDATE projects SET donated = '{$res}' WHERE id = '{$_GET["id"]}'");
	header("Location: index.php");
 ?>