<?php
require_once("dbConnection.php");

// Start the session
session_start();

// Retrieve data from the session
$name = $_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$password = $_POST['password'];
list($username, $domain) = explode("@", $email);
$username1 = $username.rand(1,9999);
// Perform validation (you might want to do more robust validation)
if (!empty($name) && !empty($email) && !empty($contact_number) && !empty($password)) {
    // Connect to the MySQL database
    // $mysqli = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    // if ($mysqli->connect_error) {
    //     die("Connection failed: " . $mysqli->connect_error);
    // }

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO users (name, email, contact_number, password,username) VALUES (?, ?, ?, ?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $contact_number, $password,$username1);

    if ($stmt->execute()) {
        echo "User registered successfully1!";
        header("Location: login.php");
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();
} else {
    echo "Please fill out all the fields.";
}
?>
