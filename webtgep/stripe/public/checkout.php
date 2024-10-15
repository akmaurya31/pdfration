<?php

require_once '../vendor/autoload.php';
require_once '../secrets.php';

\Stripe\Stripe::setApiKey($stripeSecretKey); // Use your Stripe secret key

// Product ID for which you want to fetch prices
$product_id = 'prod_R1BmXeZUDNv8Ff';
// $product_id = 'prod_R1vUBOOc0tnKYx';

// $YOUR_DOMAIN = 'http://localhost';
$YOUR_DOMAIN = 'https://tpeg-ibiv.com';

// Fetch prices for the specific product
$prices = \Stripe\Price::all([
  'product' => $product_id,  // Fetch prices associated with the product
]);

// print_r($prices);
// die("Asdfa");

// Check if there are any prices available
if (count($prices->data) > 0) {
    // Assuming the first price in the list is the one you want to use for the subscription
    $price_id = $prices->data[0]->id;

    // Now create the Checkout Session with the selected Price ID
    $checkout_session = \Stripe\Checkout\Session::create([
      'line_items' => [
        [
          'price' => $price_id,  // Use the Price ID from the fetched prices
          'quantity' => 1,
        ],
      ],
      //'mode' => 'subscription',  // Subscription-based checkout
      'mode' => 'payment',  // This is for one-time payments
      'success_url' => $YOUR_DOMAIN . '/stripe/public/success.php',  // Success redirect URL
      'cancel_url' => $YOUR_DOMAIN . '/stripe/public/cancel.php',    // Cancel redirect URL
    ]);

    // Redirect the customer to the Checkout Session
    header('Location: ' . $checkout_session->url);
} else {
    echo "No prices found for this product.";
}
