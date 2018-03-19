<?php

/**
 * 后台category表操作模型
 */
class CategoryModel extends Model {
	/**
	 * 获取所有分类信息
	 */
    public function getCategory(){
        $sql = "select * from bg_category order by cate_sort asc";
        $list = $this->dao->fetchAll($sql);
        // echo '<pre>';
        // var_dump($this->getCateTree($list));die;
        return $this->getCateTree($list);
    }

    /**
     * 格式化分类列表
     * array $list 原始分类列表
     * int $pid 父类id号
     * int $level 缩进级别
     * array $cate_list  格式化之后的分类列表
     */
    public function getCateTree($list,$pid=0,$level=0){
        //定义静态数组用于保存格式化之后的分类列表
        static $cate_list = array();
        //遍历
        foreach ($list as $row) {
            if($row['cate_pid'] == $pid){
                $row['level']  = $level;
                $cate_list[] = $row;
                //递归点
                $this->getCateTree($list,$row['cate_id'],$level+1);
            }
        }
        //返回遍历结果
        return $cate_list;
    }
    /**
     * 添加数据入库
     * array $cate 分类的信息数组
     */
    public function insertCate($cate){
        //通过数组得到多个变量
        extract($cate);
        $sql = "insert into bg_category values(null,'$cate_name',$cate_pid,$cate_sort,'$cate_desc')";
        // var_dump($cate);die;
        return $this->dao->my_query($sql);
    }
    /**
     * 根据id号获取单个分类的信息
     */
    public function getCategoryById($cate_id){
        $sql = "select * from bg_category where cate_id = $cate_id";
        return $this->dao->fetchRow($sql);
    }
    /**
     * 根据id号修改某个分类的信息
     */
    public function updateCateById($cate) {
        // 通过数组得到多个变量
        extract($cate);
        $sql = "update bg_category set cate_name = '$cate_name', cate_pid = $cate_pid, cate_sort = $cate_sort, cate_desc = '$cate_desc' where cate_id = $cate_id";
        return $this->dao->my_query($sql);
    }
    /**
     * 获取当前分类的子分类
     */
    public function getSudId($cate_id){
        $sql = "select * from bg_category where cate_pid = $cate_id";
        return $this->dao->fetchAll($sql);
    }
    /**
     * 根据id号删除某个分类
     */
    public function delCategoryById($cate_id){
        $sql = "delete from bg_category where cate_id = $cate_id";
        return $this->dao->my_query($sql);
    }
    /**
     * 批量删除分类
     */
    public function delAllCategory($cate_id){
        //此时$cate_id是一个数组,需要先转换为字符串
        $cate_id = implode(',',$cate_id);
        $sql = "delete from bg_category where cate_id in($cate_id)";
        return $this->dao->my_query($sql);
    }
}