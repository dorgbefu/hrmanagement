<!DOCTYPE html>
<html>
<head>
	<title>Insert User</title>
	<style>
	body {
	margin: 0;
	padding: 0;
	background-color: #f2f2f2;
	font-family: Arial, sans-serif;
}

h2 {
	margin-top: 20px;
	text-align: center;
}

form {
	margin: 0 auto;
	width: 500px;
	background-color: #fff;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

label {
	display: inline-block;
	width: 150px;
	text-align: right;
	margin-right: 10px;
}

input[type=text], input[type=password] {
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
	width: 50%;
	margin-bottom: 15px;
}

input[type=submit] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #3e8e41;
}
	</style>
</head>
<body>
	<h2>Insert User</h2>
	<form action="insert_user.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" name="username" required>
		<label for="password">Password:</label>
		<input type="password" name="password" required>
		<label for="department">Department:</label>
		<input type="text" name="department" required>
		<label for="staff_number">Staff Number:</label>
		<input type="text" name="staff_number" required><br><br>
		<center><input type="submit" value="Insert User"></center>
        <p>Alredy have an account? <a href="login.php">Login Here</a></p>
	</form>
</body>
</html>
