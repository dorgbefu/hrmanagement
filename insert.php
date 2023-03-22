<?php
// Database connection settings
$localhost = "localhost";
$root = "root";
$password = "";
$hr = "hr";

// Create connection
$conn = mysqli_connect($localhost, $root, "", $hr);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get values from the form
$employeeNo = $_POST["employeeNo"];
$title = $_POST["title"];
$firstName = $_POST["firstName"];
$middleName = $_POST["middleName"];
$lastName = $_POST["lastName"];
$address = $_POST["address"];
$workTelExt = $_POST["workTelExt"];
$homeTelNo = $_POST["homeTelNo"];
$empEmailAddress = $_POST["empEmailAddress"];
$socialSecurityNumber = $_POST["socialSecurityNumber"];
$DOB = $_POST["DOB"];
$position = $_POST["position"];
$sex = $_POST["sex"];
$salary = $_POST["salary"];
$dateStarted = $_POST["dateStarted"];
$dateLeft = $_POST["dateLeft"];
$departmentNo = $_POST["departmentNo"];
$supervisorEmployeeNo = $_POST["supervisorEmployeeNo"];

// Prepare and bind the SQL statement
$stmt = mysqli_prepare($conn, "INSERT INTO employee (employeeNo, title, firstName, middleName, lastName, address, workTelExt, homeTelNo, empEmailAddress, socialSecurityNumber, DOB, position, sex, salary, dateStarted, dateLeft, departmentNo, supervisorEmployeeNo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssssssssssssssssss", $employeeNo, $title, $firstName, $middleName, $lastName, $address, $workTelExt, $homeTelNo, $empEmailAddress, $socialSecurityNumber, $DOB, $position, $sex, $salary, $dateStarted, $dateLeft, $departmentNo, $supervisorEmployeeNo);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
  echo "New record inserted successfully!";
} else {
  echo "Error: " . mysqli_error($conn);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
