<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>琴房</title>
<link rel="stylesheet" href="评论css/base.css">
<link rel="stylesheet" href="评论css/style.css">
</head>

<body>
<div class="head-box">
    <div class="head wrap">
          <div class="logo fl"><img src="images/1.png" /></div>
          <div class="head-right fr">
              <div class="head-a fr">
                   <div class="hgt fl"><img src="images/hgt.png">
                         <div class="hgt-top">
                             <input type="text" class="hgt-text">
                         </div>
                   </div>
                   <div class="head-a1 fl"><a href=""><img src="images/tb-a.png"></a></div>
                   <div class="head-a1 fl"><a href=""><img src="images/tb-b.png"></a></div>
                   <div class="head-a3 login-click fl">登录</div>
                   <div class="head-a4 reg-click fl">注册</div>
              
              </div>
              <div class="clearfix"></div>
              <div class="nav fr">
                  <ul>
                      <li><a href="index.html">首页</a></li>
                      <li><a href="#">搜索</a></li>
                      <li><a href="#">社区</a></li>
                      <li><a href="Huodong.php">活动</a></li>
                      <li><a href="Piano.php">琴房</a></li>
                      <li><a href="contact.html">联系我们</a></li>
                  </ul>
              </div>
              <div class="clearfix"></div>
          </div>
    </div>
</div>
<?php
require 'PianoShareInside2.php';
?>
<div class="footer">
   <div class="wrap">
      <div class="foot">
            <div class="foot-left fl">
                 <a href="">关于我们</a>
                 <a href="">加入我们</a>
                 <a href="contact.html">联系我们</a>
                 <a href="">媒体采访</a>
            </div>
            <div class="foot-c fl"><img src="alien_50.268199233716px_1233831_easyicon.net.png" /></div>
            <div class="foot-right fr">
                 <a href="">同城活动</a>
                 <a href="">课程资讯</a>
                 <a href="">最新发布</a>
                 <a href="">热门文章</a>
            </div>
       </div> 
          
   </div>
</div>


<!--登录注册弹窗-->
<div class="mask"></div>
<div class="login">
    <div class="login-title">
        <div class="login-a">登录</div>
        <div class="login-b"></div>
        <div class="login-c close">x</div>
    </div>
    <div class="login-btm">
        <div class="login-d"><input type="text" class="login-text" placeholder="注册时填写的邮箱"></div>
        <div class="login-d"><input type="password" class="login-pas" placeholder="密码"></div>
        <div class="login-d"><input type="button" class="login-btn" placeholder="登录"></div>
        <div class="login-f">
             <a href="">忘记密码</a>
             <span>还没有焦点账号?><a href="javascript:;" class="reg-href">点击注册</a></span>
        </div>
    </div>
</div>

<div class="reg">
    <div class="login-title">
        <div class="login-a">注册</div>
        <div class="login-b"></div>
        <div class="login-c close">x</div>
    </div>
    <div class="login-btm">
        <div class="login-d"><input type="text" class="login-text" placeholder="邮箱/手机号"></div>
        <div class="login-d"><input type="password" class="login-pas" placeholder="密码"></div>
        <div class="login-d"><input type="button" class="login-btn" placeholder="注册"></div>
        <div class="login-f">
             <a href="">忘记密码</a>
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
