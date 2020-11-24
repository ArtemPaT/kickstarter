<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="col-8 mx-auto" style="height: 500px;">
		<div class="col-8 mx-auto">
			<img src="logo.png" class="w-50">
			<form method="GET" action="insert.php">
				<input name="title" class="form-control mt-1" placeholder="Заголовок"></input>
				<textarea name="text" class="form-control mt-1" placeholder="Описание"></textarea>
				<input name="money" class="form-control mt-1" placeholder="Сумма"></input>
				<input name="img" class="form-control mt-1" placeholder="Обложка"></input>
				<input name="place" class="form-control mt-1" placeholder="Город"></input>
				<input name="user" class="form-control mt-1" placeholder="User"></input>
				<button class="btn btn-success mt-1">Добавить</button>
			</form>
		</div>
	</div>
	<div class="col-10 mx-auto">
		<h3>My projects</h3>
		<h3 class="text-center ">Nikos Pastras</h3>
		<div class="row mt-5">

			<!--Вывести сами проекты здесь-->
			<?php 
				$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
				$con_table = mysqli_query($con_bd, "SELECT * FROM projects WHERE user = 'Nikos Pastras'");
				$table_count = mysqli_num_rows($con_table);
				for ($i=0; $i < $table_count; $i++) { 
					$result = $con_table -> fetch_assoc();
			 ?>
				 <div class="col-4 border mt-3">
					 <div style="background-image: url('<?php echo $result["img"] ?>') ; background-size: cover; background-position: center; height: 300px">
					 		
					 </div><br>
					 <h5><?php echo $result["title"]; ?></h5>
					 <p><?php echo $result["description"]; ?></p><br><br>
					 <p>by <?php echo $result["user"]; ?>, <?php echo $result["place"]; ?></p>
					 <span><?php echo $result["goal"]; ?>$ Goal</span>
					 <p class="text-success"><?php echo $result["donated"]; ?>$ pledged</p>
					 <div class="row">
					 	 <form class="ml-3" action="update.php" method="GET">
						 	<button class="btn btn-success">update</button>
						 	<input type="" name="id1" style="display: none;" value="<?php echo $result["id"] ?>">
						 </form>
						 <form class="ml-3" action="delete.php" method="GET">
						 	<button class="btn btn-danger">delete</button>
						 	<input type="" name="id2" style="display: none;" value="<?php echo $result["id"] ?>">
						 </form>
					 </div>
					 
				 </div>
			<?php } ?>
		</div>
	</div>
</body>
</html>