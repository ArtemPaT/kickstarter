<?php 
	$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
	mysqli_query($con_bd, "INSERT INTO projects (title, description, goal, img, user, place) VALUES ('{$_GET["title"]}', '{$_GET["text"]}','{$_GET["money"]}','{$_GET["img"]}','{$_GET["user"]}','{$_GET["place"]}')");
	header("Location: acc.php");
 ?>