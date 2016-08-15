<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Session;
class WelcomeController extends Controller
{
	//主页面加载
	public function actionIndex(){	
		// print_r($this->actionTitle()); die;
		$data=$this->actionTitle();
		return $this->renderPartial('index',[
				'data'=>$data,
		]);
	}
	//执行登录并判断是否成功
	function actionLogin(){
		$user=\Yii::$app->request->post();
		$userobj=new User();
		 $arr=$userobj->find()
	    ->where(['u_name' => $user['name']])
	    ->asArray()
	    ->one();
	    if($arr){
	    	if($arr['u_pass']==$user['pwd']){
				//session 入库
				 $session=\Yii::$app->session;
				$session->open();//开启session
				Session::write(session_id(),$user['name']);//sessiom入库
	    		//登录成功存入session
	    		Yii::$app->session->set('username',$user['name']);
	    		$status['status']=1;
	    		$status['img']='登录成功';
	    	}else{
	    		$status['status']=0;
	    		$status['img']='登录失败,密码错误';
	    	}
	    }else{
	    	$status['status']=0;
	    	$status['img']='登录失败,账号不存在';
	    }
		exit(json_encode($status));
	}
	//执行退出
	function actionLogin_out(){
		Yii::$app->session->remove('username');
	}
	//title
	public function actionTitle(){
		$db =\YII::$app->db;
		$data=$db->createCommand("select * from article order by t_time desc limit 5")->queryAll();
		return $data;
	}
	public function actionDetail(){
		$request=\YII::$app->request;
		$id=$request->get('id');
		$db =\YII::$app->db;
		$data=$db->createCommand("select * from article where t_id='$id'")->queryOne();
		// print_r($data); die;
		return $this->renderPartial('new',['data'=>$data]);
	}
}
?>