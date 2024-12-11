<?php
require_once("dbConnection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ration_no = $_POST['ration_no'];
    $mukhiya = $_POST['mukhiya']; 
    $janpad = $_POST['Janpad'];
    $DrivePath = $_POST['DrivePath'];
    $rid = $_POST['rid'];
       $sql = "UPDATE ration_req SET 
        ration='$ration_no', 
        mukhiya='$mukhiya', 
        janpad='$janpad',
        pdf_path='$DrivePath'
        WHERE id=$rid";
    if ($mysqli->query($sql) === TRUE) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information: " . $mysqli->error;
    }
}
$mysqli->close();
?>
