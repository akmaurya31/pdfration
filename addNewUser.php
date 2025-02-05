<?php
require_once("headerFront.php");
require_once("dbConnection.php");
$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars($_POST['email']));
$contact_number = trim(htmlspecialchars($_POST['contact_number']));
$password = trim(htmlspecialchars($_POST['password']));
$dpincode = trim(htmlspecialchars($_POST['dpincode']));
list($username, $domain) = explode("@", $email);
$username1 = $username.rand(1, 9999);
$ip_address = $_SERVER['REMOTE_ADDR'];

if (!empty($name) && !empty($email) && !empty($contact_number) && !empty($password)) {
    // Check if the email or contact number already exists in the database
    $check_sql = "SELECT * FROM users WHERE email = ? OR contact_number = ?";
    $stmt = $mysqli->prepare($check_sql);
    $stmt->bind_param("ss", $email, $contact_number);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email or contact number already exists
        echo '<div class="bg-red-100 border max-w-[1325px] border-red-400 mt-5 text-red-700 px-4 py-3 rounded relative mx-auto" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">Email or contact number already registered.</span>
      </div>';

      

        // Adding the "Go to Signup" button with an emoji
        echo '<div class="flex justify-center mt-4">
                <a href="index.php" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <span>🔄</span>
                <span class="ml-2">Go to Signup</span>
                </a>
            </div>';
    } else {
        // Insert the new user into the database
      echo $sql = "INSERT INTO users (name, email, contact_number, password, username, dpincode,istatus,ipaddress) 
        VALUES ('$name', '$email', '$contact_number', '$password', '$username1', '$dpincode','0',$ip_address)";
        die("Adfa");
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
