<script src="https://cdn.tailwindcss.com"></script>
<?php
// Include database connection or ORM
include('../../dbConnection.php');  // Replace with your actual DB connection code
// include('../../header.php');  

// Assuming you receive payment details via query params (e.g., transaction_id, status)
// For example: success.php?transaction_id=TXN12345&payment_status=success
echo '<img src="./images/sign.jpeg" class="block w-full " />';
echo '<div class="flex items-center justify-center mt-5">'; // Flex container for centering

print_r($_REQUEST);


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
        //echo "Payment was successful. Transaction ID: " . $transaction_id;
        echo '<br>';
        echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 L27" role="alert">';
        echo '<strong class="font-bold">Success! </strong>';
        echo '<span class="block sm:inline"> Payment was successful. Transaction ID: ' . $transaction_id . '</span>';
        echo '</div>';
    } else {
        echo '<br>';
        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative L33" role="alert">';
        echo '<strong class="font-bold">Error! </strong>';
        echo '<span class="block sm:inline"> Failed to update transaction status.</span>';
        echo '</div>';
    }
} else {
        echo '<br>';
        echo '<div class="bg-orange-100 border border-orange-400 text-orange-700 px-4 py-3 rounded relative mb-4 L40" role="alert">';
        echo '<strong class="font-bold">Warning! </strong>';
        echo '<span class="block sm:inline"> Missing payment details. Please provide the necessary information.</span>';
        echo '</div>';
}

echo '</div>';

$frl=$fullUrl."/pay.php";

echo '<div class="flex items-center justify-center ">'; // Flex container for centering
echo '<a href="'.$frl.'" class="flex items-center bg-[#462602] text-white font-bold py-2 px-4 rounded shadow hover:bg-[#333] transition duration-200">';
echo '<span class="mr-2">🔙</span>';  
echo 'Back';
echo '</a>';
echo '</div>';
?>
