<?php
require_once("dbConnection.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

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
        $sql = "SELECT * FROM users WHERE (username = ? OR email = ? OR contact_number = ?) AND password = ?";
        $stmt = $mysqli->prepare($sql);
        // $stmt->bind_param("ss", $username, $password);
        $stmt->bind_param("ssss", $username, $username, $username, $password);

        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
              $row = $result->fetch_assoc();
              // Store user details in session
              $_SESSION['user_id'] = $row['user_id']; // Assuming 'user_id' is the primary key of your 'users' table
              $_SESSION['idd'] = $row['id']; // Assuming 'user_id' is the primary key of your 'users' table
              $_SESSION['username'] = $row['username'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['contact_number'] = $row['contact_number'];
              $_SESSION['is_login'] =true;
              $_SESSION['role']=$row['role'];
              $_SESSION['current_balance']=$row['current_balance'];
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
