<?php
// Include database connection or ORM
include('db_connect.php');  // Replace with your actual DB connection code

// Log or process the cancellation, you may want to update the database as well
if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];
    
    // You can log the cancellation in the database, or take other actions
    // For instance, updating the transaction as 'cancelled'
    $query = "UPDATE transactions SET status = 'cancelled' WHERE transaction_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$transaction_id]);
    
    if ($stmt->rowCount() > 0) {
        echo "Payment was cancelled. Transaction ID: " . $transaction_id;
    } else {
        echo "Failed to update cancellation status.";
    }
} else {
    echo "Transaction ID is missing.";
}
?>
