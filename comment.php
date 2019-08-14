<?php
header("content-type:text/html;charset=utf-8");
session_start();
include("config.php");
require("cont.php");
    $id = $_GET["id"];
    $_SESSION["id"] = $id;
    $result = $db->query("select title,comment,picture from comment where id='$id';");
    $result->setFetchMode(PDO :: FETCH_ASSOC);
?>


<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>社区中心</title>
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
                <div class="head-a4 reg-click fl"><a href="UserFiles.php">资料</a></div>

            </div>
            <div class="clearfix"></div>
            <div class="nav fr">
                <ul>
                    <li><a href="index.html">首页</a></li>
                    <li><a href="#">搜索</a></li>
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
        <div class="art-height"></div>
        <div class="post">
            <div class="post-fl fl">
                <?php
                while($row=$result->fetch()) {
                    ?>
                    <div class="post-a1"><?= $row["title"]?></div>
                    <div class="post-a4"><img src="sayPic/<?=$row["picture"] ?>"></div>
                    <div class="post-b">
                        <p><?= $row["comment"]?></p>
                    </div>
                <?php
                }
                ?>

                <div class="det-b">
                    <div class="det-title"><img src="images/cou-b1.jpg">在线评论</div>
                    <?php
                    include("cont.php");
                    ?>
                    <form action="cont.php" method="post">
                    <div class="det-b1">
                        <textarea class="det-area post-area" name="txt"></textarea>
                    </div>
                    <div class="det-b3"><input type="submit" name="sub" class="det-btn" value="发表"></div>
                </div>
                </form>
                <div class="skt">
                    <div class="skt-title">
                        <span class="skt-cut"><span>最新评论</span>
                    </div>
                    <div class="skt-tab">
                        <div class="skt-btm">
                            <ul class="skt-ul">
                                <li>

                                        <div class="menu"><img src="images/avatar.jpg"></div>

                        <?php
                        include("output.php");
                        $a = output();
                        foreach($a as $v) {
                            ?>
                            <div class="skt-a2"><?= $v["say"] ?></div>
                        <?php
                        }
                        ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                        <div class="skt-btm hide">

                        </div>
                    </div>
                </div>
            </div><!--post-fl-->
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

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/Action.js"></script>
<script>
    $(".skt-title span").click(function(){
        $(this).addClass("skt-cut").siblings().removeClass("skt-cut"),
            $(".skt-tab .skt-btm").hide().eq($(".skt-title span").index(this)).show()
    })
</script>
</body>
</html>

