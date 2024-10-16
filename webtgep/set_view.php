<?php
session_start(); // Start session if needed

// Check if the view variable is set
if (isset($_POST['view'])) {
    $view = $_POST['view']; // Get the view type from the AJAX request

    // Set a session variable based on the view
    if ($view === 'mobile') {
        $_SESSION['device_view'] = 'mobile';
    } else {
        $_SESSION['device_view'] = 'desktop';
    }
}

// Example of using the device view variable
if (isset($_SESSION['device_view'])) {
    // echo "Current View: " . $_SESSION['device_view']; 
    // Outputs the current view
}

//print_r($_SESSION);
?>
 