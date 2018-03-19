<?php

/**
 * 后台bg_comment表操作模型
 */
 class MessageModel extends Model {
 	/**
 	 * 获取所有的评论信息
 	 */
 	public function getMessage() {
 		$sql = "select c.*,a.title,a.content from bg_comment as c left join bg_article as a on c.art_id = a.art_id  order by cmt_id desc";
 		return $this->dao->fetchAll($sql);
 	}
    /**
     * 根据id号删除某一条评论的内容
     */
    public function delMessageById($cmt_id){
        $sql = "delete from bg_comment where cmt_id = $cmt_id";
        return $this->dao->my_query($sql);
    }
 }