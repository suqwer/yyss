<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/9
 * Time: 15:34
 */

namespace Home\Controller;


use Think\Controller;

class UserController extends Controller
{   
    public function __construct() {
        parent::__construct();
        if ($Think.ACTION_NAME !== 'login'&& $Think.ACTION_NAME !== 'reg') {
            $id = session('id');//取得当前用户id
            if (!$id) die('请先登陆。'); //如果没有id就不登录,有就登录
        }

        //dump($Think.ACTION_NAME);
    }

    public function reg(){
    	$_POST['score']=0;
    	$user = D("user");
        if(!$user->create()){

            //echo $user->getError().'<br>';
            //$this->redirect('index/index', '', 2, '注册失败,跳转中...');
        }else{
            $rs=$user->add();
            if($rs){
                $this->redirect('index/index', '', 2, '注册成功,跳转中...');
                //session('nickname',I('post.name'));
            }else{
                $this->error();
            }  
        }
    }
    public function login(){
        $user = D('User');
        $data['email'] = I('post.email');
        $data['password'] = md5(I('post.password'));
        $rs = $user->where($data)->select();
        if(count($rs) ===1){
            session('id',$rs[0]['id']); 
            session('name',$rs[0]['name']);
            $userm = D('Usermore');
            $re=$userm->where('uid=%d',$rs[0]['id'])->select();
            if(count($re)===1){
                session('img',$re[0]['img']);
            }else{
                session('img',"/public/static/img/jt.png");
            }
            $this->success('登录成功','/index.php/Home/Index/dome');
            //$name = $user->where('id=%d',session('id'))->getField('name');
            //session('nickname',$name);
        }else{
            $this->error('账号或密码错误');
        } 

    }

    public function grkj(){
         $user = M("usermore");
         $sql=$user->where('uid=%d',session('id'))->select();
        if($sql){
            session('indivi',$sql[0]['indivi']);
        }else{

        }
         //$this->ajaxReturn($sql,"JSON");
         $this->display();
    }
    public function logout(){
        session_destroy();
        // $this->display('index/index');
        $this->redirect('index/index', '', 2, '注销成功,跳转中...');
   
    }
    //保存个人详细
    public function mymsgsave(){
        $usermore=M('usermore');
        $re=$usermore->where('uid=%d',session('id'))->select();
        //dump(count($re));
        if(count($re)===1){
            dump($re[0]);
            dump(i('post.'));
            //判断名字是否被修改
            if(i('post.name')==session('name')){
                echo '名字没有修改';
            }else{
                $user=M('user');
                $data['name']=i('post.name');
                $re=$user->where("id=%d",[session('id')])->save($data);
                session('name',i('post.name'));
            }
            //判断资料是否被修改
            $cou=0;
               foreach($re[0] as $key=>$vla){
                    //dump(i('post.')[$key]);
                   if(i('post.')[$key]==$vla){
                       $cou++;
                       //$this->ajaxReturn('1');
                   }
               }
               //echo $cou;
               if($cou==8){
                   echo '没有修改';
               }else{
                   $re=$usermore->where('uid=%d',session('id'))->save(i('post.'));
                   if($re){
                       echo 'cg';
                   }
               }


        }else{
            $_POST['uid']=session('id');
            $_POST['img']="/public/static/img/jt.png";
            if($usermore->create()){
                $rs=$usermore->add();
                if($rs){

                    $this->ajaxReturn($rs);
                }else{
                    $this->ajaxReturn(0);
                }
            }
        }

    }
    //请求个人详细
    public function mymsgmore(){
        $usermore=M('usermore');
        $re=$usermore->where('uid=%d',session('id'))->select();
        $this->ajaxReturn($re);
    }
    //个人简介
    public function sgin(){
        dump(i('post.'));
    }
    public function mymsg(){
        $this->display();
    }
    public function  mymsginfo(){

        $this->display();
    }
    public function myimg(){
        $this->display();
    }
    public function usl(){
        $re=unlink('./Public/Uploads/2017-05-17/591c0ce5ba953.jpg');
        dump($re);
    }

      //头像上传
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类

        $upload->maxSize   =     1228800 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传目录
         $info   =   $upload->uploadOne($_FILES['photo']);  // 获取文件资源
        if(!$info) {
                   // 上传错误提示错误信息
            $this->error($upload->getError());    
            }else{
                 // 上传成功.
            session('img','/Public/Uploads/'.$info['savepath'].$info['savename']);
            $usermor=M('usermore');
            $re=$usermor->where('uid=%d',session('id'))->select();
            if($re[0]['img']!='/public/static/img/jt.png'){
                unlink('./public/Uploads/'.$re[0]['img']);
                $data['img']=$info['savepath'].$info['savename'];
                $usermor->where('uid=%d',session('id'))->save($data);
                $this->success('上传成功');
            }else{
                $data['img']=$info['savepath'].$info['savename'];
                $usermor->where('uid=%d',session('id'))->save($data);
                $this->success('上传成功');
            }

         }
    }

 public function myscore(){
       $this->display();

 }

public function myletter(){
   $this->display();
}

 public function myprivateLetter(){
    $provatemess=M('provatemess');
    $data=$provatemess->select();
    $this->assign('provatemess',$data);
    $this->display();

 }


 // 私信
public function send() {
    dump($_POST);
    $formuser_id = session('id');//取得当前用户id
    $name = $_POST['name'];  //获取接收人的名字
    $content = $_POST['content'];//获取私信内容
    if (empty($name) OR empty($content)) die("用户名或者消息内容不能为空");
    $user = M('user');// 获取 user
    $condition['name'] = $name;//获取查询内容
    $touser_id = $user->where($condition)->getField('id');//查询user里面的name
    if (!$touser_id) die('目标不存在');//查询的name不存在
    if ($touser_id == $formuser_id) die('你不能给自己发送信息。');//不能给自己发信息
    $data['content'] = $content;
    $data['formuser_id'] = $formuser_id;
    $data['touser_id'] = $touser_id;
    $provatemess = M('provatemess');
    $rs = $provatemess->add($data);
  $this->success('发送成功','/index.php/home/user/myprivateLetter');
   }

   
//获取个人私信
  Public function gr(){
   $provatemess = M('provatemess');
   $content = $_POST['content'];//获取个人私信内容
   $rs=$provatemess->where('touser_id=%d',session('id'))->select();
     var_dump($rs);
   }
//获取图片         `       
 public function tp(){
$usermore=M('usermore');
$rs=$usermore->select();
dump($rs);
 }

}