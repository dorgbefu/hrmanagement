<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stylel.css">
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form method="post" action="login1.php">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" required>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" required><br><br><br>
			<input type="submit" value="Login">
            <p>Don't have an account? <a href="create.php">Register Here</a></p>
		</form>
	</div>
</body>
</html>


