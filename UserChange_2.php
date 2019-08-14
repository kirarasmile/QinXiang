<head>
    <!-- 以下方式定时转到其他页面 -->
    <meta http-equiv="refresh" content="1;url=AdminUserC.php">
</head>
<?php
// 处理编辑操作的页面 
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');    //连接数据库
$db->query('set names utf8');      //设置字符集


$getid2=$_GET['id'];

$username = $_POST['username'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$admin = $_POST['admin'];
// 更新数据
$rs =$db->query("UPDATE user SET username='$username',password='$password',sex='$sex',adress='$adress',email='$email',phone='$phone',admin='$admin' WHERE  id='$getid2'");

$db=null;