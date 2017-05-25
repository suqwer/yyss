<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(session('id')){
            $this->success('你已经登入无需再次登入,跳转中...','/index.php/Home/index/dome',3);
        }else{
            $this->display();
        }
    }
    public function dome(){

        //$this->imgif();
        $user=M(usermore);
        $re=$user->where('uid=%d',session('id'))->select();

        if(count($re)===1){
           session('istur',$re[0]['id']);
        }else{

        }
        //获取版块和帖子
        $module=D('module');
        $re=$module->relation(true)->where('type=0')->select();
        $this->assign('module',$re);
        $this->display();
    }
}