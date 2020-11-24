<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
		$con_table = mysqli_query($con_bd, "SELECT * FROM projects WHERE id = '{$_GET["id1"]}'");
		$result = $con_table -> fetch_assoc();
	?>
	<div class="col-8 mx-auto">
		<h3 class="text-center">Редактировать запись</h3>
		<form method="GET" action="upd.php">
			<input type="" name="id" style="display: none;" value="<?php echo $result["id"] ?>">
			<input type="" name="user" class="form-control mt-1" value="<?php echo $result["user"] ?>">
			<input type="" name="title" class="form-control mt-1" value="<?php echo $result["title"] ?>">
			<input type="" name="goal" class="form-control mt-1" value="<?php echo $result["goal"] ?>">
			<input type="" name="img" class="form-control mt-1" value="<?php echo $result["img"] ?>">
			<button class="btn btn-success mt-1">Редактировать</button>
		</form>
	</div>
</body>
</html>