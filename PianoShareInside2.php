<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>琴房</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/mianstyle.css">
</head>

<?php
$ID=$_GET['ID'];
$dsn="mysql:host=localhost;dbname=huodong";
$db=new PDO($dsn,'root','123456');    //连接数据库
$db->query('set names utf8');      //设置字符集
$result=$db->query("select pic,pianoname,time,place,phone,money,holdtime,other from piano where ID=$ID");
?>
<body>

<div class="content">
    <div class="wrap">
        <?php $result->setFetchMode(PDO::FETCH_ASSOC);

        while($row=$result->fetch()){ ?>
            <div class="tsm-height"></div>
            <div class="det">

                <div class="det-fl fl"><img src="pianoRoomPicture/<?=$row['pic'];?>"></div>
                <div class="det-fr fl" >
                    <div class="det-r1"><?=$row['pianoname'];?> </div>
                    <div class="det-r2"></div>
                    <div class="det-r2">时间：<?=$row['time'];?></div>
                    <div class="det-r2">地点：<?=$row['place'];?></div>
                    <div class="det-r2">联系方式：<?=$row['phone'];?></div>
                    <div class="det-r2">费用：<?=$row['money'];?></div>
                    <div class="det-r2">最低租期：<?=$row['holdtime'];?></div>
                </div>
            </div>

            <div class="det-a">
                <div class="det-title"><img src="images/det-c.jpg">琴房介绍</div>

                <p><?=$row['other'];?></p>


            </div>

        <?php }?>

        <div class="det-b">
            <div class="det-title"><img src="images/det-c.jpg">在线评论</div>
            <div class="det-b1">
                <textarea class="det-area"></textarea>
                <div class="det-b2"><a href="">登录</a>发表</div>
            </div>
            <div class="det-b3"><input type="button" class="det-btn" value="发表"></div>
        </div>

        <div class="skt">
            <div class="skt-title">
                <span class="skt-cut">默认评论</span><em>|</em><span>最新评论</span>
            </div>
            <div class="skt-tab">
                <div class="skt-btm">
                    <ul class="skt-ul">
                        <li>
                            <div class="skt-a1"><img src="upload/det-tx.jpg">2015-11-02
                                <div class="menu"><a href=""><img src="images/menu.jpg"></a></div></div>
                            <div class="skt-a2">怎么报名啊？直接交钱吗？</div>
                            <div class="skt-a3"><a href=""><img src="upload/det-b.jpg">我要点评</a>
                                <div class="menu-a"><img src="images/menu-a1.jpg">0
                                    <span><img src="images/menu-a2.jpg">0</span></div>
                            </div>
                        </li>

                        <li>
                            <div class="skt-a1"><img src="upload/det-tx.jpg">2015-11-02
                                <div class="menu"><a href=""><img src="images/menu.jpg"></a></div></div>
                            <div class="skt-a2">怎么报名啊？直接交钱吗？</div>
                            <div class="skt-a3"><a href=""><img src="upload/det-b.jpg">我要点评</a>
                                <div class="menu-a"><img src="images/menu-a1.jpg">0
                                    <span><img src="images/menu-a2.jpg">0</span></div>
                            </div>
                        </li>
                    </ul>
                    <div class="skt-more"><a href="">查看更多</a></div>
                </div>

                <div class="skt-btm hide">
                    222
                </div>
            </div>
        </div>
    </div>
</div>
</body>