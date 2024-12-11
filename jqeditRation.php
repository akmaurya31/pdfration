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
    // $user_id = $_POST['user_id']; 


    // Handle file uploads for photoUpload
    if(isset($_FILES['photoUpload']) && $_FILES['photoUpload']['error'] == 0) {
        // $photoName = $_FILES['photoUpload']['name'];
        // $photoTmpName = $_FILES['photoUpload']['tmp_name'];
        // $photoPath = 'images/uploads/' . $photoName;
        // move_uploaded_file($photoTmpName, $photoPath);

        $photoName = $_FILES['photoUpload']['name'];
        $photoTmpName = $_FILES['photoUpload']['tmp_name'];
        $extions = pathinfo($photoName, PATHINFO_EXTENSION);
        $newPhotoName = 'photo_' . $rid . '.' . $extions;
        $photoPath = 'images/uploads/' . $newPhotoName;
        move_uploaded_file($photoTmpName, $photoPath);

    } else {
        $photoPath = ''; // Default path if no file uploaded
    }
    // Handle file uploads for screenshotUpload
//     if(isset($_FILES['screenshotUpload']) && $_FILES['screenshotUpload']['error'] == 0) {
//         // $screenshotName = $_FILES['screenshotUpload']['name'];
//         // $screenshotTmpName = $_FILES['screenshotUpload']['tmp_name'];
//         // $screenshotPath = 'images/uploads/' . $screenshotName;
//         // move_uploaded_file($screenshotTmpName, $screenshotPath);

//         $screenshotName = $_FILES['screenshotUpload']['name'];
//         $screenshotTmpName = $_FILES['screenshotUpload']['tmp_name'];
//         $extions = pathinfo($screenshotName, PATHINFO_EXTENSION);
//         $newScreenshotName = 'pariwar_' . $rid . '.' . $extions;
//         $screenshotPath = 'images/uploads/' . $newScreenshotName;
//         move_uploaded_file($screenshotTmpName, $screenshotPath);

//     } else {
//         $screenshotPath = ''; // Default path if no file uploaded
//     }
    
//    // print_r($_FILES); die("ASDfasdf");
//    $pdfError = $_FILES['pdfUpload']['error'];
//    if ($pdfError !== UPLOAD_ERR_OK) {
//         die('File upload failed with error code ' . $pdfError);
//     }
    
    /*
    if(isset($_FILES['pdfUpload']) && $_FILES['pdfUpload']['error'] == 0) {
        $pdfName = $_FILES['pdfUpload']['name'];
        $pdfTmpName = $_FILES['pdfUpload']['tmp_name'];
        $extions = pathinfo($pdfName, PATHINFO_EXTENSION);
        $newpdfName = 'pdf_' . $rid . '.' . $extions;
        $pdfPath='';
        //.$pdfPath = 'images/uploads/' . $newpdfName;
        // move_uploaded_file($pdfTmpName, $pdfPath);
        // uploadFileToS3($_FILES);



        $pdfm=uploadPDFToServer($pdfTmpName,$extions);
        // Decode the JSON response
        $responseData = json_decode($pdfm, true); // true converts it to an associative array

        // Check if the response contains a success status and the fileUrl
        if ($responseData && isset($responseData['status']) && $responseData['status'] === 'success') {
             $pdfPath = $responseData['fileUrl']; // Store the fileUrl in $pdfpath
            //echo "File uploaded successfully! File URL: " . $pdfpath;
             
            
        } else {
            echo "File upload failed!";
        }

    } else {
        $pdfPath = '';  
    }

    */


    // echo $sql = "UPDATE ration_req SET 
    //         ration='$ration_no', 
    //         town='$town', 
    //         mukhiya='$mukhiya', 
    //         father='$father', 
    //         cast_certificate='$cast_certificate', 
    //         adhar='$adhar', 
    //         address='$address', 
    //         gas_connection_no='$gas_connection_no', 
    //         dukan_no='$dukan_no', 
    //         unit='$unit'
    //         WHERE id=$rid";


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
        pdf_path='$DrivePath',
        WHERE id=$rid";

    // if($photoPath!=''){
    //     $sql = "UPDATE ration_req SET photo_path='$photoPath' WHERE id=$rid";
    // }


    // if($screenshotPath!=''){
    //     $sql = "UPDATE ration_req SET screenshot_path='$screenshotPath' WHERE id=$rid";
    // }
    
  /*  if($pdfPath!=''){
           $sql = "UPDATE ration_req SET pdf_path='$pdfPath' WHERE id=$rid";
    }else{
       echo $sql = "UPDATE ration_req SET pdf_path='$DrivePath' WHERE id=$rid";
    } */
  
    // die("Adfa");
        
    //   die("ADf");


    if ($mysqli->query($sql) === TRUE) {
        echo "User information updated successfully.";
    } else {
        echo "Error updating user information: " . $mysqli->error;
    }
}
$mysqli->close();
?>
