<!DOCTYPE HTML>
<html>
<head>
    <title>登录</title>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="登录" />
    <!--Google Fonts-->
    <!--<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    --><!--Google Fonts-->
</head>
<body>
<!--header start here-->
<div class="login-form">
    <div class="top-login">
        <span><img src="images/LOGO2.png" alt=""/></span>
    </div>
    <h1>注册</h1>
    <div class="login-top">
        <form action="registerIn.php" method="post">
            <div class="login-ic">
                <i ></i>
                <input type="text" onkeyup="loadXMLDoc()"  id="register" value="账号" name="username" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i class="icon"></i>
                <input type="text"  value="密码" name="password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '密码';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i class="icon"></i>
                <input type="text"  value="再次输入密码" name="superpassword" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '再次输入密码';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i ></i>
                <input type="text"  value="性别" name="sex" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i ></i>
                <input type="text"  value="地址" name="adress" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i ></i>
                <input type="text"  value="email" name="email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i ></i>
                <input type="text"  value="联系方式" name="phone" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                <div class="clear"> </div>
            </div>
            <div class="log-bwn">
                <input type="submit"  value="提交"  name="submit">
            </div>
        </form>
    </div>
    <p class="copy">© 2019.7.11<a href="" target="_blank">琴享</a></p>
</div>
<!--header start here-->
</body>
</html>