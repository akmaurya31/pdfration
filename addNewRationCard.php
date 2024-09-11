<?php
require_once("dbConnection.php");

// Start the session
session_start();
// Retrieve data from the session
$name = $_POST['name'];
$ration = $_POST['ration'];
$adhar = $_POST['adhar'];
$janpad = $_POST['janpad'];

// Perform validation (you might want to do more robust validation)
// if (!empty($name) && !empty($email) && !empty($contact_number) && !empty($password)) {
    // Connect to the MySQL database
    // $mysqli = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    // if ($mysqli->connect_error) {
    //     die("Connection failed: " . $mysqli->connect_error);
    // }

    // Prepare and execute the SQL statement

    $ip_address = $_SERVER['REMOTE_ADDR'];
    $current_datetime = date("Y-m-d H:i:s");
    $sql = "INSERT INTO ration_req (name, ration, adhar,edate,ip,user_id,janpad) VALUES (?, ?, ?,?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssssss", $name, $ration, $adhar,$current_datetime,$ip_address,$_SESSION['idd'],$janpad);

    if ($stmt->execute()) {
        echo "Ration Card Request successfully!";
        header("Location: rationList.php");
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();
// } else {
//     echo "Please fill out all the fields.";
// }
?>
