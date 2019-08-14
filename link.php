<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
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
            function del (id) {
                if (confirm("确定删除这一条？")){
                    window.location = "detele.php?id="+id;
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
        $pageSize = 3; //约定每页显示几条信息
        $pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
        $endPage = ceil($allNum/$pageSize); //总页数
        $array = news($pageNum,$pageSize);
        ?>
	</head>

	<body>
		<div class="admin-content-body">
			<div class="am-cf am-padding am-padding-bottom-0">
                <table>

                    <tr bgcolor="#e0e0e0">
                        <th>ID</th><th>活动图片</th> <th>活动名称</th><th>活动链接</th><th>备注</th><th>操作1</th>
                    </tr>
                    <?php 	//循环输出记录到页面上
                    foreach($array as $row){    ?>
                        <tr>
                            <td><?= $row['urlid']?></td>
                            <td><img src="images/<?=$row['pic']?>" width="300px" height="216px" id="a"></td>
                            <td><?= $row['name']?></td><td><?= $row['url']?></td> <td><?= $row['other']?></td>
                            <td>
                                <a href='javascript:del(<?=$row['id']?>)'>删除</a>
                            </td></tr>
                    <?php } ?>
                </table>

                <div>

                    <a href="?pageNum=1">首页</a>
                    <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>">上一页</a>
                    <?php
                    require_once 'PageHuodong.php';
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