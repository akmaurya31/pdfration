<?php
require_once("dbConnection.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Perform validation (you might want to do more robust validation)
    if (!empty($username) && !empty($password)) {
        // Connect to the MySQL database
        // $mysqli = new mysqli("localhost", "username", "password", "database_name");

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Prepare and execute the SQL statement
        // $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $sql = "SELECT * FROM users WHERE (email = '$username' OR mobile = '$username') AND password = '$password'";
        $stmt = $mysqli->prepare($sql);
        // $stmt->bind_param("ss", $username, $password);
        // $stmt->bind_param("ssss", $username, $username, $password);

        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
              $row = $result->fetch_assoc();
              // Store user details in session
              $_SESSION['idd'] = trim($row['id']); // Assuming 'id' is another field in your 'users' table
              $_SESSION['email'] = trim($row['email']);
              $_SESSION['mobile'] = trim($row['mobile']);
              $_SESSION['city'] = trim($row['city']);
              $_SESSION['state'] = trim($row['state']);
              $_SESSION['yourbusiness'] = trim($row['yourbusiness']);
              $_SESSION['role'] = trim($row['role']);
              $_SESSION['is_login'] = true;
              $stmt->close();
            // echo "User logged in successfully!";

              header("Location: pay.php");
              exit;
            // Do something with the user data

        } else {
            // User does not exist or password is incorrect
            echo "Incorrect username or password.";
        }

        // Close the statement
        $stmt->close();

        // Close the database connection
        $mysqli->close();
    } else {
        echo "Please enter both username and password.";
    }
}
?>
