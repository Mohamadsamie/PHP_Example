<?php

if (isset($_POST['name'], $_FILES['pic']['name'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $picname = $_FILES['pic']['name'];
}
function uploader($name, $picname)
{
    if (!file_exists("uploads/" . $name)) {
        mkdir("uploads/" . $name);
        $array = explode(".", $picname);
        $ext = end($array);
        $newname = rand() . "." . $ext;
        $from = $_FILES['pic']['tmp_name'];
        $to = "uploads/" . $name . "/" . $newname;
        move_uploaded_file($from, $to);
        echo "خوش آمدی " . $name . " عزیز" . "<br><br>";
        echo "نام کاربری با موفقیت ثبت شد";
    } else {

        echo "نام کاربری قبلا ثبت شده است";
    }
}