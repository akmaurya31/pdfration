<?php
require_once("headerFront.php");
require_once("dbConnection.php");
// print_r($_POST);

$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars($_POST['email']));
$contact_number = trim(htmlspecialchars($_POST['contact_number']));
// $password = trim(htmlspecialchars($_POST['password']));
$dpincode = trim(htmlspecialchars($_POST['dpincode']));
$nqualification = trim(htmlspecialchars($_POST['qualification']));
$nexprience = trim(htmlspecialchars($_POST['nexprience']));
list($username, $domain) = explode("@", $email);
$username1 = $username.rand(1, 9999);
$password =rand(1, 9999);

if (!empty($name) && !empty($email) && !empty($contact_number) && !empty($password)) {
    // Check if the email or contact number already exists in the database
    $check_sql = "SELECT * FROM jobusers WHERE email = ? OR contact_number = ?";
    $stmt = $mysqli->prepare($check_sql);
    $stmt->bind_param("ss", $email, $contact_number);
    $stmt->execute();
    $result = $stmt->get_result();



     
        // Insert the new user into the database
        $sql = "INSERT INTO jobusers (name, email, contact_number, password,username, dpincode,nqualification,nexprience) 
        VALUES ('$name', '$email', '$contact_number', '$password', '$username1', '$dpincode','$nqualification','$nexprience')";
        if ($mysqli->query($sql) === TRUE) {
            echo '<div class="bg-green-100 border border-green-400  max-w-[1325px] mt-5 mx-auto text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success! 🎉</strong>
            <span class="block sm:inline">User registered successfully! अगर आप भूल गए हैं अपना User ID या Password तो हमें संपर्क करें, WhatsApp पर भेजें। 7518869428</span>
        </div>';

        echo '<div class="flex justify-center mt-4">
                <a href="login.php" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <span>🔄</span>
                <span class="ml-2">Go to Login</span>
                </a>
            </div>';
            // header("Location: login.php");
            // exit();
        } else {
            echo "Error: " . $mysqli->error;
        }
    
    $stmt->close();
    $mysqli->close();
} else {
    // If any field is missing, show a message
    echo '<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Warning!</strong>
            <span class="block sm:inline">Please fill out all the fields.</span>
          </div>';
}
?>
