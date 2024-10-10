<?php
session_start();
include ("config.php");

if (isset($_SESSION['data'])) {
    if(isset($_POST['submit'])){
    $c_otp = $_SESSION['data'];
    $u_otp = $_POST['u_otp'];
    if ($u_otp == $c_otp) {
        session_unset();
        echo "<h1>Login Sucsess</h1>";
    } else {
        echo "<h1>Wrong OTP</h1>";
    }
}
}
else{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .item1 {
        width: 400px;
        height: 240px;
        background-color: black;
        margin: auto;
        border-radius: 30px;

        /* border: 7px solid rgb(141, 91, 91); */
        /* box-shadow: 1px 1px 10px 1px black; */
        color: white;
    }

    .item2 {
        width: 300px;
        margin: auto;
        height: 200px;
        background-color: black;
        border: 1px solid rgb(0, 0, 0);
        color: white;
    }

    .sub input {
        width: 250px;
        height: 40px;
        background-color: rgb(141, 91, 91);
        margin-top: 30px;
        border: 1px solid white;
        border-radius: 10px;
        color: white;
    }
</style>
<body>
    <div class="item1">
        <div class="item2">
            <form method="post">
                <p>U_OTP</p>
                <input type="u_otp" name="u_otp">
                <p>Confirm_OTP</p>
                <input type="c_otp" name="c_otp">
                <div class="sub">
                <input type="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>                                                                                                     