<?php 
namespace Home\Model;

use Think\Model\RelationModel;

class RoleModel extends RelationModel
{

  

	protected $_link = [
        'action' => [
            'mapping_type' => self::MANY_TO_MANY,
            'class_name'    => 'action',//表明
            'foreign_key'   => 'role_id',//
            'relation_foreign_key'  =>  'action_id',//id
            'relation_table'    =>  'y_role_action'//中间表名字
        ]
    ];

    
}