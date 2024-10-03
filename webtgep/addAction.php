<html>
<head>
	<title>Add Data1</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");
// print_r($_POST);	die("ASDa");

if (isset($_POST['submit'])) {

	// print_r($_POST);	die("AS1Da");
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
		
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
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		// echo "INSERT INTO users (`name`, `mobile`, `email`) VALUES ('$name', '$mobile', '$email', '$password')";
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `mobile`, `email`,`password`) VALUES ('$name', '$mobile', '$email','$password')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
