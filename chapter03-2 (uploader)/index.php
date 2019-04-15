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
<!--Uploader-->
<div class="form-area">
    <form action="process.php" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="label">ایمیل:</div>
            <div class="formelement">
                <input required type="text" name="email" placeholder="ایمیل">
            </div>
        </div>
        <div class="row">
            <div class="label">عکس:</div>
            <div class="formelement">
                <input required type="file" name="pic" placeholder="تصویر">
            </div>
        </div>
        <div class="row">
            <div class="formelement">
                <input type="submit" name="submit" value="بارگذاری">
            </div>
        </div>
    </form>
</div>

</body>
</html>