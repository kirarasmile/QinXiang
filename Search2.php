<?php
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');
$db->query('set names utf8');
$s = $_GET['name1'];
$result=$db->query("select username,phone from user WHERE username LIKE '$s%'");
$result->setFetchMode(PDO::FETCH_ASSOC);
echo '好友';
while($a = $result->fetch()){
    echo '姓名:'.$a["username"].'><';
    echo '联系方式:'.$a["phone"].'</br>';
}
