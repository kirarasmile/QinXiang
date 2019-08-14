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
        $rs =$db->query( "select * from piano limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize);
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
        $rs =$db->query( "select count(*)num  from piano"); //可以显示出总页数
        $rs->setFetchMode(PDO::FETCH_OBJ);
        $obj = $rs->fetch();
        $db=null;
        return $obj->num;
    }

    $allNum = allNews();
    $pageSize = 6; //约定每页显示几条信息
    $pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
    $endPage = ceil($allNum/$pageSize); //总页数
    $array = news($pageNum,$pageSize);
    ?>
</head>

<body>

<div class="act-b">
    <ul class="act-ul">
        <?php
        foreach($array as $row){    ?>
            <a href="PianoShareInside.php?ID=<?=$row['ID']?>"><li>           <!--  此处使用由服务器获取的对应琴房的ID作为页面的索引  -->
                    <div class="act-b1"><img src="pianoRoomPicture/<?= $row['pic']?>"></div>
                    <div class="act-a2"><?=$row['pianoname']?></div>
                </li></a>
        <?php } ?>
    </ul>
</div>
<div class="page m-48">
    <a href="?pageNum=1">首页</a>
    <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>"><</a>
    <?php
    require_once 'User_PagePiano.php';
    $page =new Page();
    echo $page->getPageList();

    ?>
    <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">></a>
    <a href="?pageNum=<?php echo $endPage?>">尾页</a>
</div>

</body>

</html>