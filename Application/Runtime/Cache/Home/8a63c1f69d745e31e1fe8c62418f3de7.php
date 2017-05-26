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
                    <a><img src="<?php echo (session('img')); ?>"  class="img-circle" style="width: 20px;height: 20px;"><span><?php echo (session('name')); ?></span></a>
                </li>
                <li><a href="/index.php/home/user/grkj">个人空间</a></li>
                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">更多
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/index.php/home/user/mymsg">个人信息 <i class="fa fa-user"></i></a></li>
                        <li><a href="/index.php/home/user/myletter">私信中心</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="/index.php/Home/user/logout" class="sli">注销 <i class="fa fa-sign-out "></i></a></li>
                    </ul>
                </li>
            </ul>
诗静雨
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
                                    <img src="<?php echo (session('img')); ?>" alt="..." style="width: 100px;height: 100px;" class="img-circle ">
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
                        <div class="col-md-4">
                            <a href="javascript:void(0)" class="btn btn-default">我的粉丝&nbsp;&nbsp;<span class="badge">42</span></a>
                            <a href="javascript:void(0)" class="btn btn-default">我关注的人&nbsp;&nbsp;<span class="badge">11</span></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>我最近的发帖</h4>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>我的爱好</h4>
                            <a href=""><span class="label label-default">篮球</span></a>
                            <a href=""><span class="label label-default">LOL</span></a>
                            <a href=""><span class="label label-info">Info</span></a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <i class="fa fa-address-card"></i>
                                    &nbsp;<span><?php echo (session('id')); ?></span>

                                </div>
                                <div class="col-md-6">
                                    <i class="fa fa-clock-o"></i>
                                    &nbsp;<span>注册于：<?php echo (session('create_time')); ?></span>
                                </div>
                                <br>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <i class="fa fa-birthday-cake"></i>
                                    &nbsp;<a href="/index.php/home/user/mymsginfo"><span><?php echo (session('briad')); ?></span></a>
                                </div>
                                <div class="col-md-6 text-center">
                                    <i class="fa fa-map-marker"></i>
                                    &nbsp;<a href="/index.php/home/user/mymsginfo"><span><?php echo (session('address')); ?></span></a>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
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