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
<div class="form-area">
    <form action="process.php" method="post">
        <div class="row">
            <div class="label">نام:</div>
            <div class="formelement">
                <input required type="text" name="name" placeholder=" نام">
            </div>
        </div>
        <div class="row">
            <div class="label">سال تولد:</div>
            <div class="formelement">
                <select name="birthday" id="">
                    <?php
                        for ($i=1330;$i<=1380;$i++){

                            echo "<option ";
                                if($i==1368){
                                    echo "selected";
                                }
                            echo  ">".$i."</option>";
                        }

                    ?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="formelement">
                <input type="submit" name="submit" value="ثبت نام">
            </div>
        </div>
    </form>
</div>

</body>
</html>