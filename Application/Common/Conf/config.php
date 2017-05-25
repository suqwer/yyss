<?php
return array(
    //'配置项'=>'配置值'
    /*    // 关闭多模块访问  单模块设计
        'MULTI_MODULE'          =>  false,
        'DEFAULT_MODULE'        =>  'Home',*/


    //数据库配置
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'yyss',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'y_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8*/


    'URL_PARAMS_BIND_TYPE'  =>  1, // 设置参数绑定按照变量顺序绑定

    //'READ_DATA_MAP'=>true  //获取数据的时候自动做字段映射
    /*'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'layout',*/

    'TMPL_PARSE_STRING'  =>array(
        '__PUBLIC__' => ' /Public/',
        '__JS__'     => '/Public/static/js/',
        '__CSS__'    => '/Public/static/css/',
        '__IMG__' => '/public/static/img/'


    ),
  /*  'LAYOUT_ON'=>true,
    'LAYOUT_NAME'=>'layout',*/

);