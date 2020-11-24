<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
	mysqli_query($con_bd, "DELETE FROM projects WHERE id='{$_GET["id2"]}'");
	header("Location: acc.php");
 ?>