<?php
require_once("dbConnection.php");

// Start the session
session_start();
// Retrieve data from the session
$ration_no = $_POST['ration_no'];
$town = $_POST['town'];
$mukhiya = $_POST['mukhiya'];
$father = $_POST['father'];
$cast_certificate = $_POST['cast_certificate'];
$adhar = $_POST['adhar'];
$address = $_POST['address'];
$gas_connection_no = $_POST['gas_connection_no'];
$dukan_no = $_POST['dukan_no'];
$unit = $_POST['unit'];


    $current_datetime = date("Y-m-d H:i:s");

    $current_datetime = date("Y-m-d H:i:s");
    $sql = "INSERT INTO information (ration_no, town, mukhiya, father, cast_certificate, adhar, address, gas_connection_no, dukan_no, unit, date) VALUES ('$ration_no', '$town', '$mukhiya', '$father', '$cast_certificate', '$adhar', '$address', '$gas_connection_no', '$dukan_no', '$unit', '$current_datetime')";
    
    $stmt = $mysqli->prepare($sql);
    if ($stmt->execute())
     {
        echo "Ration Card save successfully!";
        header("Location: rationList.php");
    }
    else {echo "Error: " . $mysqli->error;}


    // Close the statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();
// } else {
//     echo "Please fill out all the fields.";
// }
?>
