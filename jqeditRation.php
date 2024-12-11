<?php
require_once("dbConnection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ration_no = $_POST['ration_no'];
    $mukhiya = $_POST['mukhiya']; 
    $janpad = $_POST['Janpad'];
    $DrivePath = $_POST['DrivePath'];
    $DrivePath1=convertToDownloadLink($DrivePath);

    $rid = $_POST['rid'];
       $sql = "UPDATE ration_req SET 
        ration='$ration_no', 
        name='$mukhiya', 
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
 
// Function to convert Google Drive view link to download link
function convertToDownloadLink($viewLink) {
    // Parse the URL and extract the file ID
    $parsedUrl = parse_url($viewLink);
    parse_str($parsedUrl['query'], $queryParams);

    // Check if 'id' is available in the query params, else extract from path
    if (isset($queryParams['id'])) {
        $fileId = $queryParams['id'];
    } else {
        // Extract the file ID from the URL path
        $pathSegments = explode('/', $parsedUrl['path']);
        $fileId = end($pathSegments);
    }

    // Return the formatted download link
    return "https://drive.usercontent.google.com/u/0/uc?id=" . $fileId . "&export=download";
}

// // Example usage
// $inputLink = "https://drive.google.com/file/d/1ELDQq5JLIpGkbkoDjEskIFD73UyUPbAE/view?usp=sharing";
// $downloadLink = convertToDownloadLink($inputLink);

// echo "Download Link: " . $downloadLink;
?>
