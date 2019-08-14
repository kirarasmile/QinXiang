<?php
header("content-type:text/html;charset=utf-8");
require("config.php");
$type = 0;
if( isset($_POST['save']) ) {
    $filename = $_FILES['myFile']['name'];
    $type     = $_FILES['myFile']['type'];
    $tmp_name = $_FILES['myFile']['tmp_name'];
    $size     = $_FILES['myFile']['size'];
    $error    = $_FILES['myFile']['error'];
    $title =$_POST["title"];
    $message = $_POST['message'];

    if ($error > 0) {
        switch ($error) {
            case 1:
                $info =
                    "上传得文件超过了 php.ini中upload_max_filesize 选项中的最大值.";
                break;
            case 2:
                $info = "上传文件大小超过了html中MAX_FILE_SIZE 选项中的最大值.";
                break;
            case 3:
                $info = "文件只有部分被上传";
                break;
            case 4:
                $info = "找不到临时文件夹.";
                break;
            case 5:
                $info = "文件写入失败！";
                break;
        }
        die("上传文件错误,原因:" . $info);
    }

//3.过滤上传文件的类型
    $typelist = array("image/jpeg",
        "image/jpg", "image/png");//定义允许的类型
    if (!in_array($type, $typelist)) {
        die("上传文件类型非法!" . $type);
        exit;
    }

//4.本次上传文件大小的过滤（自己选择）
    if ($size > 5*1024*1024) {
        die("上传文件大小超出5M");
        exit;
    }
    $date=date('Ymdhis');
    $path = "sayPic";
    if (!(file_exists($path))) {
        if (!mkdir($path, 0777))    //在当前目录中创建path目录
            echo "服务器崩溃，稍后重试";
    }
    $filename=$date.".".pathinfo($filename)['extension'];
    $path .= "/" . $filename;
    if (is_uploaded_file($tmp_name)) {
        if (move_uploaded_file($tmp_name,$path)) {
            require("config.php");
            $sql="insert into comment (comment,title,picture)values('$message','$title','$filename')";
            $db->exec($sql);
            $type = 1;
            ?>
            <meta http-equiv="refresh" content="1;url=community.php">
            <?php

        } else {
            die("上传文件失败！");
        }
    } else {
        die("不是一个上传文件!");
    }

}
else
    echo "页面错误";

?>