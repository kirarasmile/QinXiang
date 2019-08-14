<html>
<head>
    <meta charset="UTF-8">
    <title>琴房</title>
    <link rel="stylesheet" href="css/amazeui.min.css" />
    <link rel="stylesheet" href="css/admin.css" />
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

    <script type="text/javascript">
        function del (ID) {
            if (confirm("确定删除这一条？")){
                window.location = "Pianodetele.php?ID="+ID;
            }
        }
    </script>

    <?php
    function news($pageNum = 1, $pageSize = 3)
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
    $pageSize = 3; //约定每页显示几条信息
    $pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
    $endPage = ceil($allNum/$pageSize); //总页数
    $array = news($pageNum,$pageSize);
    ?>

</head>

<body>
<div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
<table border="1">

    <tr bgcolor="#e0e0e0">
        <th>ID</th><th>琴房图片</th><th width="60px">琴房名字</th><th>时间</th><th>地点</th><th width="100px">联系方式</th><th width="40px">费用</th><th width="80px">最低租期</th><th>简介</th><th width="50px">操作1</th>
    </tr>
    <?php 	//循环输出记录到页面上
    foreach($array as $row){    ?>
        <tr>
            <td><?= $row['ID']?></td>
            <td><img src="pianoRoomPicture/<?=$row['pic']?>" width="300px" height="216px" id="a"></td>
            <td><?= $row['pianoname']?></td><td><?= $row['time']?></td> <td><?= $row['place']?></td><td><?= $row['phone']?></td><td><?= $row['money']?></td><td><?= $row['holdtime']?></td><td><?= $row['other']?></td>
            <td>
                <a href='javascript:del(<?=$row['ID']?>)'>删除</a>
            </td></tr>
    <?php } ?>
</table>

<div>

    <a href="?pageNum=1">首页</a>
    <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>">上一页</a>
    <?php
    require_once 'PagePiano.php';
    $page =new Page();
    echo $page->getPageList();

    ?>
    <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">下一页</a>
    <a href="?pageNum=<?php echo $endPage?>">尾页</a>
</div>

    </div>
</div>
</body>

</html>