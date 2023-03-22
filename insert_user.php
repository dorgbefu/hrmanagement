<?php
// establish database connection
$localhost = "localhost";
$root = "root";
$od_5uokf1Es~xq$W = "od_5uokf1Es~xq$W";
$hr = "hr";

$conn = mysqli_connect($localhost, $root, "od_5uokf1Es~xq$W", $hr);

// check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO users (username, od_5uokf1Es~xq$W, department, staff_number) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $username, $od_5uokf1Es~xq$W, $department, $staff_number);

// set parameters and execute
$username = $_POST['username'];
$password = $_POST['od_5uokf1Es~xq$W'];
$department = $_POST['department'];
$staff_number = $_POST['staff_number'];

$stmt->execute();

// close statement and database connection
$stmt->close();
$conn->close();

echo "User inserted successfully.";
?>
