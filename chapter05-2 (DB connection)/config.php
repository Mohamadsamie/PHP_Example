<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "test";
$connection = mysqli_connect($server,$username,$pass,$db);
if($connection){
    echo "ارتباط برقرار شد";
} else {
    echo "برقراری ارتباط ناموفق بود";
}