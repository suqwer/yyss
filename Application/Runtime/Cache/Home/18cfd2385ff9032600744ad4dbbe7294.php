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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                    <a><img src="<?php echo (session('img')); ?>"  class="img-circle" style="width: 20px;height: 20px;">&nbsp;&nbsp;<span><?php echo (session('name')); ?></span></a>
                </li>
                <li><a href="/index.php/home/user/grkj">个人空间</a></li>
                <li class="dropdown">
                    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">更多
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/index.php/home/user/mymsg">个人中心 <i class="fa fa-user"></i></a></li>
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
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                        <li ><a href="/index.php/home/user/mymsg"><i class="fa fa-home fa-fw"></i>&nbsp;首页</a></li>
                        <li ><a href="javascript:void(0)"><i class="fa fa-id-badge fa-fw"></i>&nbsp;会员积分</a></li>
                        <li  class="active"><a href="/index.php/home/user/myimg"><i class="fa fa-superpowers fa-fw"></i>&nbsp;我的头像</a></li>
                        <li><a href="/index.php/home/user/mymsginfo"><i class="fa fa-user-o fa-fw"></i>&nbsp;我的信息</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">我的头像&nbsp;<i class="fa fa-superpowers fa-fw"></i></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 text-right">
                                    <img src="<?php echo (session('img')); ?>" width=120 height=120 alt="头像" class="slia">
                                </div>
                                <div class="col-md-6 text-left" >
                                    <img src="<?php echo (session('lsimg')); ?>" width=120 height=120 alt="修改头像" class="slia">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">
                                    <form action="/index.php/home/user/upload" class="" id="" enctype="multipart/form-data" method="post">
                                        <div class="form-group is-fileinput is-empty" style="padding-bottom: 0;margin:0">
                                            
                                            <input type="file" id="inputFile2" name="photo" value="<?php echo (session('name')); ?>">
                                            <input type="text" readonly="" class="form-control" placeholder="请选择头像" style="">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">

                                </div>
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
    $('#inputFile2').on('change',function () {
       if($('#inputFile2').val()==''){

       }else{
           //$('#inputFile2').action='/index.php/home/user/upload';
           document.forms[1].submit();
       }
    });
    $("#dropdown-menu select").dropdown();
   /* $('#checkimg').on('click',function(){
        $('#checkdiv').addClass('hidden');
        $('#formcheck').removeClass('hidden');
    })
    $('#exitcheck').on('click',function(){
        $('#checkdiv').removeClass('hidden');
        $('#formcheck').addClass('hidden');
    })*/
</script>
<script>
    $.material.init();
</script>
</html>