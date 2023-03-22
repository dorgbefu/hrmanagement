<!DOCTYPE html>
<html>
<head>
	<title>HR Management System</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin-top: 50px;
		}
		.btn {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 14px 24px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px;
			cursor: pointer;
			border-radius: 5px;
			transition: all 0.3s ease;
		}
		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>HR Management System</h1>
	<div class="container">
		<a href="insert_record.php" class="btn">Insert Record</a>
		<a href="retrieve_record.php" class="btn">Retrieve Record</a>
		<a href="update_record.php" class="btn">Update Record</a>
		<a href="delete_record.php" class="btn">Delete Record</a>
	</div>
</body>
</html>
