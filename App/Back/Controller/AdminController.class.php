<?php

/**
 * 后台管理员控制器(登录、注销、修改密码等)
 */
class AdminController extends PlatformController {
	/**
	 * 展示登录表单
	 */
	public function loginAction() {
		// 载入当前的视图层模板文件
		$this->display('login.html');
	}

    /**
     * 验证管理员的合法性
     */
    public function checkAction(){
        //接受表单
        $admin_name = $this->escapeData($_POST['admin_name']);
        $admin_pass = $this->escapeData($_POST['admin_pass']);
        $passcode   = $this->escapeData($_POST['passcode']);
        //验证码的验证应该发生在用户验证之前
        $captcha = Factory::M('Captcha');
        if(!$captcha->checkCaptcha($passcode)){
            //验证非法,跳转回登陆页面
            $this->jump('index.php?p=Back&c=Admin&a=login',':(验证码错误!');
        }
        //判断管理员的合法性,调用Model;
        //实例化AdminModel;
        $admin = Factory::M('AdminModel');
        $result = $admin -> check($admin_name,$admin_pass);
        if($result){
            //合法,将管理员信息保存进session;
            session_start();
            $_SESSION['adminInfo'] = $result;
            // var_dump($result);die;
            //更新管理员信息
            $admin ->updateAdminInfo($result['admin_id']);
            //跳转后台首页
            $this->jump('index.php?p=Back&c=Manage&a=index');
        }else{
            //跳转回登陆页面
            $this->jump('index.php?p=Back&c=Admin&a=index');
        }
    }
    /**
     * 产生随机验证码
     */
    public function captchaAction(){
        $captcha = Factory::M('Captcha');
        //调用核心方法
        $captcha->generate();
    }
    /**
     * 后台注销功能
     */
    public function logoutAction(){
        //删除用户会话区
        @session_start();
        unset($_SESSION['adminInfo']);
        session_destroy();
        //跳转登录页面
        $this->jump('index.php?p=Back&c=Admin&a=login');
    }
}