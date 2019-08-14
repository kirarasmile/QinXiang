<html>
<head>
    <meta charset="utf-8">
    <title>分页</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/mianstyle.css">
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
            width: 80%;
            border: 1px solid black;
        }

    </style>

    <?php
    function news($pageNum = 1, $pageSize = 4)
    {
        $array = array();
        $dsn="mysql:host=localhost;dbname=huodong";
        $db=new PDO($dsn,'root','123456');    //连接数据库
        $db->query('set names utf8');      //设置字符集
        // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
        $rs =$db->query( "select * from HDmain limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize);
        $rs->setFetchMode(PDO::FETCH_ASSOC);
        while ($obj = $rs->fetch()) {
            $array[] = $obj;
        }
        $db=null;
        return $array;
    }

    function allNews()
    {
        $dsn="mysql:host=localhost;dbname=huodong";
        $db=new PDO($dsn,'root','123456');    //连接数据库
        $db->query('set names utf8');      //设置字符集
        $rs =$db->query( "select count(*)num  from HDmain"); //可以显示出总页数
        $rs->setFetchMode(PDO::FETCH_OBJ);
        $obj = $rs->fetch();
        $db=null;
        return $obj->num;
    }

    $allNum = allNews();
    $pageSize = 4; //约定每页显示几条信息
    $pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
    $endPage = ceil($allNum/$pageSize); //总页数
    $array = news($pageNum,$pageSize);
    ?>
</head>

<body>

<div class="cou-c">
    <ul>
        <?php
        foreach($array as $row){    ?>
            <li>
                <div class="kil-fl fl"><a href=<?=$row['url']?>><img src="musicialActivityPicture/<?= $row['pic']?>"></a></div>
                <div class="kil-fr fl">
                    <div class="kil-r1"><a href=<?=$row['url']?>><?=$row['name']?></a></div>
                </div>
            </li>
        <?php } ?>
    </ul>

</div>
<div class="page m-48">
    <a href="?pageNum=1">首页</a>
    <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>"><</a>
    <?php
    require_once 'UserPageHuodong.php';
    $page =new Page();
    echo $page->getPageList();

    ?>
    <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">></a>
    <a href="?pageNum=<?php echo $endPage?>">尾页</a>
</div>

</body>

</html>