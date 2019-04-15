<?php
//mkdir("dir");
//echo "ساخته شد";
if(!file_exists("dir")){
    mkdir("dir");
    echo "ساخته شد";
}
else {
    echo "قبلا ساخته شده";
}