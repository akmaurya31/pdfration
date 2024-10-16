<?php

require_once '../vendor/autoload.php';
require_once '../secrets.php';

\Stripe\Stripe::setApiKey($stripeSecretKey); // Set your Stripe secret key

// Retrieve the session ID from the query parameters
$session_id = $_GET['session_id'] ?? null;

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

        // Display or process the transaction details
        echo "Transaction ID: " . $transaction_id . "<br>";
        echo "Amount Paid: " . $amount_received . " " . strtoupper($currency) . "<br>";
        echo "Payment Status: " . $status . "<br>";

        // Optionally, save the transaction details in your database
        // You can insert the transaction details into your database here

    } catch (Exception $e) {
        echo "Error retrieving payment details: " . $e->getMessage();
    }
} else {
    echo "Session ID not found!";
}

