<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/22
 * Time: 10:34
 */

namespace Home\Controller;


use Think\Controller;

class ModuleController extends Controller
{
    public function modulebg($fid){
        $module=M('module');
        $re=$module->where("type=1 and fid=$fid")->select();
        $rs=$module->where("id=$fid")->select();
        $this->assign('module',$re);
        $this->assign('modulebgname',$rs[0]['name']);
        $this->display();
        //$re=$module->query('select m1.name as m1n,m2.name as m2n from y_module as m1 join y_module as m2 on m1.id=m2.fid');

        //$this->ajaxReturn($re);
    }
    public function modulelt($id){
        $mouss=M('module');

        $rv=$mouss->where('id=%d',$id)->select();
        session('mid',$rv[0]['id']);
        $this->assign('modulebgname',$rv[0]['name']);
        $module=M('article');
        //每页显示条数
        $pageLength = 20;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        //数据库查询  起始下标
        $startIndex = ($page - 1) * 20;
        //$re=$module->relation(true)->where("id=3")->select();
        $rs=$module->query("select a1.*,m2.name from y_article as a1 join y_module_article as m1 on a1.id=m1.aid join y_module as m2 on m1.mid=m2.id where m2.id=$id");
        $re=$module->query("select a1.*,m2.name,u1.name from y_article as a1 join y_module_article as m1 on a1.id=m1.aid join y_module as m2 on m1.mid=m2.id join y_user as u1 on u1.id=a1.user_id where m2.id=$id  order by created_at desc limit $startIndex,$pageLength");
        $pageTotal = (int)(count($rs) / $pageLength) + 1 ;
        $this->assign('pagesa',$pageTotal);
        // select * from y_article as a1 join y_module_article as m1 on a1.id=m1.aid join y_module as m2 on m1.mid=m2.id where m2.id=3

        $this->assign('modules',$re);
        $this->display();
    }
    public function moduleSelectz(){
        //$module=M('module');
        dump($_POST);
        //$re=$module->where()->select();
    }
    //发帖
    public function articlepush(){
        $_POST['user_id']=session('id');
        $_POST['created_at']=date('Y-m-d H:i:s',time());
        //dump($_POST['user_id']);
        $article=M('article');
        if($article->create()){
            $re=$article->add();
            if($re){
                $module=m('module_article');
                $data['mid']=session('mid');
                $saa=session('mid');
                $data['aid']=$re;
                $module->add($data);
                $this->success('发布成功',"http://127.0.0.1/index.php/home/module/modulelt?%ls=$saa");
            }else{

            }
        }else{

        };
    }
}