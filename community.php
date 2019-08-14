<?php
require_once 'Page.php';
function news($pageNum = 1, $pageSize = 3)
{
    $array = array();
    $dsn ="mysql:host=localhost;dbname=huodong";
    $db = new PDO($dsn,'root','123456');
    $db->query('set names utf8');
    $rs = $db->query("select * from comment limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize);
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    while ($obj = $rs->fetch()) {
        $array[] = $obj;
    }
    $db = null;
    return $array;
}

//显示总页数的函数
function allNews()
{
    $dsn="mysql:host=localhost;dbname=huodong";
    $db=new PDO($dsn,'root','123456');
    $db->query('set names utf8');
    $rs =$db->query( "select count(*)num  from comment"); //可以显示出总页数
    $rs->setFetchMode(PDO::FETCH_OBJ);
    $obj = $rs->fetch();
    $db=null;
    return $obj->num;
}



$allNum = allNews();
$pageSize = 5;
$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
$endPage = ceil($allNum/$pageSize);
$array = news($pageNum,$pageSize);
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>社区评论</title>
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
                    <li><a href="mian.html">首页</a></li>
                    <li><a href="Search.php">搜索</a></li>
                    <li   class="nav-cut"><a href="community.php">社区</a></li>
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
          <div class="community">
               <div class="com-fl fl">
                       <div class="hd">
                          <ul><li style="background:url(images/pianoroom26.jpg) no-repeat center center;height:289px"></li></ul>
                       </div>
                       <div class="bd"><ul></ul></div> 
               </div>
               <div class="com-fr fr">
                       <div class="com-a">
                            <div class="com-a1">社区评论中心</div>
                       </div>
                       <div class="com-b">
                           <?php
                           foreach($array as $row){ ?>
                           <a href="comment.php?id=<?= $row["id"] ?>">
                               <div class="com-b1"><?= $row["title"] ?><span>社区评论</span></div>
                               <?php
                               }
                               ?>
                               <div>
                                   <a href="?pageNum=1">首页</a>
                                   <a href="?pageNum=<?php echo $pageNum == 1 ? 1 : ($pageNum - 1)?>">上一页</a>
                                   <?php
                                   require_once "page.php";
                                   $page = new Page();
                                   echo $page->getPageList();
                                   ?>
                                   <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">下一页</a>
                                   <a href="?pageNum=<?php echo $endPage?>">尾页</a>
                               </div>
                       </div>


               </div>
          </div>
          
          <div class="ru">
                <div class="ru-fl fl">
                        <div class="ru-a">
                               <div class="ru-title">
                                       <div class="cou-b1"><img src="images/cou-b1.jpg">活动</div>
                                       <div class="ru-a1">
                                             <div class="sort">排序</div>-
                                       </div>
                                       <div class="ru-a2">
                                             <div class="dropdown">
                                                    <span>情感</span>
                                                     <ul data-value="" class="droplist">
                                                                <li data-id="1">全部</li>
                                                                <li data-id="2">服饰</li>
                                                                <li data-id="3">最新</li>
                                                                <li data-id="4">提问</li>
                                                                <li data-id="5">约会技巧</li>
                                                                <li data-id="6">热门文章</li>
                                                     </ul>
                                             </div>
                                       </div>
                               </div>
                         </div>
                         <div class="ru-b">
                                <ul>
                                    <?php
                                    foreach($array as $r){ ?>
                                    <a href="">
                                        <li>
                                            <a href="comment.php?id=<?= $r["id"] ?>">
                                                <li>
                                                    <div class="wt-fl fl">
                                                        <div class="wt-a1"><img src="images/avatar.jpg">">
                                                        </div>
                                                        <div class="wt-a2"><?= $r["name"] ?></div>
                                                    </div>
                                                    <div class="wt-fl fl">
                                                        <div class="wt-r1"><?= $r["title"] ?><em>New</em></div>
                                                    </div>
                                                    <?php
                                                    }
                                                      ?>

                                        </li></a>
                         </div>
                    <div>
                        <a href="?pageNum=1">首页</a>
                        <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>">上一页</a>
                        <?php
                        require_once"page.php";
                        $page =new Page();
                        echo $page->getPageList();
                        ?>
                        <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">下一页</a>
                        <a href="?pageNum=<?php echo $endPage?>">尾页</a>
                    </div>
                    </ul>


          </div><!--ru-fl-->

                <div class="ru-fr fr">
                       <div class="ru-c1"><a href="put.php"> 发表帖子</a></div>
                       <div class="ru-c2"><img src="images/cou-b1.jpg">热门标签</div>
                       <div class="ru-c3">
                           <span>恋爱</span>
                           <span>型男</span>
                           <span>美女</span>
                           <span>矛盾</span>
                           <span>矛盾</span>
                           <span>恋爱</span>
                           <span>型男</span>
                           <span>美女</span>
                       </div>
                     
                     </div>
                </div>
          </div><!--ru-->
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
