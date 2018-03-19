<?php
/* Smarty version 3.1.29, created on 2018-03-01 06:27:19
  from "D:\phpStudy\WWW\blog\App\Back\View\Message\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a979d4795e9d4_72264503',
  'file_dependency' => 
  array (
    '88d64410b53aec551f929d276d5436b46415e750' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\blog\\App\\Back\\View\\Message\\index.html',
      1 => 1519885638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_5a979d4795e9d4_72264503 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:/phpStudy/WWW/blog/Vendor/Smarty/plugins\\modifier.date_format.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
	//定义页面载入事件
	$(function(){
		//获取btnAdd按钮
		$('#btnAdd').bind('click',function(){
			// 设置“添加文章”链接
			window.location.href = 'index.php?p=Back&c=SinglePage&a=add';
		});
	});
<?php echo '</script'; ?>
>

<div class="admin">
	<form action="#" method="POST">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>评论列表</strong></div>
        <!-- <div class="padding border-bottom">
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加单页" />
        </div> -->
        <table class="table table-hover">
        	<tr>
        		<!-- <th width="100">ID</th> -->
                <th width="200">文章ID</th>
                <th width="200">文章标题</th>
                <th width="200">文章内容</th>
                <th width="200">评论内容</th>
                <th width="200">评论时间</th>
                <th width="100">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['messageInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
            <tr>
            	<!-- <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cmt_id'];?>
</td> -->
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                <td><a href=""><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cmt_content'];?>
 </td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['cmt_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
                <td>
                    <!-- <a class="button border-blue button-little" href="index.php?p=Back&c=Message&a=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
">修改</a> -->
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=Message&a=del&cmt_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cmt_id'];?>
" >删除</a>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
        </table>
    </div>
    </form>
    <br />
    <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
