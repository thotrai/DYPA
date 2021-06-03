<!DOCTYPE html>
<html>
<head>
	<title>I Need a Doctor!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background:url('images/3.jpg') no-repeat; background-size:auto; height:300px;)"></div>
<div class="container-fluid">
<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff; border-color:">Patients</a>
			<a href="symptoms.php" class="list-group-item">Disease Search</a>
		</div>
		<hr>
	</div>
	<div class="col-md-8">
		<div class="card">
		<div class="card-body" style="background-color:#3498DB; color:#ffffff;">Book an Appointment
		</div>
			<div class="card-body">
				<form class="form-group" action="functions.php" method="post">
					<label>First Name: </label>
					<input type="text" name="fname" class="form-control"><br>
					<label>Last Name: </label>
					<input type="text" name="lname" class="form-control"><br>
					<label>Email id: </label>
					<input type="text" name="email" class="form-control"><br>
					<label>Contact: </label>
					<input type="text" name="contact" class="form-control"><br>
					
					<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
				</form>
			</div>
		</div>
	</div>
	
<div class="col-md-1"></div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>