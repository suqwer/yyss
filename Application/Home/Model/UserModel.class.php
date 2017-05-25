<?php
namespace Home\Model;

use Think\Model\RelationModel;

class UserModel extends RelationModel
{
   protected $_auto = [
        ['password','md5',3,'function'],
        ['created_at','autoTime',1,'callback'],
        //['updated_at','autoTime',2,'callback'],
    ];
    protected $_link = [
        'role' => [
            'mapping_type' => self::MANY_TO_MANY,
            'class_name'    => 'role',//表明
            'foreign_key'   => 'id',//链接的表
            'relation_foreign_key'  =>  'role_id',//id
            'relation_table'    =>  'y_user_role'//中间表名字
        ],
        /*'action' => [
            'mapping_type' => self::MANY_TO_MANY,
            'class_name'    => 'action',
            'foreign_key'   => 'rid',
            // 'mapping_name'  =>  'ggs',
            'relation_foreign_key'  =>  'aid',
            'relation_table'    =>  'e_role_action'
        ]*/
    ];

    public function autoTime(){
        return date('Y-m-d H:i:s',time());
    }
   
   //自动验证
    protected $_validate = [
        ['email','','帐号名称已经存在！',0,'unique',1],
        ['name','require','账号不能为空'],
        ['password','6,12','密码不能为空',1,'length',1],
     // ['password',[100,1000],'不在规定范围内',1,'between',1],
        ['repassword','password','确认密码不正确',0,'confirm'], 
    ];

}