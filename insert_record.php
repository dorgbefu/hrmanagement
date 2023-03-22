<!DOCTYPE html>
<html>
<head>
	<title>Insert Employee Record</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
		form {
			width: 50%;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px #ccc;
			background-color: #f5f5f5;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"],
		input[type="email"],
		input[type="date"],
		input[type="number"],
		select {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
			box-sizing: border-box;
			font-size: 16px;
			font-family: inherit;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
<body>
	<div class="container">
		<center><h1>Insert Employee Record</h1></center>
		<form method="post" action="insert.php">
			<label for="employeeNo">Employee No:</label>
			<input type="text" id="employeeNo" name="employeeNo"><br>

			<label for="title">Title:</label>
			<input type="text" id="title" name="title"><br>

			<label for="firstName">First Name:</label>
			<input type="text" id="firstName" name="firstName"><br>

			<label for="middleName">Middle Name:</label>
			<input type="text" id="middleName" name="middleName"><br>

			<label for="lastName">Last Name:</label>
			<input type="text" id="lastName" name="lastName"><br>

			<label for="address">Address:</label>
			<input type="text" id="address" name="address"><br>

			<label for="workTelExt">Work Tel Ext:</label>
			<input type="text" id="workTelExt" name="workTelExt"><br>

			<label for="homeTelNo">Home Tel No:</label>
			<input type="text" id="homeTelNo" name="homeTelNo"><br>

			<label for="empEmailAddress">Email Address:</label>
			<input type="email" id="empEmailAddress" name="empEmailAddress"><br>

			<label for="socialSecurityNumber">Social Security No:</label>
			<input type="text" id="socialSecurityNumber" name="socialSecurityNumber"><br>

			<label for="DOB">Date of Birth:</label>
			<input type="date" id="DOB" name="DOB"><br>

			<label for="position">Position:</label>
			<input type="text" id="position" name="position"><br>

			<label for="sex">Sex:</label>
			<input type="radio" id="sex" name="sex" value="M"> Male
			<input type="radio" id="sex" name="sex" value="F"> Female<br>

			<label for="salary">Salary:</label>
			<input type="text" id="salary" name="salary"><br>

			<label for="dateStarted">Date Started:</label>
			<input type="date" id="dateStarted" name="dateStarted"><br>

			<label for="dateLeft">Date Left:</label>
			<input type="date" id="dateLeft" name="dateLeft"><br>

			<label for="departmentNo">Department No:</label>
			<input type="text" id="departmentNo" name="departmentNo"><br>

			<label for="supervisorEmployeeNo">Supervisor Employee No:</label>
			<input type="text" id="supervisorEmployeeNo" name="supervisorEmployeeNo"><br>

			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>
