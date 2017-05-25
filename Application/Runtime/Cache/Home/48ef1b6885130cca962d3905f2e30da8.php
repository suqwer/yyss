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
<?php if(empty($_SESSION['istur'])): ?><div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>欢迎</strong>来到园艺山上社区
        <a href="/index.php/home/user/mymsginfo" class="alert-link">请您尽快完善你的个人信息</a>.
    </div>
    <?php else: endif; ?>
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
                <li class="active"><a href="javascript:void(0)">园艺山主页</a></li>
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
                        <li><a href="/index.php/home/user/mymsg">个人中心<i class="fa fa-user"></i></a></li>
                        <li><a href="/index.php/home/user/myletter">私信中心</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="/index.php/Home/user/logout" class="sli">注销<i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</div>


<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1 id="container" class="text-center">社区综合</h1>
            </div>
            <div class="bs-component">
                <div class="jumbotron">
                    <?php if(is_array($module)): foreach($module as $key=>$vo): ?><div class="row modulebg">
                            <div class="col-md-12 bgmodule">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><span class="moduletext"><?php echo ($vo['name']); ?></span><a href="/index.php/home/module/modulebg?modulebg=<?php echo ($vo['id']); ?>">更多分版</a></div>
                                    <div class="panel-body ">

                                            <div class="row">
                                                <?php if(is_array($vo['modulelt'])): foreach($vo['modulelt'] as $key=>$vi): ?><div class="col-md-6">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <div class="row-action-primary">
                                                                <img class="mdi-action-settings" src="<?php echo ($vi['img']); ?>"></img>
                                                            </div>
                                                            <div class="row-content">
                                                                <h4 class="list-group-item-heading mudule_lt"><?php echo ($vi['name']); ?></h4>
                                                                    <a href="/index.php/home/module/modulelt?%ls=<?php echo ($vi['id']); ?>">进入版块</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php endforeach; endif; ?>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                </div>
                <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    Basic panel
                </div>
            </div>
        </div>
        <div class="col-md-12">


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Required Frameworks</h3>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="mdi-action-settings"></i>
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">Bootstrap v3.0+</h4>

                            <p class="list-group-item-text">This theme extends, styles, and modifies Bootstrap's elements and styles. Without Bootstrap this project will not display correctly. To install Bootstrap please go to
                                <a href="http://getbootstrap.com/getting-started/">Get Bootstrap</a></p>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="mdi-action-settings"></i>
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading">jQuery 1.9.1+</h4>

                            <p class="list-group-item-text">All JavaScript plugins require jQuery to be included.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#complete-dialog">Open dialog<div class="ripple-container"></div></button>
    <div class="list-group">
        <div class="list-group-item">
            <div class="row-action-primary">
                <i class="material-icons">folder</i>
            </div>
            <div class="row-content">
                <div class="least-content">15m</div>
                <h4 class="list-group-item-heading">Tile with a label</h4>

                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </div>
        <div class="list-group-separator"></div>
        <div class="list-group-item">
            <div class="row-action-primary">
                <i class="material-icons">folder</i>
            </div>
            <div class="row-content">
                <div class="least-content">10m</div>
                <h4 class="list-group-item-heading">Tile with a label</h4>

                <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
            </div>
        </div>
        <div class="list-group-separator"></div>
        <div class="list-group-item">
            <div class="row-action-primary">
                <i class="material-icons">folder</i>
            </div>
            <div class="row-content">
                <div class="least-content">8m</div>
                <h4 class="list-group-item-heading">Tile with a label</h4>

                <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
            </div>
        </div>
        <div class="list-group-separator"></div>
    </div>

</div>

<div id="complete-dialog" class="modal fade in" tabindex="-1" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Dialog</h4>
            </div>
            <div class="modal-body">
                <p>Fore aut non quem incididunt, varias reprehenderit deserunt quem offendit,
                    cillum proident ne reprehenderit, quem ad laborum, quo possumus praetermissum,
                    si ne illustriora, hic appellat coniunctione, do labore aliqua quo probant. In
                    probant voluptatibus quo mentitum est laboris. Quorum mandaremus graviterque.
                    Mentitum id velit, dolor aut litteris, ea varias illustriora, ita commodo ita
                    ingeniis, iis nulla appellat incurreret, aut irure amet summis pariatur ita ubi
                    quis dolore veniam proident, consequat sed ingeniis.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Dismiss</button>
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
    $("#dropdown-menu select").dropdown();
</script>
<script>
    $.material.init();
</script>
<script>
    /*var moduleidarr={};
    $.ajax({
        url:'/index.php/home/module/moduleSelect',
        type:'post',
        success:function (msg) {
            console.log(msg);
            var mud=msg.length;

            for(var i=1;i<mud;i++){
                var s=$('.bgmodule')[0].cloneNode(true);
                $('.modulebg').append(s);

            }
            var mudl=$('.bgmodule').length;
            for(var s=0;s<mudl;s++){
                $('.moduletext')[s].innerText=msg[s]['name'];
                moduleidarr['id'+s]=msg[s]['id'];
            }
        }
    });*/
</script>
</html>