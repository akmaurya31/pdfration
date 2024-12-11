<?php
require_once("dbConnection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ration_no = $_POST['ration_no'];
    $mukhiya = $_POST['mukhiya']; 
    $janpad = $_POST['Janpad'];
    $DrivePath = $_POST['DrivePath'];
    $DrivePath1=getGoogleDriveDownloadLinkWithoutRegex($DrivePath);

    $rid = $_POST['rid'];
       $sql = "UPDATE ration_req SET 
        ration='$ration_no', 
        janpad='$janpad',
        pdf_path='$DrivePath1'
        WHERE id=$rid";
    if ($mysqli->query($sql) === TRUE) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information: " . $mysqli->error;
    }
}
$mysqli->close();

function getGoogleDriveDownloadLinkWithoutRegex($inputLink) {
    $parts = explode('/', $inputLink);
    if (isset($parts[5])) {
        $fileId = $parts[5];
        return "https://drive.usercontent.google.com/u/0/uc?id=" . $fileId . "&export=download";
    } else {
        return "Invalid Google Drive link. File ID not found.";
    }
}
?>
