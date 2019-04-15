<?php

$connection = mysqli_connect('localhost','root','','newtest');
$sql = "SELECT * FROM users";
$result = mysqli_query($connection,$sql);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>User's List</title>
</head>
<body>
<table id="maintbl">
    <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Field</th>
        <th>Comment</th>
        <th>Picture</th>
        <th>Dlete</th>
    </tr>
<?php
    while ($row = mysqli_fetch_assoc($result)) {


        ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['last'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['field'] ?></td>
            <td><?php echo $row['comment'] ?></td>
            <td><img src="<?php echo $row['path'] ?>" style="height: 80px; border-radius: 50%;" /></td>
            <td>
<!--     aidi is equel id but wanted to know where you should use it!           -->
                <a href="delete.php?aidi=<?php echo $row['id'] ?>">
                    <img src="images/delete.png" style="width: 20px;" />
                </a>
            </td>

        </tr>
        <?php
            }
    ?>
    </table>
<!--This is how to using query string-->
<?php
    if (isset($_GET['deleteeeee'])) {
        ?>
        <div class="alert">
            User Deleted Successfuly!
        </div>
        <?php
    }
    elseif (isset($_GET['ediiiit'])){
        ?>
        <div class="alert">
            User Updated Successfuly!
        </div>
        <?php
    }
?>


</body>
</html>