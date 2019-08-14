<?php
function output(){
    $array =array();
    $dsn = "mysql:host=localhost;dbname=huodong";
    $db = new PDO($dsn, 'root', '123456');
    $db->query('set names utf8');
    $rs = $db->query("select * from say");
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    while($obj = $rs->fetch()){
        $array[] = $obj;
    }
    $db = null;
    return $array;
}