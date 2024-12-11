<?php
require_once("dbConnection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $janpad = $_POST['Janpad'];
    $DrivePath = $_POST['DrivePath'];
    $rid = $_POST['rid'];
     

       $sql = "UPDATE ration_req SET 
        ration='$ration_no', 
        town='$town', 
        mukhiya='$mukhiya', 
        father='$father', 
        cast_certificate='$cast_certificate', 
        adhar='$adhar', 
        address='$address', 
        gas_connection_no='$gas_connection_no', 
        dukan_no='$dukan_no', 
        unit='$unit',
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
