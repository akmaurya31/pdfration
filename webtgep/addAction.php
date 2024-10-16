<?php //include("header.php"); ?>

<html>
<head>
    <title>Add Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<img src="./images/sign.jpeg" class="w-full h-[30%]" />

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {

    // Escape special characters in string for use in SQL statement    
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $city = mysqli_real_escape_string($mysqli, $_POST['city']);
    $state = mysqli_real_escape_string($mysqli, $_POST['state']);
    $yourbusiness = mysqli_real_escape_string($mysqli, $_POST['business']);
    
    // Check for empty fields
    if (empty($name) || empty($mobile) || empty($email) || empty($password)) {
        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if (empty($mobile)) {
            echo "<font color='red'>Mobile field is empty.</font><br/>";
        }
        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // Check if the email or mobile number already exists in the database
        $checkQuery = "SELECT * FROM users WHERE email='$email' OR mobile='$mobile'";
        $checkResult = mysqli_query($mysqli, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            // If email or mobile exists, show error message
            echo '<div class="bg-red-100 border max-w-[1325px] border-red-400 mt-5 text-red-700 px-4 py-3 rounded relative mx-auto" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">Email or contact number already registered.</span>
                </div>';

            echo '<div class="flex justify-center mt-4 space-x-2">
                    <a href="index.php" class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <span>🔄</span>
                        <span class="ml-2">Go to Signup</span>
                    </a>
                    <a href="login.php" class="inline-flex items-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        <span>🔑</span>
                        <span class="ml-2">Login</span>
                    </a>
                </div>';
        } else {
            // Insert data into database
            $result = mysqli_query($mysqli, "INSERT INTO users (`name`, `mobile`, `email`,`password`,`city`,`state`,`yourbusiness`) VALUES ('$name', '$mobile', '$email','$password','$city','$state','$yourbusiness')");
            
            // Display success message
            echo '<div class="flex justify-center items-center">
                        <div class="bg-green-100 border max-w-[1325px] border-green-400 mt-5 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold text-2xl">Success!</strong>
                            <span class="block sm:inline text-2xl">Your account has been created successfully.</span>
                        </div>
                    </div>';

            echo '<div class="flex justify-center mt-4 space-x-2">
                    <a href="login.php" class="inline-flex items-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        <span>🔑</span>
                        <span class="ml-2">Login</span>
                    </a>
                    <a href="index.php" class="inline-flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        <span>🏠</span>
                        <span class="ml-2">Home</span>
                    </a>
                </div>';
        }
    }
}
?>
</body>
</html>
