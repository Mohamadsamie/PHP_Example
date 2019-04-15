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
if (isset($_GET['inseeeeert'])) {
    ?>
    <div class="alert">
        User Added Successfuly!
    </div>
    <?php
}
?>
<!--This is how to using query string end-->
<div class="form-area">
    <form action="process.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="label">نام:</div>
            <div class="formelement">
                <input  type="text" name="frm[name]" placeholder=" نام">
            </div>
        </div>
        <div class="row">
            <div class="label">نام خانوادگی:</div>
            <div class="formelement">
                <input  type="text" name="frm[last]" placeholder="نام خانوادگی">
            </div>
        </div>
        <div class="row">
            <div class="label">سن:</div>
            <div class="formelement">
                <input  type="text" name="frm[age]" placeholder="سن">
            </div>
        </div>
        <div class="row">
            <div class="label">رشته:</div>
            <div class="formelement">
                <select name="frm[field]" id="">
                    <option value="math">ریاضی</option>
                    <option value="physic">فیزیک</option>
                    <option value="chemistry">شیمی</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="label">تصویر:</div>
            <div class="formelement">
                <input  type="file" name="image" placeholder="تصویر">
            </div>
        </div>
        <div class="row">
            <div class="label">توضیحات:</div>
            <div class="formelement">
                <textarea  rows="7"  cols="31"   name="frm[comment]" placeholder="..."></textarea>
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