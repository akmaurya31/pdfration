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

function getGoogleDriveDownloadLinkWithoutRegex($inputLink) {
    // Split the string by '/' and store in an array
    $parts = explode('/', $inputLink);

    // print_r($parts);
    // die('asfas');
    // https://drive.google.com/file/d/1ELDQq5JLIpGkbkoDjEskIFD73UyUPbAE/view?usp=sharing

    // The file ID will be at the 5th position (index 4) in the array
    if (isset($parts[5])) {
        $fileId = $parts[5];
        // Construct the direct download link
      //  echo "https://drive.usercontent.google.com/u/0/uc?id=" . $fileId . "&export=download";;
       // die("dfa");
        return "https://drive.usercontent.google.com/u/0/uc?id=" . $fileId . "&export=download";
    } else {
        return "Invalid Google Drive link. File ID not found.";
    }
}

function getGoogleDriveDownloadLink($inputLink) {
    // Use preg_match to extract the file ID
    preg_match('/\/d\/([a-zA-Z0-9_-]+)/', $inputLink, $matches);

    if (!empty($matches[1])) {
        $fileId = $matches[1];
        // Construct the direct download link
        return "https://drive.usercontent.google.com/u/0/uc?id=" . $fileId . "&export=download";
    } else {
        return "Invalid Google Drive link. File ID not found.";
    }
}

//https://drive.google.com/file/d/1LMi3wH5zgHdyw3siugXlJW_BREYwoN6p/view?usp=drive_link

//https://drive.usercontent.google.com/download?id=1LMi3wH5zgHdyw3siugXlJW_BREYwoN6p&export=download&authuser=0




 
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
