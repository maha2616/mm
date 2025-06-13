<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$txn = $_POST['txn'];

$data = "$name | $phone | $txn | " . date("Y-m-d H:i:s") . "\n";
file_put_contents("paid_users.txt", $data, FILE_APPEND);

echo "Thanks $name! You will get access shortly. Contact us on WhatsApp if not unlocked.";
?>
