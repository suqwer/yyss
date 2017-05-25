<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/22
 * Time: 15:37
 */

namespace Home\Model;

use Think\Model\RelationModel;
class ModuleModel extends RelationModel
{
    protected $_link = [
        'modulelt' => [
            'mapping_type' => self::HAS_MANY,
            'class_name' => 'Module',
            'foreign_key '   => 'did',//
            'parent_key'   => 'fid',
            'mapping_limit'=>'2'//
        ],
        'aritle'=> [
            'mapping_type' => self::MANY_TO_MANY,
            'class_name'    => 'article',//表明
            'foreign_key'   => 'mid',//链接的表
            'relation_foreign_key'  =>  'aid',//id
            'relation_table'    =>  'y_module_article'//中间表名字
        ],
    ];

}