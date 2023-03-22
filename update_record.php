<!DOCTYPE html>
<html>
<head>
	<title>HR Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>HR Management System</h1>
	<h2>Edit Employee Record</h2>
	<form action="update.php" method="post">
		<label for="employeeNo">Employee Number:</label><br>
		<input type="text" id="employeeNo" name="employeeNo"><br>

		<label for="firstName">First Name:</label><br>
		<input type="text" id="firstName" name="firstName"><br>

		<label for="lastName">Last Name:</label><br>
		<input type="text" id="lastName" name="lastName"><br>

		<input type="submit" value="Update">
	</form>
</body>
</html>
