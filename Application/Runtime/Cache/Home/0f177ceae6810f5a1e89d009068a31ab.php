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
                        <li ><a href="/index.php/home/user/mymsg"><i class="fa fa-home fa-fw"></i>&nbsp;首页</a></li>
                        <li ><a href="/index.php/home/user/myscore"><i class="fa fa-id-badge fa-fw"></i>&nbsp;会员积分</a></li>
                        <li><a href="/index.php/home/user/myimg"><i class="fa fa-superpowers fa-fw"></i>&nbsp;我的头像</a></li>
                        <li  class="active"><a href="/index.php/home/user/mymsginfo"><i class="fa fa-user-o fa-fw"></i>&nbsp;我的信息</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">我的信息&nbsp;<i class="fa fa-user-o fa-fw"></i></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="form-group is-empty">
                                        <label for="input" class="col-md-2 control-label text-b ">昵称：</label>

                                        <div class="col-md-10">
                                            <input type="text" class="form-control nickname" id="input" value="<?php echo (session('name')); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <br>
                                    <br>
                                    <p class="text-z">注：修改一次昵称需要消耗6个积分</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="form-group is-empty">
                                        <label for="textArea" class="col-md-2 control-label text-b">签名：</label>

                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="3" id="textArea"></textarea>
                                            <span class="help-block">在这里写入你的签名</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                </div>

                            </div>
                            <div class="row">
                               <div class="col-md-1">
                               </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">性别</label>
                                        <div class="col-md-10">
                                            <div class="radio radio-primary">
                                                <label>
                                                    <input type="radio" name="sex" id="optionsRadios1" checked value="1" class="sex-s"><span class="circle"></span><span class="check"></span>
                                                    女
                                                </label>
                                            </div>
                                            <div class="radio radio-primary">
                                                <label>
                                                    <input type="radio" name="sex" id="optionsRadios2" value="2" class="sex-s"><span class="circle"></span><span class="check"></span>
                                                    男
                                                </label>
                                            </div>
                                            <div class="radio radio-primary">
                                                <label>
                                                    <input type="radio" name="sex" id="optionsRadios3" value="3" class="sex-s"><span class="circle"></span><span class="check"></span>
                                                    保密
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="textArea" class="col-md-2 control-label text-b">出生日期：</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control biraday" id="input" value="">
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="textArea" class="col-md-2 control-label text-b">所在地：</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control szd" id="input" value="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="select111" class="col-md-2 control-label text-b">感情状况：</label>

                                        <div class="col-md-10">
                                            <select id="select111" class="form-control gqzk" >
                                                <option value="0">--请选择--</option>
                                                <option value="1">未婚</option>
                                                <option value="2">已婚</option>
                                                <option value="3">离异</option>
                                                <option value="4">丧偶</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="select111" class="col-md-2 control-label text-b">交往目的：</label>

                                        <div class="col-md-10">
                                            <select id="select" class="form-control jwmd">
                                                <option value="0" selected="selected">--请选择--</option>
                                                <option value="1">网友</option>
                                                <option value="2">恋人</option>
                                                <option value="3">玩伴</option>
                                                <option value="4">共同兴趣</option>
                                                <option value="5">男性朋友</option>
                                                <option value="6" >女性朋友</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="select111" class="col-md-2 control-label text-b">爱好：</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="lis" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <br>
                                    <br>
                                    <p class="text-z">注：请通过英文,号进行分割爱好 列如&nbsp;<u>篮球,乒乓</u></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="javascript:void(0)" class="btn btn-raised btn-info mymsg-save">保存</a>
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
    $("#dropdown-menu select").dropdown();
</script>
<script>
    $.material.init();
</script>
<script>
    var ojs=null;
    $.ajax({
        url:'/index.php/home/user/mymsgmore',
        type:'post',
        success:function (msg) {
            if(msg!=''){
                ojs=msg;
                $('textArea').text(msg[0]['indivi']);
                for(var i=0;i<$('.sex-s').length;i++){
                    if($('.sex-s')[i].value==msg[0]['sex']){
                        $('.sex-s')[i].setAttribute('checked','');
                    }
                }
                $('.biraday').val(msg[0]['birehday']);
                $('.szd').val(msg[0]['address']);
                for(var s=0;s<$('.gqzk')[0].children.length;s++){
                    if($('.gqzk')[0].children[s].value==msg[0]['gqzk']){
                        $('.gqzk')[0].children[s].setAttribute('selected','selected');
                    }
                }
                for(var j=0;j<$('.jwmd')[0].children.length;j++){
                    if($('.jwmd')[0].children[j].value==msg[0]['jwxx']){
                        $('.jwmd')[0].children[j].setAttribute('selected','selected');
                    }
                }
                $('#lis').val(msg[0]['hobby']);
            }else{
            }
        }
    });
        $('.mymsg-save').on('click',function (e) {
            var arr={};
            arr['name']=$('.nickname').val();
            arr['indivi']=$('#textArea').val();
            for(var i=0;i<$('.sex-s').length;i++){
                if($('.sex-s')[i].checked){
                    arr['sex']=$('.sex-s')[i].value;

                }
            }
            arr['birehday']=$('.biraday').val();
            arr['address']=$('.szd').val();
            for(var s=0;s<$('.gqzk')[0].children.length;s++){
                if($('.gqzk')[0].children[s].selected){
                    arr['gqzk']=$('.gqzk')[0].children[s].value;
                }
            }
            for(var j=0;j<$('.jwmd')[0].children.length;j++){
                if($('.jwmd')[0].children[j].selected){
                    arr['jwxx']=$('.jwmd')[0].children[j].value;
                }
            }
            arr['hobby']=$('#lis').val();
            console.log(arr);
            $.ajax({
                url:'/index.php/home/user/mymsgsave',
                type:'post',
                data:arr,
                success:function () {

                }
            })
        });

</script>
<script>
</script>
</html>