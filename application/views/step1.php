
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="众善，众筹，捐助，爱心，慈善，项目">
    <title>众善众筹</title>
    <link rel="stylesheet" type="text/css" href="http://www.allheart.cn/css/bootstrap3.css" />
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
                <li><a target="_self" href="http://www.allheart.cn/">首页</a></li>
                <li><a href="#">我要捐助</a></li>
                <li><a href="#">常见问题</a></li>
                <li><a href="#">关于我们</a></li>
                <li style="padding-right:10px;float:right;"><input type="button" value="登录" onclick="javascrtpt:window.location.href='http://www.allheart.cn/index.php/welcome/login'" style="width: 100px;" class="btn btn-primary" id="goin">
                </li>
                <li style="padding-right:10px;float:right;"><input type="button" value="注册" onclick="javascrtpt:window.location.href='http://www.allheart.cn/index.php/welcome/register'" style="width: 100px;" class="btn btn-primary" id="goout">
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="all">
    <div style="height: 500px;">
        <div class="pub-project">
            <div style="padding: 30px 40px 10px 40px;">
                <div id="breadcrumb" class="clearfix">
                    <ul class="crumbs">
                        <li class="one"><a style="z-index:9;" href="#" class="on"><span>1</span>填写项目信息</a></li>
                        <li><a style="z-index:8;" href="#"><span>2</span>验证发起人信息</a></li>
                        <li><a style="z-index:7;" href="#"><span>3</span>申请成功</a></li>
                    </ul>
                </div>
                <form class="pub-project-box" onsubmit="" method="post" action="http://www.allheart.cn/index.php/action/register" role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">项目名称</label>
                        <input type="text" style="height:40px;" placeholder="" name="user_name" id="user_name" class="form-control e-desc-box">
                        <span class="e-desc">最多不超过30个字、符号或数字组成</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">项目具体描述</label>
                        <textarea  style="height:270px;" placeholder="" name="pwd_repeat" id="pwd_repeat" class="form-control e-desc-box"></textarea>
                        <span class="e-desc">最多不超过300个字、符号或数字组成</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">项目图片</label>
                        <input type="submit" value="上传" style="" class="btn btn-primary btn-uploadimg">
                        <ul class="e-uploadimg">
                            <li><img src="" alt=""/></li>
                            <li><img src="" alt=""/></li>
                            <li><img src="" alt=""/></li>
                        </ul>
                        <span class="e-desc e-desc-img">请上传长宽比为5:4的图片，支持jpeg、png、bmp格式图片，最多支持3张</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">预筹资金额</label>
                        <input type="text" style="height:40px;" placeholder="" name="user_email" id="user_email" class="form-control e-count-box"> &nbsp元
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">筹集时间</label>
                        <input  style="height:40px;" placeholder="开始日期" name="user_pwd" id="user_pwd" class="form-control e-date">
                        至
                        <input  style="height:40px;" placeholder="结束日期" name="user_pwd" id="user_pwd" class="form-control e-date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">筹资说明</label>
                        <textarea  style="height:270px;" placeholder="" name="pwd_repeat" id="pwd_repeat" class="form-control e-desc-box"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">担保信息</label>
                        <input type="text" style="height:40px;" placeholder="" name="user_email" id="user_email" class="form-control e-desc-box"> &nbsp元
                    </div>
                    <input type="submit" value="下一步" style="display: block;width: 100px;margin-top: 10px; margin-left: 102px;;font-size: 16px;font-family: 微软雅黑;" class="btn btn-primary">
                </form>
            </div>


        </div>
    </div>

</div>
</body>
</html>
