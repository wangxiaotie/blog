<?php

/**
 * 文章评论管理控制器
 */
class MessageController extends PlatformController {
	/**
	 * 显示评论列表动作
	 */
	public function indexAction() {
		// 调用模型
		$message = Factory::M('MessageModel');
		$messageInfo = $message->getMessage();
		// 分配变量
		$this->assign('messageInfo', $messageInfo);
		// 输出视图
		$this->display('index.html');
	}
	/**
	 * 删除评论
	 */
	public function delAction() {
		// 接收评论id号
		$cmt_id = $_GET['cmt_id'];
		$message = Factory::M('MessageModel');
		$result = $message->delMessageById($cmt_id);
		if($result !== false) {
            $this->jump('index.php?p=Back&c=Message&a=index');
        }else {
            $this->jump("index.php?p=Back&c=Message&a=index&cmt_id={$cmt_id}",':( 发生未知错误,发布失败!');
        }
	}
}