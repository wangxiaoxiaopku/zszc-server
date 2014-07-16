
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="众善，众筹，捐助，爱心，慈善，项目">
    <title>众善众筹</title>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base;?>css/main.css" />
    <script type="text/javascript" src="<?php echo $base;?>main.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="topimg">
    <div style="width:100%;min-width:1024px;">
        <ul class="userinfo">
            <li style="padding-right: 15px;"><a href="#" ></a></li>
            <li id="logout" class="logout"><a href=http://www.allheart.cn/index.php/action/logout >退出</a></li>
        </ul>
    </div>
</div>
<div class="top">

    <div class="topbar1">
        <div class="logoimg"><span><img alt="众善LOGO" src="<?php echo $base;?>img/allheart/logo.png.jpg"></span></div>
        <div class="logoinfo">
            <ul style="font-size: 15px;padding-top: 15px;font-weight: bold;" class="nav nav-pills">
                <li><a target="_self" href="http://www.allheart.cn/">登录</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="all">
    <div style="height: 500px;">
        <div class="b-login">
            <div class="b-con">
                <span class="forum-title">我要登录</span>
                <form class="pub-project-box" onsubmit="" method="post" action="http://www.allheart.cn/index.php/action/register" role="form">
                    <div class="form-group">
                        <input type="text" style="height:40px;" placeholder="用户名" name="user_name" id="user_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" style="height:40px;" placeholder="登录密码" name="user_email" id="user_email" class="form-control">
                    </div>
                    <input type="submit" value="登录" style="display: block;margin-top: 10px;font-size: 16px;font-family: 微软雅黑;" class="btn btn-primary e-login-btn">
                </form>
            </div>


        </div>
    </div>
</div>
</body>
</html>
