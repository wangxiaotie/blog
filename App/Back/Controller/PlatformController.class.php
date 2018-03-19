<?php

/**
 * 后台的平台控制器,用于存放后台的公共代码
 */
class PlatformController extends Controller{
    /**
     * 判断用户是否登陆,防止用户翻墙
     */
    protected function checkLogin(){
        //排除不需要登陆 验证的动作
        //现列出不需要验证的动作的集合
        $no_need =array(
            //'控制器名'    => '改控制器下不需要验证的动作'
            'Admin'     =>array('login','check','captcha'),
        );
        if(isset($no_need[CONTROLLER]) && in_array(ACTION,$no_need[CONTROLLER])){
            //说明不用验证,是特例
            return;
        }
        @session_start();
        if(!isset($_SESSION['adminInfo'])){
            //说明用户没有登陆
            $this->jump('index.php?p=Back&c=Admin&a=login',':(请你先登陆');
        }
    }
    /**
     * 构造方法
     */
    public function __construct(){
        //先显示调用父类的构造方法
        parent::__construct();
        //防止用户翻墙
        $this->checkLogin();
    }
}
?>