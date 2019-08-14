<?php
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');
$db->query('set names utf8');