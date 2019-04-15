<?php
$data = $_POST['frm'];
$picname = $_FILES['image']['name'];
//Upload Script Start
mkdir("uploads/" . $data['name']);
$array = explode(".", $picname);
$ext = end($array);
$newname = rand() . "." . $ext;
$from = $_FILES['image']['tmp_name'];
$to = "uploads/" . $data['name'] . "/" . $newname;
move_uploaded_file($from, $to);
//Upload Script End
$conn = mysqli_connect('localhost','root','','newtest');
$sql = "INSERT INTO users (name,last,age,field,comment,path) VALUE ('$data[name]','$data[last]','$data[age]','$data[field]','$data[comment]','$to')";
mysqli_query($conn,$sql);
header("location:index.php");
