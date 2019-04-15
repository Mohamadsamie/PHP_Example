<?php
//echo "I'm working...";


if (isset($_POST['btn'])){
    $username = $_POST['username'];
    $connection = mysqli_connect('localhost','root','','test');
    $query = "INSERT INTO user (name) VALUES ('$username')";
    mysqli_query($connection,$query);

    echo "کاربر ثبت شد";
}