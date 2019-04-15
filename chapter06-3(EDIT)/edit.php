<?php
$id = $_GET['ediiiit'];
$conn = mysqli_connect('localhost', 'root', '', 'newtest');
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//var_dump($row);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>PHP Form</title>
</head>
<body>

<!--This is how to using query string strt-->
<?php

if (isset($_POST['submit'])) {
    $data = $_POST['frm'];

    if ($_FILES['image']['name']) {

        if ($data['name'] != $row['name']) {
            mkdir("uploads/" . $data['name']);
        }

        $picname = $_FILES['image']['name'];
        $array = explode(".", $picname);
        $ext = end($array);
        $newname = rand() . "." . $ext;
        $from = $_FILES['image']['tmp_name'];
        if ($data['name'] == $row['name']) {
            $to = "uploads/" . $row['name'] . "/" . $newname;
        } else {
            $to = "uploads/" . $data['name'] . "/" . $newname;
        }


        move_uploaded_file($from, $to);
    } else {
        $to = $row['path'];
    }

    $query = "UPDATE users SET name='$data[name]', last='$data[last]', age='$data[age]', field='$data[field]', comment='$data[comment]', path='$to' WHERE id='$id'";
    mysqli_query($conn, $query);
    header("location:user's_list.php?ediiiit=ok");
}
?>
<!--This is how to using query string end-->
<div class="form-area">
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="label">نام:</div>
            <div class="formelement">
                <input type="text" name="frm[name]" value="<?php echo $row['name'] ?>" placeholder=" نام">
            </div>
        </div>
        <div class="row">
            <div class="label">نام خانوادگی:</div>
            <div class="formelement">
                <input type="text" name="frm[last]" value="<?php echo $row['last'] ?>" placeholder="نام خانوادگی">
            </div>
        </div>
        <div class="row">
            <div class="label">سن:</div>
            <div class="formelement">
                <input type="text" name="frm[age]" value="<?php echo $row['age'] ?>" placeholder="سن">
            </div>
        </div>
        <div class="row">
            <div class="label">رشته:</div>
            <div class="formelement">
                <select name="frm[field]" id="">
                    <option value="math" <?php if ($row['field'] == "math") {
                        echo "selected";
                    } ?> >ریاضی
                    </option>
                    <option value="physic" <?php if ($row['field'] == "physic") {
                        echo "selected";
                    } ?> >فیزیک
                    </option>
                    <option value="chemistry" <?php if ($row['field'] == "chemistry") {
                        echo "selected";
                    } ?> >شیمی
                    </option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="label">تصویر:</div>
            <div class="formelement">
                <input type="file" name="image" placeholder="تصویر">
                <img src="<?php echo $row['path'] ?>" style="height: 80px; border-radius: 50%;" alt="">
            </div>
        </div>
        <div class="row">
            <div class="label">توضیحات:</div>
            <div class="formelement">
                <textarea rows="7" cols="31" name="frm[comment]"
                          placeholder="..."> <?php echo $row['comment'] ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="formelement">
                <input type="submit" name="submit" value="ثبت نام">
            </div>
            <div class="formelement">
                <a href="user's_list.php">لیست کاربران</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>