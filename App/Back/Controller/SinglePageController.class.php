<?php

/**
 * 后台单页管理控制器
 */
class SinglePageController extends PlatformController {
	/**
	 * 显示单页管理首页
	 */
	public function indexAction() {
		// 调用模型
		$singlePage = Factory::M('SinglePageModel');
		$pageInfo = $singlePage->getPages();
		// 分配变量
		$this->assign('pageInfo', $pageInfo);
		// 输出视图
		$this->display('index.html');
	}
	/**
	 * 显示添加单页表单动作
	 */
	public function addAction() {
		$this->display('add.html');
	}
	/**
	 * 处理添加单页动作
	 */
	public function dealAddAction() {
		// 接收表单
		$pageInfo = array();
		$pageInfo['title'] = $_POST['title'];
		$pageInfo['content'] = $_POST['content'];
		// 判断数据的合法性
		if(empty($pageInfo['title']) || empty($pageInfo['content'])) {
			$this->jump('index.php?p=Back&c=SinglePage&a=add',':( 请填写完整的信息!');
		}
		// 调用模型,入库
		$singlePage = Factory::M('SinglePageModel');
		$result = $singlePage->insertPage($pageInfo);
		if($result) {
			$this->jump('index.php?p=Back&c=SinglePage&a=index');
		}else {
			$this->jump('index.php?p=Back&c=SinglePage&a=add',':( 发生未知错误,添加失败!');
		}

	}
	/**
	 * 修改单页面动作
	 */
	public function editAction() {
		//接收单页的id号
		$page_id = $_GET['page_id'];
		// 获取当前文章的原有的内容
        $singlePage = Factory::M('singlePageModel');
        $single = $singlePage->getSinglePageById($page_id);
        // 分配变量
        $this->assign('single', $single);
		// 输出视图
        $this->display('edit.html');
	}
	/**
	 * 处理修改单页面动作
	 */
	public function dealEditAction() {
		//接收数据
		$single['page_id'] = $_POST['page_id'];
		$single['title']   = $_POST['title'];
		$single['content'] = $_POST['content'];
		// 判断数据的合法性
        if(empty($single['title']) || empty($single['content'])) {
            $this->jump("index.php?p=Back&c=SinglePage&a=edit&page_id={$single['page_id']}",':( 填写的信息不完整!');
        }
        // 数据入库,调用模型
        $singlePage = Factory::M('singlePageModel');
        $result = $singlePage->updatesinglePage($single);
        // var_dump($result);die;
        if($result !== false) {
            $this->jump('index.php?p=Back&c=singlePage&a=index');
        }else {
            $this->jump("index.php?p=Back&c=singlePage&a=edit&page_id={$single['page_id']}",':( 发生未知错误,发布失败!');
        }
	}
	/**
	 * 删除单页面动作
	 */
	public function delAction() {
		//接收单页的id号
		$page_id = $_GET['page_id'];
		$singlePage = Factory::M('SinglePageModel');
		$result = $singlePage->delSinglePageById($page_id);
		if($result !== false){
			$this->jump('index.php?p=Back&c=SinglePage&a=index');
        }else {
            $this->jump("index.php?p=Back&c=SinglePage&a=index",':( 发生未知错误,删除失败!');
		}
	}
}