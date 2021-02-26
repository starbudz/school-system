<!DOCTYPE html>
<html>
<head>
	<title>STUDENT REGISTER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<?php
// create a connection to database

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testMIT";

	$firstname = '';
	$lastname = '';
	$email = '';
	$admission_number = '';

	// create connection

	$conn = new mysqli($servername,$username,$password,$dbname);

	if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$admission_number = $_POST['admission_number'];



	$sql = "INSERT INTO students (firstname,lastname,email,admission_number)
	VALUES ('$firstname','$lastname','$email','$admission_number')";
	if ($conn->query($sql) === TRUE){
		echo "Data inserted";
	} else {
		echo "Insert Failed :" . $conn->error;
	}
}
	$conn->close();
 ?>
	<div class="container">
		<div class="mx-auto card form-login login" style="max-width: 600px;">
			<form action="students.php" method="post">
			<div class="card-header">
				<h3>REGISTER STUDENT</h3>
			</div>
			<div class="card-body">
				<div class="form-control form-row">
				<div class="col">
				<legend for="firstname">First Name</legend>
				<input type="text" name="firstname">
				</div>
				<div class="col">
				<legend for="lastname">Last Name</legend>
				<input type="text" name="lastname">	
				</div>	
				</div>
				<br>
				<div class="form-control form-row">
				<div class="col">
				<legend for="email">Email</legend>
				<input type="text" name="email">	
				</div>
				<div class="col">
				<legend for="admission_number">Admission</legend>
				<input type="text" name="admission_number">	
				</div>
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" name="submit" class="btn btn-warning">
			</div>
			</form>
		</div>
	</div>

</body>
</html>