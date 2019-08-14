<?php

session_start();
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');    //连接数据库
$db->query('set names utf8');      //设置字符集
$result=$db->query("select username,password,admin from user ");
if(isset($_POST['sub'])){
    $_SESSION['username']=$_POST['username'];
    $a=1;//0和1 表示yes和no 1表示用户不存在
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $result->fetch()){
        if($_POST['username']==$row['username']){
            $password=$row['password'];
            $admin=$row['admin'];
            $a=0;}
    }
    if($a==0){
        if($password===$_POST['password']){
            if($admin==1){
                echo "<h1>欢迎您，管理员".$_SESSION['username']."</h1>";
                $_SESSION['door']=1;
                ?>
                <meta http-equiv="refresh" content="1;url=index.html">
                <?php
            }else{
                echo "<h1>欢迎您，".$_SESSION['username']."</h1>";
                $_SESSION['door']=1;
                     ?>
                <meta http-equiv="refresh" content="1;url=mian.html">
            <?php
            }
        }else{
            echo "<h2>用户名或密码错误！</h2>";
            ?>
            <meta http-equiv="refresh" content="1;url=login.php">
        <?php
        }
    }else{
        echo "<h2>用户名不存在</h2>";
        ?>
        <meta http-equiv="refresh" content="1;url=login.php">
        <?php
    }
}
else{
    if(isset($_SESSION['door'])&&$_SESSION['door']==1){
        echo "<h1>欢迎您，".$_SESSION['username']."</h1>";
    }
    else{
        echo "<h2>未登录用户不予许访问！</h2>";
    }
}
$db=null;
?>