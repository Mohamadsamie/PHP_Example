<?php

    if (isset($_POST['btn'])){
        $str = $_POST['str'];
//        echo $str;}
        $conn = mysqli_connect('localhost','root','','newtest');
        $sql = "SELECT * FROM users WHERE name LIKE '%$str%'";
        $row = mysqli_query($conn,$sql);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Search result</title>
</head>
<body>
<form id="s" class="form-area" method="post">
    <input class="formelement" type="text" name="str">
    <input class="formelement" type="submit" name="btn" value="جستجو">

</form>
    <ul>
        <?php
            while ($result = mysqli_fetch_array($row)){
                echo "<li>".$result['name']."</li>";
            }
        ?>
    </ul>
</body>
</html>