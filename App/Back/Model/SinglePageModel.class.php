<?php

/**
 * 后台bg_singlePage表操作模型
 */
 class SinglePageModel extends Model {
 	/**
 	 * 获取所有的单页面的信息
 	 */
 	public function getPages() {
 		$sql = "select * from bg_singlepage order by page_id desc";
 		return $this->dao->fetchAll($sql);
 	}
 	/**
 	 * 实现单页面入库
 	 */
 	public function insertPage($pageInfo) {
 		extract($pageInfo);
 		$sql = "insert into bg_singlePage values(null,'$title','$content')";
 		return $this->dao->my_query($sql);
 	}
    /**
     * 根据id号获取一篇单页的信息
     */
    public function getSinglePageById($page_id){
        $sql = "select * from bg_singlepage where page_id = $page_id";
        return $this->dao->fetchRow($sql);
    }
    /**
     * 根据id号修改某一篇单页的内容
     */
    public function updatesinglePage($single) {
        // 通过数组得到多个变量
        extract($single);
        $sql = "update bg_singlepage set page_id=$page_id,title='$title',content='$content' where page_id=$page_id";
        return $this->dao->my_query($sql);
    }
    /**
     * 根据id号删除某一篇单页的内容
     */
    public function delSinglePageById($page_id){
        $sql = "delete from bg_singlepage where page_id = $page_id";
        return $this->dao->my_query($sql);
    }
 }