<?php
header("content-type:text/html;charset=utf-8");
$count = count($_FILES['file']['name']);
$files = array();
for ($i = 0; $i < $count; $i++) {
    $tmpfile = $_FILES['file']['tmp_name'][$i];
    $filefix = array_pop(explode(".", $_FILES['file']['name'][$i]));
    $dstfile = "upload/".time()."_".mt_rand().".".$filefix;
    if (move_uploaded_file($tmpfile, $dstfile)) {
        echo $dstfile."\r\n";
    } else {
    	echo "fail\r\n";
    }
}
?>
