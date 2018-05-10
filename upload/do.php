<?php
session_start();
if (isset($_SESSION["user"])) {
    die("Please Log In");
}

$file = $_FILES["file"];

$error = $file["error"];

if ($error == 0) {
    $filename = $file["name"];
    $type = $file["type"];
    $tmp_name = $file["tmp_name"];
    $size = $file["size"];
    
    if (is_uploaded_file($filename)) {
        exit();
    }
    
    move_uploaded_file($tmp_name, "file/" . $filename);
    
    echo "Upload Success" . "<br />";
    $s = "file\\" . $filename;
    echo "<a href=\"" . $s . "\">" . $filename . "</a>";
    
    // $allowext=array('jpeg','jpg','png','gif');
    // $ext=pathinfo($filename,PATHINFO_EXTENSION);
    
    // if (!in_array($ext, $allowext)){
    // exit();
    // }
} else {
    
    /*
     * 0 成功
     * 1 超过upload_max_filesize
     * 2 超出max_file_size
     * 3 只有部分被上传
     * 4 没有文件被上传
     * 6 找不到临时文件
     * 7 文件写入失败
     * 8 上传的文件被php拓展程序中断
     *
     */
    
    switch ($error) {
        case 1:
            echo "Over limit upload_max_filesize";
            break;
        case 2:
            echo "Over limit max_file_size";
            break;
        case 3:
            echo "Only part of it is uploaded";
            break;
        case 4:
            echo "No files are uploaded";
            break;
        case 6:
            echo "No temporary file can be found";
            break;
        case 7:
            echo "File write failure";
            break;
        case 8:
            echo "System Error";
            break;
    }
}


/*
if (isset($_FILES["file"])) {
    
    $filename = $_FILES["file"]["name"];
    $type = $_FILES["file"]["type"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $size = $_FILES["file"]["size"];
    $error = $_FILES["file"]["error"];
    
    move_uploaded_file($tmp_name, "file/" . $filename);
}

*/





