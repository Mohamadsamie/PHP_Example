<?php

if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
//    var_dump($data);
    $str = $data['str'];
    $conn = mysqli_connect('localhost', 'root', '', 'newtest');
    $sql = "SELECT * FROM users WHERE $data[select] LIKE '%$str%'";
    $row = mysqli_query($conn, $sql);
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
    <input class="formelement" type="text" name="frm[str]">
    <select name="frm[select]" id="">
        <option value="name">Search by name</option>
        <option value="last">Search by lastname</option>
        <option value="age">Search by age</option>
        <option value="field">Search by field</option>
    </select>
    <input class="formelement" type="submit" name="btn" value="جستجو">

</form>

<table id="maintbl">
    <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Field</th>
        <th>Picture</th>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($row)) {


        ?>
        <tr>
            <td><?php echo $res['name'] ?></td>
            <td><?php echo $res['last'] ?></td>
            <td><?php echo $res['age'] ?></td>
            <td><?php echo $res['field'] ?></td>
            <td><img src="<?php echo $res['path'] ?>" style="height: 80px; border-radius: 50%;" /></td>


        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>