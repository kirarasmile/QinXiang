<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>琴房分享</title>
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
                      <li><a href="community.php">社区</a></li>
                      <li><a href="Huodong.php">活动</a></li>
                      <li  class="nav-cut"><a href="Piano.php">琴房</a></li>
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
         <div class="act-banner">
                 <div class="hd">
                      <ul><li style="background:url(images/piano_head1.jpg) no-repeat center center;height:315px"></li></ul>
                 </div>
                 <div class="bd"><ul></ul></div>      
           </div>
           
           <div class="act-a">
                 <div class="act-a1 mr-20 fl">
                           <div class="act-a-img"><img src="images/piano_headdown1.jpg">
                                                  <div class="inside"><div class="ins-a"><a href="active-details.php">查看</a></div></div>
                           </div>
                           <div class="act-a2"></div>
                           
                 </div>
                 
                 <div class="act-a1 fl">
                           <div class="act-a-img"><img src="images/piano_headdown2.jpg">
                                                 <div class="inside"><div class="ins-a"><a href="active-details2.html">查看</a></div></div>
                           </div>
                           <div class="act-a2"></div>
                           
                 </div>
           
           </div>
        <?php
        require 'PianoShare.php';     //调用PianoShare.php文件实现分页显示
        ?>
		<div><div class="fabu"><a href="PianoFabu.php">发布</a></div></div>
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
