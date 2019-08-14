<head>
    <!-- 以下方式定时转到其他页面 -->
    <meta http-equiv="refresh" content="1;url=mian.html">
</head>
<?php
session_start();
$oldusername=$_SESSION['username'];
// 处理编辑操作的页面 
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');    //连接数据库
$db->query('set names utf8');      //设置字符集
$rs2=$db->query("select id from user where username='$oldusername'");
$rs2->setFetchMode(PDO::FETCH_ASSOC);
while($row=$rs2->fetch()){
    $id=$row['id'];
}
$username = $_POST['username'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// 更新数据
$rs =$db->query("UPDATE user SET username='$username',password='$password',sex='$sex',adress='$adress',email='$email',phone='$phone' WHERE  id='$id'");

$db=null;