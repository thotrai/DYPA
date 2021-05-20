<!DOCTYPE html>
<?php include("functions.php");?>
<html>
<head>
	<title>I Need a Doctor!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
	a{
		color:#1a1a1a;
	}
	a:hover{
		color:white;
	}
	</style>
</head>
<body>
<div class="jumbotron" style="background:url('images/3.jpg') no-repeat; background-size:auto; height:300px;)"></div>
<div class="container">
<div class="card">
		<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
		<div class="row">
		<div class="col-md-3"><h3>Disease Search</h3></div>
			<div class="col-md-8">
				<form class="form-group" action="hospital_search.php" method="post">
					<div class="row">
					<div class="col-md-10">
						<select name="search" class="form-control">
							<option value="heart">Heart</option>
							<option value="lung">Lung</option>
							<option value="tooth">Tooth</option>
							<option value="pain">Pain</option>
							<option value="child">Child</option>
							<option value="bone">Bone</option>
						</select>
					</div>
					<div class="col-md-2">
						<input type="submit" name="patient_search_submit" class="btn btn-light" value="Search">
					</div>
					</div>				
				</form>
			</div>
		</div>
		</div>

<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
<table class="table table-hover">
<thead>
	<tr>
		<th>Hospital's Name</th>
		<th>Doctor's Name</th>
		<th>Speciality</th>
		<th>Diseases</th>
	</tr>
</thead>
<tbody>
	<?php doc_speciality(); ?>
	
</tbody>
</table>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>