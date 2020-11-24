<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	</style>
</head>
<body>
	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="acc.php" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php 
			$con_bd = mysqli_connect('127.0.0.1', 'root', '', 'kickstartetr');
			$con_table = mysqli_query($con_bd, 'SELECT * FROM projects');
			$table_count = mysqli_num_rows($con_table);
			for ($i=0; $i < $table_count; $i++) { 
				$result = $con_table -> fetch_assoc();
		 ?>
			 <div class="col-4 border mt-3">
				 <div style="background-image: url('<?php echo $result["img"] ?>') ; background-size: cover; background-position: center; height: 300px">
				 		
				 </div><br>
				 <h5><?php echo $result["title"]; ?></h5>
				 <p><?php echo $result["description"]; ?></p><br>
				 <p>by <?php echo $result["user"]; ?>, <?php echo $result["place"]; ?></p>
				 <div style="width: 250px; height: 6px;" class="bg-secondary">
				 	<div style="width: <?php echo $result["donated"] / $result["goal"] * 100; ?>%; height: 6px;" class="bg-success"></div>
				 </div>
				 <span><?php echo $result["goal"]; ?>$ Goal</span>
				 <p class="text-success"><?php echo $result["donated"]; ?>$ pledged</p>
				 <h5>Choose your donation's amount in dollars</h5>
				 <form method="GET" action="plus.php">
				 	<input type="" name="id" style="display: none;" value="<?php echo $result["id"] ?>">
				 	 <select name="donated">
					 	<option>10</option>
					 	<option>20</option>
					    <option>30</option>
					 </select>
				 	 <button class="btn-success ml-2">Donate</button>
				 </form>
			 </div>
		<?php } ?>
	</div>

</div>
</body>
</html>