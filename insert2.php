<?php
// Connect to the database
$localhost = "localhost";
$root = "root";
$password = "";
$hr = "hr";

$conn = mysqli_connect($localhost, $root, "", $hr);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert record
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$department = $_POST['department'];
	$staffNumber = $_POST['staffNumber'];

	$sql = "INSERT INTO login (username, password, department, staffNumber) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "sssi", $username, $password, $department, $staffNumber);
	if (mysqli_stmt_execute($stmt)) {
		echo "Record inserted successfully!";
	} else {
		echo "Error inserting record: " . mysqli_error($conn);
	}
	mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>
