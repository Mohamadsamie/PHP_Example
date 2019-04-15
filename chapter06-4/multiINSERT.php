<?php
$a = mysqli_connect('localhost','root','','newtest1');
/*
 * This is diffrence between (.=) and (.'space'=)
 *
 * */
$sql = "INSERT INTO users_tbl (name,last) VALUES ('person1','1');";
$sql.= "INSERT INTO users_tbl (name,last) VALUES ('person2','2');";
$sql.=  "INSERT INTO users_tbl (name,last) VALUES ('person3','3')";

if (mysqli_multi_query($a,$sql)){
    echo "Inserted";
} else {
    echo "Error";
}
