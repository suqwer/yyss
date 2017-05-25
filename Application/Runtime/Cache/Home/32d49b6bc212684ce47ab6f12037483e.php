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
                        <li><a href="/index.php/home/user/myletter">私信中心</a></li>
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
                       <li class="active"><a href="/index.php/home/user/mymsg"><i class="fa fa-home fa-fw"></i>&nbsp;首页</a></li>
                       <li ><a href="/index.php/home/user/myscore"><i class="fa fa-id-badge fa-fw"></i>&nbsp;会员积分</a></li>
                       <li><a href="/index.php/home/user/myimg"><i class="fa fa-superpowers fa-fw"></i>&nbsp;我的头像</a></li>
                       <li><a href="/index.php/home/user/mymsginfo"><i class="fa fa-user-o fa-fw"></i>&nbsp;我的信息</a></li>
                   </ul>
               </div>
               <div class="col-md-10">
                   <div class="panel panel-info">
                       <div class="panel-heading">
                           <h3 class="panel-title">首页&nbsp;<i class="fa fa-home fa-fw"></i></h3>
                       </div>
                       <div class="panel-body">
                          <div class="row">
                                <div class="col-md-2 text-right">
                                    <img src="<?php echo (session('img')); ?>"  class="img-circle" style="width: 75px;height: 75px;">
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <h3 ><?php echo (session('name')); ?></h3>
                                        <h6>经验等级:  积分:</h6>
                                    </div>
                                    <div class="row">
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                                        </div>
                                    </div>
                                </div>
                              <div class="col-md-4 ">
                                  <a href="/index.php/home/user/mymsginfo" class="btn btn-default">修改资料</a>
                                  <a href="/index.php/home/user/grkj" class="btn btn-default">个人空间</a>
                              </div>
                          </div>
                           <hr>
                           <div class="row">
                               <div class="col-md-3 text-center">
                                   <h3>每日任务</h3>
                               </div>
                           </div>
                           <br>
                           <div class="row text-center">
                               <div class="col-md-3">
                                   <a href="javascript:void(0)" class="btn btn-default btn-fab btn-info"><i class="material-icons">done</i></a>
                                    <h5>每日登入</h5>
                               </div>
                               <div class="col-md-3">
                                   <a href="javascript:void(0)" class="btn btn-default btn-fab btn-info"><i class="material-icons">done</i></a>
                                   <h5>每日发帖</h5>
                               </div>
                               <div class="col-md-3">
                                   <a href="javascript:void(0)" class="btn btn-default btn-fab btn-info"><i class="material-icons">done</i></a>
                                   <h5>每日签到</h5>
                               </div>
                               <div class="col-md-3">
                                   <a href="javascript:void(0)" class="btn btn-default btn-fab btn-info"><i class="material-icons">done</i></a>
                                   <h5>每日回复</h5>
                               </div>

                           </div>
                           <hr>
                           <div class="row">
                               <div class="col-md-3 text-center">
                                   <h3><i class="material-icons">grade</i>成就勋章</h3>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12 text-center">

                                   <h2>该功能暂时没有开启</h2>
                               </div>
                           </div>
                           <hr>
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