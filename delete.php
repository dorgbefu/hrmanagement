<?php
// Connect to the database
$localhost = "localhost";
$root = "root";
$password = "";
$hr = "hr";

$conn = mysqli_connect($localhost, $root, "", $hr);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get employee number from form submission
$employeeNo = $_POST['employeeNo'];

// Prepare and execute the delete statement
$stmt = mysqli_prepare($conn, "DELETE FROM employee WHERE employeeNo = ?");
mysqli_stmt_bind_param($stmt, "i", $employeeNo);
mysqli_stmt_execute($stmt);

// Check for errors and redirect back to the home page
if (mysqli_errno($conn)) {
    echo "Error deleting record: " . mysqli_error($conn);
} else {
    header("Location: home.php");
}

// Close the database connection
mysqli_close($conn);
?>
