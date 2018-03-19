<?php

/**
 * 前台bg_comment表操作模型
 */
class CommentModel extends Model {
	/**
	 * 添加评论功能
	 */
	public function insertComment($cmtInfo) {
		extract($cmtInfo);
		$sql = "insert into bg_comment values(null, $art_id, '$cmt_user','$cmt_content',$cmt_time)";
		return $this->dao->my_query($sql);
	}
	/**
	 * 根据文章的id号提取所有评论数量
	 */
	public function getCmtNumsById($art_id) {
		$sql = "select count(*) from bg_comment where art_id=$art_id";
		return $this->dao->fetchColumn($sql);
	}
	/**
	 * 根据文章的id号提取当前页的所有的评论信息
	 */
	public function getCmtInfoByArtId($art_id) {
		$pageNum = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
		$rowsPerPage = $GLOBALS['conf']['Page']['rowsPerPage'];
		$offset = ($pageNum - 1) * $rowsPerPage;
		$sql = "select c.*,u.user_image from bg_comment as c left join bg_user as u on c.cmt_user = u.user_name where art_id=$art_id order by c.cmt_time asc limit $offset,$rowsPerPage";
		return $this->dao->fetchAll($sql);
	}
}