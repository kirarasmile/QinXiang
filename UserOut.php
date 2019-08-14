<?php
session_start();
session_unset();    //删除$_SESSION中的Session变量
session_destroy(); //销毁Session，删除Session ID
?>
header("location:login.php");