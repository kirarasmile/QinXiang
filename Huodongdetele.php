<head>
    <!-- 以下方式定时转到其他页面 -->
    <meta http-equiv="refresh" content="1;url=adminhuodong.php">
</head>
<?php
// 处理删除操作的页面
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');    //连接数据库
$db->query('set names utf8');      //设置字符集


$urlid = $_GET['urlid'];
//删除指定数据  
$rs =$db->query("DELETE FROM HDmain WHERE urlid={$urlid}") ;
$rs->setFetchMode(PDO::FETCH_ASSOC );


?>