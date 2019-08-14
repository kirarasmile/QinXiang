<head>
<meta http-equiv="refresh" content="1;url=login.php">
</head>
<?php
session_start();
session_unset();
session_destroy();
echo "已注销登录<br>";
echo "<a href='login.php'>若无跳转，请点击此处</a>>"
?>