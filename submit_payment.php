<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and set to empty values
    $name = $cardNumber = $expiryDate = $cvv = $amount = "";

    $name = sanitize_input($_POST["name"]);
    $cardNumber = sanitize_input($_POST["card-number"]);
    $expiryDate = sanitize_input($_POST["expiry-date"]);
    $cvv = sanitize_input($_POST["cvv"]);
    $amount = sanitize_input($_POST["amount"]);

    // Here you would typically send the payment details to a payment gateway
    // For example, using Stripe or PayPal API

    // Assuming payment is successful
    echo "Payment of $" . htmlspecialchars($amount) . " was successful.";
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$account_name = "Central City Football Club";
$account_number = "1234567890";
$bank_name = "XYZ Bank";
$branch_name = "Main Branch";
$airtel_account_name = "Central City FC";
$airtel_money_number = "+260973303324";

?>