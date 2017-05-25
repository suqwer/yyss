<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>园艺山上</title>
<link rel="stylesheet" href="/Public/static/css//index.css">
</head>

<body>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<body>

<div class="cotn_principal">
  <header class="cont_ba_opcitiy">
    <h2>欢迎来到园艺山上</h2>
  </header>
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
            <h2>登入</h2>
            <p>如果你有账号的话请点击这里.</p>
            <button class="btn_login" onclick="cambiar_login()">登入</button>
          </div>
        </div>
        <div class="col_md_sign_up">
          <div class="cont_ba_opcitiy">
            <h2>注册</h2>
            <p>第一次来到还没有账号请点击这里.</p>
            <button class="btn_sign_up" onclick="cambiar_sign_up()">注册</button>
          </div>
        </div>
      </div>
      <div class="cont_back_info">
        <div class="cont_img_back_grey"> <img src="/public/static/img//14.jpeg" alt="" /> </div>
      </div>
      <div class="cont_forms" >
          <div class="cont_img_back_"> <img src="/public/static/img//13.jpg" alt="" /> </div>
        <div class="cont_form_login"> <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
          <h2>登入</h2>
          <form action="/index.php/Home/User/login" method="post">
          <input type="text" placeholder="Email" name="email"/>
          <input type="password" placeholder="Password" name="password"/>
          <button type='submit' class="btn_login" onclick="cambiar_login()">登入</button>
          </form>
        </div>
        <div class="cont_form_sign_up"> <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
          <h2>注册</h2>
          <form action="/index.php/Home/User/reg" method="post">
            <span class="emtu"></span>
          <input type="text" placeholder="Email" class='emsub in1' name="email" />
          <input type="text" placeholder="Nick Name" name="name" class='in1'/>
          <input type="password" class='pas in1' placeholder="Password" name="password"/>
          <input type="password" class='rpas in1' placeholder="Confirm Password" name="repassword"/>
          <button type='submit' class="btn_sign_up ret" onclick="cambiar_sign_up()">注册</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/Public/static/js//index.js"></script>
<script src="/Public/static/js//jquery-2.2.3.min.js"></script>
<script>
    $('.emsub').on('blur',function(){
        var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
         var str=reg.test($('.emsub').val());
        if(str){
          $('.emsub').css('border','0px solid red');
        }else{
            $('.emsub').val('');
             $('.emsub').css('border','1px solid red');
             $('.emsub').attr('placeholder','请输入正确的邮箱');
              return false;
        }
    });
    $('.ret').on('click',function () {
      var isnull=false;
      for(var i=0;i<$('.in1').lengtn;i++){
          if($('.in1')[i]){
              console.log(111);
          }
      }
      if(isnull){   
      }
    })
</script>
</body>

</body>
</html>