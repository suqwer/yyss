<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/Public/static/css//bootstrap.min.css">
    <link rel="stylesheet" href="/Public/static/css//bootstrap-material-design.min.css">
    <link rel="stylesheet" href="/Public/static/css//ripples.min.css">
    <link rel="stylesheet" href="/Public/static/css//userhomepage.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-info">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">Brand</a>
        </div>
        <div class="navbar-collapse navbar-responsive-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/index.php/home/index/dome">园艺山主页</a></li>
                <li><a href="javascript:void(0)">链接</a></li>
                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">更多选项
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group is-empty">
                    <input type="text" class="form-control col-md-8" placeholder="查询相关信息">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a><img src="/public/static/img//jt.png"  class="img-circle" style="width: 20px;height: 20px;"><span><?php echo (session('name')); ?></span></a>
                </li>
                <li><a href="/index.php/home/user/grxx">个人主页</a></li>
                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">更多
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">个人信息 <i class="fa fa-user"></i></a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="/index.php/Home/user/logout" class="sli">注销 <i class="fa fa-sign-out "></i></a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-5 ">
                                    <img src="/public/static/img//jt.png" alt="..." style="width: 100px;height: 100px;" class="img-circle ">
                                </div>

                                <div class="col-md-7">
                                    <div class="row">
                                        <h2><?php echo (session('name')); ?></h2>
                                    </div>
                                    <div class="row">

                                        <input class="sgin" type="text" placeholder="编辑个性签名" maxlength="60" value="<?php echo (session('indivi')); ?>">
                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-body">
                    <h2></h2>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/Public/static/js//jquery-2.2.3.min.js"></script>
<script src="/Public/static/js//bootstrap.min.js"></script>
<script src="/Public/static/js//material.min.js"></script>
<script src="/Public/static/js//ripples.min.js"></script>
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
    var insg=$('.sgin').val();
    $('.sgin').on('focus',function () {
       $('.sgin').css('color','black');

    });
    $('.sgin').on('blur',function () {
        var indivi=$('.sgin').val();
        //var insg={};
        if(insg==indivi){
            console.log(111);
        }else{
            $.ajax();
        }
        $('.sgin').css('color','#d6dee4');



    });

</script>
<script>
    $("#dropdown-menu select").dropdown();
</script>
<script>
    $.material.init();
</script>
</html>