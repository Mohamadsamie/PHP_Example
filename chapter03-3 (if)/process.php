<h1>Hello Developer ;)</h1>
<?php
    $name = "mohamad";
    $pass = "123";
    if ( $_POST['name'] == $name && $_POST['password'] == $pass){
        echo "Welcome Admin";
    }
    else{
        echo "You can not Enter!";
    }

?>