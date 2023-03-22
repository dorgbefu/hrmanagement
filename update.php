<?php
// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$database = "hr";
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
	die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form
$employeeNo = $_POST['employeeNo'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

// Prepare and bind the update statement
$stmt = mysqli_prepare($conn, "UPDATE employee SET firstName=?, lastName=? WHERE employeeNo=?");
mysqli_stmt_bind_param($stmt, "sss", $firstName, $lastName, $employeeNo);

// Execute the update statement
if (mysqli_stmt_execute($stmt)) {
	echo "Record updated successfully";
} else {
	echo "Error updating record: " . mysqli_error($conn);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
