<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
                <div class="head-a4 reg-click fl"><a href="UserFiles.php">个人资料</a></div>

            </div>
              <div class="clearfix"></div>
              <div class="nav fr">
                  <ul>
                       <li><a href="mian.html">首页</a></li>
                       <li><a href="Search.php">搜索</a></li>
                       <li><a href="community.html">社区</a></li>
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
        <form action="User_Upload_Piano.php" method="post" enctype="multipart/form-data">
         <div class="tsm-height"></div>
         <div class="account">
                 <div class="account-title">琴房信息</div>
                 <div class="tsm-box">
                      <div class="tsm-title">填写信息
                      </div>
                      <div class="tsm-a" style="display:block;">
                                   <div class="tsm-a1">
                                         <div class="tsm-a2 fl">琴房名称：</div>
                                         <div class="tsm-a3"><input type="text" class="tsm-text1" name="pianoname"></div>
                                   </div>

                                    <div class="tsm-a1">
                                        <div class="tsm-a2 fl">上传琴房图片：</div>
                                        <div class="tsm-a3"><input name="myFile" type="file"></div>
                                    </div>

                                   <div class="tsm-a1">
                                         <div class="tsm-a2 fl">详细地址：</div>
                                         <div class="tsm-a3"><input type="text" class="tsm-text1" name="place"></div>
                                   </div>
                                    <div class="tsm-a1">
                                        <div class="tsm-a2 fl">联系方式：</div>
                                        <div class="tsm-a3"><input type="text" class="tsm-text1" name="phone"></div>
                                    </div>
                                   <div class="tsm-a1">
                                         <div class="tsm-a2 fl">租赁时间：</div>
                                         <div class="tsm-a3"><input type="text" class="tsm-text1" name="time"></div>
                                    </div>
                                    <div class="tsm-a1">
                                        <div class="tsm-a2 fl">最低租期：</div>
                                        <div class="tsm-a5"><textarea class="tsm-area" name="holdtime"></textarea></div>
                                    </div>

                                    <div class="tsm-a1">
                                         <div class="tsm-a2 fl">租赁费用：</div>
                                         <div class="tsm-a3"><input type="text" class="tsm-text1" name="money"></div>
                                   </div>

                                   <div class="tsm-a1">
                                         <div class="tsm-a2 fl">琴房备注：</div>
                                         <div class="tsm-a5"><textarea class="tsm-area" name="other"></textarea></div>
                                   </div>
                        </div>
                 </div>
                 
           
                 <div class="tsm-href"><input type="submit" class="tsm-btn" value="发布" name="submit"></div>
                 
         </div>
            </form>
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
