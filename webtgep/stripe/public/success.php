<?php
// Include database connection or ORM
include('db_connect.php');  // Replace with your actual DB connection code

// Assuming you receive payment details via query params (e.g., transaction_id, status)
// For example: success.php?transaction_id=TXN12345&payment_status=success

if (isset($_GET['transaction_id']) && isset($_GET['payment_status'])) {
    // Capture the transaction details
    $transaction_id = $_GET['transaction_id'];
    $payment_status = $_GET['payment_status'];
    $payment_date = date('Y-m-d H:i:s'); // Current date and time
    
    // Update the transaction status in the database
    $query = "UPDATE transactions SET status = ?, payment_date = ? WHERE transaction_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$payment_status, $payment_date, $transaction_id]);
        
    if ($stmt->rowCount() > 0) {
        // Successfully updated the transaction
        echo "Payment was successful. Transaction ID: " . $transaction_id;
    } else {
        echo "Failed to update transaction status.";
    }
} else {
    echo "Missing payment details.";
}
?>
