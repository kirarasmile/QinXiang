<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人资料</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/mianstyle.css">
</head>

<body>
<div class="head-box">
    <div class="head wrap">
        <div class="logo fl"><img src="images/logo.jpg" /></div>
        <div class="head-right fr">
            <div class="head-a fr">
                <div class="hgt fl"><a href=""></a><img src="images/search.png"></a></div>
                <div class="head-a3 login-click fl"><a href="LogOut.php">注销</div>
                <div class="head-a4 reg-click fl">个人资料</div>

            </div>
            <div class="clearfix"></div>
            <div class="nav fr">
                <ul>
                    <li><a href="index.html">首页</a></li>
                    <li><a href="Search.php">搜索</a></li>
                    <li><a href="community.php">社区</a></li>
                    <li><a href="Huodong.php">活动</a></li>
                    <li><a href="Piano.php">琴房</a></li>
                    <li><a href="contact.html">联系我们</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="content">
    <div class="wrap">
        <form action="UserChangeItself.php" method="post">
        <div class="tsm-height"></div>
            <div class="account">
                <div class="account-title">账户设置</div>
                <div class="tsm-box">
                    <div class="tsm-title">个人资料
                    </div>
                    <div class="tsm-a" style="display:block;">
                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">用户名：</div>
                            <div class="tsm-a3"><input name="username" type="text" class="tsm-text1"></div>
                        </div>

                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">密码：</div>
                            <div class="tsm-a3"><input name="password" type="text" class="tsm-text1"></div>
                        </div>

                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">性别：</div>
                            <div class="tsm-a3"><input name="sex" type="sex" class="tsm-text1"></div>
                        </div>

                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">所在城市：</div>
                            <div class="tsm-a3"><input name="adress" type="text" class="tsm-text1"></div>
                        </div>

                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">email：</div>
                            <div class="tsm-a3"><input name="email" type="text" class="tsm-text1"></div>
                        </div>
                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">联系方式：</div>
                            <div class="tsm-a3"><input name="phone" type="text" class="tsm-text1"></div>
                        </div>
                    </div>
                </div>
                <div class="tsm-href"><input type="submit" name="sub" class="tsm-btn" value="保存"></div>
                    </div>
                    </form>
                </div>
            </div>

    </div>

    <div class="footer">
        <div class="wrap">
            <div class="foot">
                <div class="foot-left fl">
                    <a href="">关于我们</a>
                    <a href="contact.html">联系我们</a>
                </div>
                <div class="foot-c fl"><img src="images/logo.jpg" /></div>
                <div class="foot-right fl">
                    <a href="">同城活动</a>
                    <a href="">课程资讯</a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
