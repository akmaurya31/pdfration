<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $qualification = $_POST['qualification'];
    $nexprience = $_POST['nexprience'];
    $dpincode = $_POST['dpincode'];

    // $message = $_POST['message'];

    // Prepare data for the cURL request
    $data = json_encode([
        'name' => $name,
        'email' => $email,
        'mobile' => $mobile,
        'qualification' => $qualification,
        'nexprience' => $nexprience,
        'dpincode' => $dpincode,
        'formtype' => "Job"
    ]);

    //CURLOPT_URL => 'https://script.google.com/macros/s/AKfycbz82Ro-zNZss0rPJvA4RqEAK7cneDu0Z4OIN-j7YpXRsWeNjvPHB-41PIpE300S53dL/exec',
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://script.google.com/macros/s/AKfycbxVG9yKKu2Z1QAI5K81sDTrTmNt55UX03MFngZfquJ8cxpyvA10D2RSzEnsSYwIxQTE/exec',        
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    
    // Return the response from the Google Apps Script
    echo $response;
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
