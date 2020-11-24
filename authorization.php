<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="col-8 mx-auto text-center">
		<h1>authorization</h1>
		<form action="log.php" method="POST">
			<input class="form-control mt-1" name="user" placeholder="username"></input>
			<input class="form-control mt-1" name="password" placeholder="password"></input>
			<p class="text-danger"><?php echo $_GET["message"] ?></p>
			<button class="btn btn-success mt-1">войти</button>
		</form>
	</div>
</body>
</html>