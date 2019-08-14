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


</head>

<body>

<div class="am-cf admin-main">
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-g">
                <form class="am-form am-form-horizontal" action="Admin_Upload_Huodong.php" method="post" style="padding-top: 30px;" enctype="multipart/form-data">
                    <input value="504" name="roleId" type="hidden">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            演出信息
                        </label>
                        <div class="am-u-sm-9">
                            <input type="text"  name="name"placeholder="演出名称">
                            <small id="helpRole">请输入演出的名称</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            链接地址
                        </label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tsm-text1" name="url" placeholder="目标链接" >
                            <small>请输入目标演出的地址</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            上传图片
                        </label>
                        <div class="am-u-sm-9">
                            <input name="myFile" type="file" placeholder="上传图片" >
                            <small>请上传图片</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">
                            备注
                        </label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tsm-text1" name="other" placeholder="备注" >
                            <small>请输入备注</small>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <input  type="submit" class="tsm-btn" value="分享" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>