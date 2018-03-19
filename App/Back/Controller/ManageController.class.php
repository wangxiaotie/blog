<?php

/**
 * 后台的平台控制器,用于存放后台的公共代码
 */
class ManageController extends PlatformController{
    /**
     * 后台首页
     */
    public function indexAction(){
        $this->display('index.html');
    }
}
?>