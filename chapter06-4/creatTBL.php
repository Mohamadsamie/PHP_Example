<?php
$a = mysqli_connect('localhost','root','','newtest1');
$sql = "CREATE TABLE admin_tbl(
  id INT(3) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  last VARCHAR(30)
)";

if (mysqli_query($a,$sql)){
    echo "Created";
}   else {
    die(mysqli_error());
}
