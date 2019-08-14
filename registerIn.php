<?php
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');    //连接数据库
$db->query('set names utf8');      //设置字符集
$result=$db->query("select username,password,sex,adress,email,phone,admin from user ");
$a=1;//用户不存在
if(isset($_POST["submit"])){
    if($_POST['password']==$_POST['superpassword']){//密码与再次确定的密码相等
        while($row = $result->fetch()){
            if($_POST['username']==$row['username']){
                $a=0;
            }  }
        if($a==0){
            echo "<script>alert('用户名已存在，请重新输入！')</script>";
        }
        else{
            $username=$_POST["username"];$password=$_POST["password"];$sex=$_POST['sex'];$adress=$_POST['adress'];$email=$_POST["email"];$phone=$_POST["phone"];
            $sql="INSERT INTO user (username,password,sex,adress,email,phone,admin)values('$username','$password','$sex','$adress','$email','$phone',0)";
            $db->exec($sql);
            header("location:login.php");
        }
    }
    else{
        echo "<script>alert('两次密码不同，请重新注册！')</script>";
    }
}
$db=null;
?>