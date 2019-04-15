<?php
$id = $_GET['aidi'];  //in line 44 users_list.php
$conn = mysqli_connect('localhost','root','','newtest');

//Episode 34
$query = "SELECT * FROM users WHERE id= '$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$file = $row['path'];
$folder = "uploads/" . $row['name'];
unlink($file);
rmdir($folder);
//Episode 34


$sql = "DELETE FROM users WHERE id='$id'";
mysqli_query($conn,$sql);
/*This is how to using query string*/
header("location:user's_list.php?deleteeeee=ok");