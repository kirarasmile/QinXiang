<?php
if(isset($_POST["sub"])){
    session_start();
        $id = $_SESSION["id"];
        $say = $_POST["txt"];
        $dsn = "mysql:host=localhost;dbname=huodong";
        $db = new PDO($dsn, 'root', '123456');
        $db->query('set names utf8');
        $db->exec("insert into say(id,say)values('$id','$say')");
        $db = null;
        header("Location:comment.php?$id");
}