<?php
session_start(); // start session to store user data

// check if user has submitted login form
if (isset($_POST['submit'])) {
    // get username and password from form submission
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // connect to database
    $localhost = "localhost";
    $root = "root";
    $pass = "";
    $hr = "hr";
    $conn = mysqli_connect($localhost, $root, "", $hr);
    
    // query the database for user with provided username and password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    // check if there is a match for the provided username and password
    if (mysqli_num_rows($result) == 1) {
        // set session variables to store user data
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        
        // redirect user to home page
        header("Location: home.php");
        exit;
    } else {
        // if there is no match, display error message
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css">
</head>
<style>

.login-container {
  width: 400px;
  margin: 0 auto;
  margin-top: 50px;
  padding: 20px;
  border: 1px solid #ccc;
  background-color: #fff;
  box-shadow: 0 0 10px #ccc;
}

.login-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input {
  display: block;
  width: 90%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.error {
  color: #f00;
  margin-bottom: 10px;
}


  </style>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
        // display error message if there is one
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" name="submit">Login</button>
            <p>Don't have an account? <a href="create.php">Register Here</a></p>
        </form>
    </div>
</body>
</html>
