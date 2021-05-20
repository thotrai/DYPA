<?php
$con=mysqli_connect("localhost","root","","edoctors");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from login where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1){
		header("Location: symptoms.php");
	}
	else{
		echo "<script>alert('Please enter correct details')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
if(isset($_POST['pat_submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$query="insert into appointment(fname, lname, email, contact)values('$fname','$lname','$email','$contact')";
	$result=mysqli_query($con,$query);
	if($result){
		echo "<script>alert('Appointment registered')</script>";
		echo "<script>window.open('symptoms.php','_self')</script>";
	}
}

function doc_speciality(){
	// Create connection
	$con2=mysqli_connect("localhost","root","","edoctors");
	$link_address1 = 'searchpage.php';
	// Check connection
	if (!$con2) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT hospname, docname, type, disease FROM hospital";
	$result = mysqli_query($con2, $sql);

	if (mysqli_num_rows($result) > 0) {
	// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
			<td>$row[hospname]</td>
			<td><u><a href='".$link_address1."'>$row[docname]</a></u></td>
			<td>$row[type]</td>
			<td>$row[disease]</td>
			</tr>";
		}
	} else {
		echo "0 results";
	}
}

function get_docname(){
	// Create connection
	$con3=mysqli_connect("localhost","root","","edoctors");
	// Check connection
	if (!$con3) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT id, hospname, docname, type, disease FROM hospital";
	$result = mysqli_query($con3, $sql);
	//...
}

?>
