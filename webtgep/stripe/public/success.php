<?php

require_once '../vendor/autoload.php';
require_once '../secrets.php';
include('../../dbConnection.php');

\Stripe\Stripe::setApiKey($stripeSecretKey); // Set your Stripe secret key

// Retrieve the session ID from the query parameters
$session_id = $_GET['session_id'] ?? null;
//print_r($_SESSION);


if ($session_id) {
    try {
        // Retrieve the checkout session from Stripe using the session_id
        $checkout_session = \Stripe\Checkout\Session::retrieve($session_id);

        // Get the payment intent ID (transaction ID)
        $payment_intent_id = $checkout_session->payment_intent;

        // Retrieve the payment intent to get full payment details
        $payment_intent = \Stripe\PaymentIntent::retrieve($payment_intent_id);

        // Extract relevant details
        $transaction_id = $payment_intent->id;
        $amount_received = $payment_intent->amount_received / 100;  // Convert from cents to dollars
        $currency = $payment_intent->currency;
        $status = $payment_intent->status;  // e.g., 'succeeded'
        
        // Transaction ID: pi_3QAaV7J9aZcY4Vva1rhBAaMR
        // Amount Paid: 490 INR
        // Payment Status: succeeded

        // users set 
        // current_balance
        // pay
        // pstatus
        // pcurrency
        // transaction_id where =mobile=

        $mobile =  $_SESSION['idd'];  //'9876543210';  // Mobile number of the user
        $current_balance =$payment_intent->amount_received / 100;
        $pay =$payment_intent->amount_received / 100;
        $pstatus = 'succeeded';  // Payment status (succeeded, failed, pending)
        $pcurrency =  $payment_intent->currency;
        $transaction_id = $payment_intent->id;

        $sql = "UPDATE users 
        SET 
            current_balance = $current_balance, 
            pay = $pay, 
            pstatus = '$pstatus', 
            pcurrency = '$pcurrency', 
            transaction_id = '$transaction_id' 
        WHERE 
            mobile = '$mobile'";


        if ($pdo->exec($sql)) {
            echo "User's payment information updated successfully!";
        } else {
            echo "Error updating user's payment information.";
        }

        // Display or process the transaction details
        // echo "Transaction ID: " . $transaction_id . "<br>";
        // echo "Amount Paid: " . $amount_received . " " . strtoupper($currency) . "<br>";
        // echo "Payment Status: " . $status . "<br>";
        

        // Optionally, save the transaction details in your database
        // You can insert the transaction details into your database here

    } catch (Exception $e) {
        echo "Error retrieving payment details: " . $e->getMessage();
    }
} else {
    echo "Session ID not found!";
}

