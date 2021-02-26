<?php
// create a connection to database

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testMIT";

	// create connection

	$conn = new mysqli($servername,$username,$password,$dbname);

// 	// check if is connect

// 	if ($conn->connect_error) {
// 		# code...
// 		die("connection failed: " . $conn->connect_error);
// 	}
// 	echo "Connected successfully"."<br>";

// 	// create database
// 	$sql = "CREATE DATABASE testMIT";
// 	// check if db created
// 	if ($conn->query($sql) === TRUE) {
// 		# code...
// 		echo "Database created successfully";
// 	} else {
// 		echo "Error creating database: " . $conn->error;
// 	}

// create new table
	// $sql = 'CREATE TABLE staff (
	// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// firstname VARCHAR(30) NOT NULL,
	// lastname VARCHAR(30) NOT NULL,
	// email VARCHAR(50),
	// phone_number INT(50) NOT NULL,
	// gender VARCHAR (10)
	// 	)';

	// if ($conn->query($sql) === TRUE) {
	// 	# code...
	// 	echo "Table created";
	// } else {
	// 	echo "connect_error :" . $conn->error;
	// }

	$sql = 'INSERT INTO students (firstname,lastname,email,admission_number)
	VALUES ("Victor","Ngigi","victorngigi@gmail.com",001)';
	if ($conn->query($sql) === TRUE){
		echo "Data inserted";
	} else {
		echo "Insert Failed :" . $conn->error;
	}
	$conn->close();
 ?>
