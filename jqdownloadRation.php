<?php
require_once("dbConnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rid = $_POST['rid'];
    $user_id = $_POST['d_user_id'];
    $sql = "INSERT INTO ration_download (ration_id, user_id) VALUES ('$rid', '$user_id')";
    if ($mysqli->query($sql) === TRUE) {
        echo "User information inserted successfully.";
    } else {
        echo "Error inserting user information: " . $mysqli->error;
    }
}

$current_balance = 0;
$sql = "SELECT current_balance FROM wallet where user_id='$user_id' order by id desc limit 0,1";
$result = $mysqli->query($sql);
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
             $current_balance = $row["current_balance"]; // Store the current_balance value
        }
    } else {
        echo "No records found.";
    }
} else {
    echo "Error executing query: " . $mysqli->error;
}



$rid = $_POST['rid'];
$user_id = $_POST['d_user_id'];
$used = 100;
$service = 'ration';
$amt_type = 'dr';
$details = $rid;
$prev_balance = isset($current_balance) ? $current_balance : 0;
$Tcurrent_balance=$current_balance-100;


 $sql = "INSERT INTO wallet (user_id, used, service, amt_type, details,prev_balance,current_balance) VALUES ('$user_id', '$used', '$service', '$amt_type', '$details','$prev_balance','$Tcurrent_balance')";
if ($mysqli->query($sql) === TRUE) {
    echo "User information inserted successfully.";
} else {
    echo "Error inserting record: " . $mysqli->error;
}


  $sql = "UPDATE users SET current_balance = '$Tcurrent_balance' WHERE id = '$user_id'";
if ($mysqli->query($sql) === TRUE) {
    echo "Current balance updated successfully.";
} else {
    echo "Error updating current balance: " . $mysqli->error;
}
?>
