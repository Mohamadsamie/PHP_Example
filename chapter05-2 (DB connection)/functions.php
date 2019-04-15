<?php
function db_connect($user,$password,$db){
    $server = "localhost";
    $username = $user;
    $pass = $password;
    $connection = mysqli_connect($server,$username,$pass,$db);
    if($connection){
        echo "<div style='color: #00796b; text-align: center; font-family: Tahoma;'>ارتباط برقرار شد</div>";
    } else {
        echo "<div style='color: red ; text-align: center; font-family: Tahoma;'>برقراری ارتباط ناموفق بود</div>";
    }
}