<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>演出分享</title>
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
                <div class="head-a3 login-click fl"><a href="LogOut.php">注销</a></div>
                <div class="head-a4 reg-click fl"><a href="UserFiles.php">资料</div>

            </div>
            <div class="clearfix"></div>
            <div class="nav fr">
                <ul>
                    <li><a href="mian.html">首页</a></li>
                    <li><a href="Search.php">搜索</a></li>
                    <li><a href="community.php">社区</a></li>
                    <li  class="nav-cut"><a href="Huodong.php">活动</a></li>
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
        <div class="tsm-height"></div>
        <div class="course-banner"><img src="images/pianoroom26.jpg"></div>
        <div class="cou-a">
            <ul>
                <li><div class="cou-a1"><img src="images/concert28.jpg">
                        <div class="cou-inside"><div class="cou-href"><a href="">查看</a></div></div>
                    </div>
                    <div class="act-a2">致舒伯特 ·殷承宗钢琴独奏音乐会</div>
                </li>

                <li><div class="cou-a1"><img src="images/concert29.jpg">
                        <div class="cou-inside"><div class="cou-href"><a href="">查看</a></div></div>
                    </div>
                    <div class="act-a2">节奏之狂 余乐领衔不列颠打击乐旋风</div>
                </li>

                <li><div class="cou-a1"><img src="images/concert30.jpg">
                        <div class="cou-inside"><div class="cou-href"><a href="">查看</a></div></div>
                    </div>
                    <div class="act-a2">星海音乐厅2019年度音乐大赏 西蒙·拉特尔与伦敦交响乐团音乐会</div>
                </li>
            </ul>
        </div>

        <div class="cou-b">
            <div class="cou-b-title">
                <div class="cou-b1"><img src="images/cou-b1.jpg">演出</div>
                <div class="cou-b2">
                    <div class="sort">排序</div>
                </div>
                <div class="cou-b3">
                    <div class="dropdown">
                        <span>所有演出</span>
                        <ul data-value="" class="droplist">
                            <li data-id="1">动漫</li>
                            <li data-id="2">情感</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require 'HuodongShare.php';     //调用文件实现分页显示
        ?>

        <div><div class="fabu"><a href="HuodongFabu.php">分享</a></div></div>
    </div>
</div>

<div class="footer">
    <div class="wrap">
        <div class="foot">
            <div class="foot-left fl">
                <a href="contact.html">联系我们</a>
                <a href="">媒体采访</a>
            </div>
            <div class="foot-c fl"><img src="images/logo.jpg" /></div>
            <div class="foot-right fl">
                <a href="">最新发布</a>
                <a href="">热门文章</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>
