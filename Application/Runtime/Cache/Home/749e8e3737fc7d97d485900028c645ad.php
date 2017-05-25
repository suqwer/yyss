<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/index.php/Home/Index/qq" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="请输入你的邮箱" name="email">
       <!--  <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="请输入密码 "  name="password">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>
          <div class="form-group has-feedback">
        <input type="name" class="form-control" placeholder="请输入姓名" name="name">
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>
          <button type="submit" class="btn btn-primary btn-block btn-flat">注册账号</button>
      </form>
</body>
</html>