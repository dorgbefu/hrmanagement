<?php
// Connect to the database
$localhost = "localhost";
$root = "root";
$password = "";
$hr = "hr";

$conn = new mysqli($localhost, $root, "", $hr);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve records from the database
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2>Employee Records</h2>

<table>
    <tr>
        <th>Employee No</th>
        <th>Title</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Work Tel Ext</th>
        <th>Home Tel No</th>
        <th>Email Address</th>
        <th>Social Security Number</th>
        <th>Date of Birth</th>
        <th>Position</th>
        <th>Sex</th>
        <th>Salary</th>
        <th>Date Started</th>
        <th>Date Left</th>
        <th>Department No</th>
        <th>Supervisor Employee No</th>
    </tr>

    <?php
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['employeeNo'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['middleName'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['workTelExt'] . "</td>";
        echo "<td>" . $row['homeTelNo'] . "</td>";
        echo "<td>" . $row['empEmailAddress'] . "</td>";
        echo "<td>" . $row['socialSecurityNumber'] . "</td>";
        echo "<td>" . $row['DOB'] . "</td>";
        echo "<td>" . $row['position'] . "</td>";
        echo "<td>" . $row['sex'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";
        echo "<td>" . $row['dateStarted'] . "</td>";
        echo "<td>" . $row['dateLeft'] . "</td>";
        echo "<td>" . $row['departmentNo'] . "</td>";
        echo "<td>" . $row['supervisorEmployeeNo'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
