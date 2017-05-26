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
                        <li ><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;消息中心</li>
                        <li ><a href="javascript:void(0)"><i class="fa fa-circle" aria-hidden="true"></i></i>&nbsp;回复我的</a></li>
                        <li ><a href="#"><i class="fa fa-circle" aria-hidden="true"></i></i>&nbsp;@ 我的</a></li>
                        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;收到的赞</a></li>
                        <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i></i>&nbsp;系统通知</a></li>
                        <li class="active"><a href="/index.php/home/user/myprivateLetter"><i class="fa fa-envelope" aria-hidden="true"></i></i>&nbsp;我的私信</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">我的私信&nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class='row'>
                                <div class='col-md-3'>
                          <div class="panel panel-default">
                          <code>近期消息</code>
                          <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#complete-dialog">发送私信<div class="ripple-container"></div></button>
  

                                        <div class="panel-body">
                                            <div class='col-md-12'>
                                                 <img src="<?php echo (session('img')); ?>" width=25 height=25 alt="头像" class="img-circle">
                                            </div>
                                             <div class='col-md-12'>
                    <img src="/public/Uploads/2017-05-22/5922994d3853d.jpg"width=25 height=25 alt="头像" class="img-circle">
                                            </div>
                                             <div class='col-md-12'>
                    <img src="/public/Uploads/2017-05-22/59229cf2203d8.JPG"width=25 height=25 alt="头像" class="img-circle">
                                            </div>
                                             <div class='col-md-12'>
                    <img src="/public/Uploads/2017-05-22/5922a0cada6f9.JPG"width=25 height=25 alt="头像" class="img-circle">
                                            </div>
                                        </div>
                                      </div>
                                </div>
                                <div class='col-md-9'>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                        <div class='yy'>
                                                <?php if(is_array($provatemess)): foreach($provatemess as $key=>$val): echo ($val["content"]); ?><br><?php echo ($val["created_time"]); endforeach; endif; ?>
                                        </div>
                                </div>
                                     </div>
                                </div>

                            </div>
          				</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="complete-dialog" class="modal fade in" tabindex="-1" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="tue">×</button>
                <h4 class="modal-title">Dialog</h4>
            </div>
             <form  action="http://php.com/index.php/home/user/send"  method="post" >
            <div class="modal-body">
            <div class="row"> 

            <div class='col-md-2'>
                
            </div>
       
                <div class='col-md-8'>
                    
                    <div class="form-group is-empty">
                         <label for="inputEmail" class="col-md-2 control-label">姓名</label>

                    <div class="col-md-10">
                     <input type="" class="form-control" id="inputEmail" name="name" >
                     </div>
              </div>
                </div>    
            </div>  
            </div>
            <div class="modal-footer">  
        
                <input type="text" name="content" class="form-control" id=""  placeholder="内容">
                <button type="text" class="btn btn-primary"  data-dismiss="">提交</button>
            
                
            </div>
            </form>
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
    $("#dropdown-menu select").dropdown();
</script>
   <script>
      $.material.init();
</script>
</html>