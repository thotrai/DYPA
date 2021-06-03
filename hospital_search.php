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
	
	body{
		background-image: url('images/3.jpg');
	}
	</style>
</head>
<body>
<?php
include("functions.php");
if(isset($_POST['patient_search_submit'])){
	$disease=$_POST['search'];
	$query="select * from hospital where disease='$disease'";
	$result=mysqli_query($con,$query);
	echo"<div class='container-fluid'>
	<div class'card'>
	<div class='card-body'><a href='symptoms.php' class='btn btn-light'>Back</a><div>
	<div class='card-body' style='background-color:#3498DB; color#ffffff;'>
	<table class='table table-hover'>
		<thead>
			<tr>
				<th>Hospital's Name</th>
				<th>Doctor's Name</th>
				<th>Specialty</th>
				<th>Diseases</th>
			</tr>
		</thead>
		<tbody>";
		
		$link_address1 = 'searchpage.php';
		while($row=mysqli_fetch_array($result)){
		$hospname=$row['hospname'];
		$docname=$row['docname'];
		$type=$row['type'];
		$disease=$row['disease'];
		echo "<tr>
			<td>$hospname</td>
			<td><u><a href='".$link_address1."'>$row[docname]</a></u></td>
			<td>$type</td>
			<td>$disease</td>
			</tr>";
	}
		echo"</tbody></table></div></div></div>";
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>