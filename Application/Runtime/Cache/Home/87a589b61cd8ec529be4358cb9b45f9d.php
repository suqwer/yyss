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

</body>
<script src="/Public/static/js//jquery-2.2.3.min.js"></script>
<script src="/Public/static/js//bootstrap.min.js"></script>
<script src="/Public/static/js//material.min.js"></script>
<script src="/Public/static/js//ripples.min.js"></script>
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<div class="container">
    <div class="row">
        <div class="row modulebg">
            <div class="col-md-12 bgmodule">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <span class="moduletext">
                            <?php echo ($modulebgname); ?>
                        </span>
                    </div>
                    <div class="panel-body ">
                        <div class="row">

                            <div class="col-md-12">

                                <table class="table table-striped table-hover ">

                                    <tbody>
                                    <?php if(is_array($modules)): foreach($modules as $key=>$vi): ?><tr>
                                            <td class="text-center"><a href="" class="text-info"><?php echo ($vi['title']); ?></a></td>
                                            <td class="text-right">作者:<a href="" class="text-info"><?php echo ($vi['name']); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;时间:<?php echo ($vi['created_at']); ?></td>
                                        </tr><?php endforeach; endif; ?>
                                    </tbody>
                                </table>


                            </div>

                        </div>
                        <div class="row text-center">
                            <div class="col-md-4"></div>

                            <div class="col-md-4  text-info">
                                <div class="bs-component">
                                    <ul class="pagination">

                                        <li class=""><a href="/index.php/home/module/modulelt?%ls=<?php echo (session('mid')); ?>&page=1">«</a></li>

                                        <?php $__FOR_START_19476__=1;$__FOR_END_19476__=$pagesa+1;for($i=$__FOR_START_19476__;$i < $__FOR_END_19476__;$i+=1){ if($_GET['page']== $i): ?><li class="active"><a href="/index.php/home/module/modulelt?%ls=<?php echo (session('mid')); ?>&page=<?php echo ($i); ?>"><?php echo ($i); ?></a></li>

                                                <?php else: ?>
                                                <li class=><a href="/index.php/home/module/modulelt?%ls=<?php echo (session('mid')); ?>&page=<?php echo ($i); ?>"><?php echo ($i); ?></a></li><?php endif; } ?>
                                        <li class=><a href="/index.php/home/module/modulelt?%ls=<?php echo (session('mid')); ?>&page=<?php echo ($pagesa); ?>">»</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#complete-dialog">发帖<div class="ripple-container"></div></button>
                            </div>
                            <div id="complete-dialog" class="modal fade in" tabindex="-1" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">发帖</h4>
                                        </div>
                                        <form action="/index.php/home/module/articlepush" method="post">
                                        <div class="modal-body text-center">
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group is-empty col-md-8">
                                                        <label for="" class="col-md-2 control-label">标题</label>
                                                    <div class="col-md-10">
                                                        <input type="" class="form-control" id="" placeholder="标题" name="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="form-group is-empty col-md-8">
                                                    <label for="textArea" class="col-md-2 control-label">内容</label>

                                                    <div class="col-md-10">
                                                        <textarea class="form-control" rows="3" id="textArea" name="content"></textarea>
                                                        <span class="help-block">严禁发表带有辱骂他人言论 一经举报马上封号</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="input" class="btn btn-primary" data-dismiss="">发布</button>
                                        </div>
                                        </form>
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
<script>
    $("#dropdown-menu select").dropdown();
</script>
<script>
    $.material.init();
</script>
</html>