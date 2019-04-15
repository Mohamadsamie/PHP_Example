<h1>Hello Developer ;)</h1>

<?php
        $email = $_POST['email'];
        mkdir("uploads/".$email);
        $picname = $_FILES['pic']['name'];      /*Important*/
        $array = explode(".",$picname);
        $ext = end($array);
        $newname = rand().".".$ext;
        $from = $_FILES['pic']['tmp_name'];
        $to = "uploads/".$email."/".$newname;
        move_uploaded_file($from,$to);
?>