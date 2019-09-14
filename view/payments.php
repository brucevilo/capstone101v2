<?php
$enableSandbox = true;

$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'mechanichero'
];
$id = $_POST['id'];
// echo $id; die;
$paypalConfig = [
    'email' => 'user@example.com',
    'return_url' => 'http://localhost/capstone101/view/mechanicSRAdeatails.php?=$id',
    'cancel_url' => 'http://example.com/payment-cancelled.html',
    'notify_url' => 'http://example.com/payments.php'
];

$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';

$itemName = 'Test Item';
$itemAmount = 1.00;

require '../view/functions.php  ';

if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])) {
    $data = [];
    foreach ($_POST as $key => $value) {
        $data[$key] = stripslashes($value);
    }

    $data['business'] = $paypalConfig['email'];

    $data['return'] = stripslashes($paypalConfig['return_url']);
    $data['cancel_return'] = stripslashes($paypalConfig['cancel_url']);
    $data['notify_url'] = stripslashes($paypalConfig['notify_url']);

    $data['item_name'] = $itemName;
    $data['amount'] = $itemAmount;
    $data['currency_code'] = 'GBP';

    $queryString = http_build_query($data);

    header('location:' . $paypalUrl . '?' . $queryString);
    exit();

} else {

}

// Handle the PayPal response.

// Create a connection to the database.
$db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

// Assign posted variables to local data array.
$data = [
    'item_name' => $_POST['item_name'],
    'item_number' => $_POST['item_number'],
    'payment_status' => $_POST['payment_status'],
    'payment_amount' => $_POST['mc_gross'],
    'payment_currency' => $_POST['mc_currency'],
    'txn_id' => $_POST['txn_id'],
    'receiver_email' => $_POST['receiver_email'],
    'payer_email' => $_POST['payer_email'],
    'custom' => $_POST['custom'],
];
// We need to verify the transaction comes from PayPal and check we've not
// already processed the transaction before adding the payment to our
// database.
if (verifyTransaction($_POST) && checkTxnid($data['txn_id'])) {
    if (addPayment($data) !== false) {
        // Payment successfully added.
        addPayment($data);
        }
}