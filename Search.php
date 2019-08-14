<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人资料</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/mianstyle.css">
    <script>
        function loadXMLDoc(){
            var xmlhttp;
            if (window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();            }
            else{
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("name").innerHTML=xmlhttp.responseText;
                }
            }

            var s = document.getElementById('in').value;
            xmlhttp.open("GET","Search2.php"+"?name1="+s,true);
            xmlhttp.send();
        }
    </script>
</head>

<body>
<div class="head-box">
    <div class="head wrap">
        <div class="logo fl"><img src="images/logo.jpg" /></div>
        <div class="head-right fr">
            <div class="head-a fr">
                <div class="hgt fl"><a href=""></a><img src="images/search.png"></a></div>
                <div class="head-a3 login-click fl">注销</div>
                <div class="head-a4 reg-click fl">个人资料</div>

            </div>
            <div class="clearfix"></div>
            <div class="nav fr">
                <ul>
                    <li><a href="mian.html">首页</a></li>
                    <li  class="nav-cut"><a href="Search.php">搜索</a></li>
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
                <div class="account-title">搜索好友</div>
                <div class="tsm-box">
                    <div class="tsm-a" style="display:block;">

                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">好友：</div>
                            <div class="tsm-a3"><input id='in' type="text"onkeyup="loadXMLDoc()"></div>
                        </div>

                        <div class="tsm-a1">
                            <div class="tsm-a2 fl">结果：</div>
                            <div class="tsm-a3"><div id="name"></div></div>
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
