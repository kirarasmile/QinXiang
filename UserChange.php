<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/amazeui.min.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <title>修改</title>
    <style>
        a{
            margin-left: 5pt;
            margin-right: 5pt;
        }
        body{
            text-align: center;
        }
        table{
            margin: auto;
            width: 40%;
            border: 1px solid black;
        }

    </style>
</head>
<body>
<?php
$getid=$_GET['id'];

?>


<div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
<form action="UserChange_2.php?id=<?=$getid?>" method="post">

    <label>用户名： </label><input name="username" type="text"  id="name2"><br/>
    <label>密码：</label><input type="text" name="password"  onkeyup="value=value.replace(/[^1234567890-]+/g,'')"  placeholder="仅可输入阿拉伯数字">(仅可输入数字)<br/>
    <label>性别：</label><input type="text" name="sex"><br/>
    <label>地址：</label><input type="text" name="adress"><br/>
    <label>email：</label><input type="text" name="email"><br/>
    <label>联系方式：</label><input type="text" name="phone"><br/>
    <label>权限：</label><input type="text" name="admin"><br/>
    <input type="submit" value="修改"  name="save"  id="sub"><br/>
</form>

        </div>
    </div>
</body>
</html>