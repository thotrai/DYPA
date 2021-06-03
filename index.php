<!DOCTYPE html>
<html>
<head>
	<title>I Need a Doctor!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style type="text/css">
	#ab1:hover{cursor:pointer;}
</style>

<body style="background:url('images/1.jpg') no-repeat; background-size:cover;">
<div class="container" style="width:400px; margin-top:100px">

<label><b>I Need a Doctor!</b></label><br>

<div class="card">
<img src="images/2.jpg" class="card-img-top">
<div class="card-body">
	<form class="form-group" action="functions.php" method="post">
		<label>Username: </label><br>
		<input type="text" name="username" class="form-control" placeholder="Enter username"><br>
		<label>Password: </label><br>
		<input type="password" name="password" class="form-control" placeholder="Enter password"><br>
		<input type="submit" name="login_submit" id="ab1" class="btn btn-primary"><br>
	</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>