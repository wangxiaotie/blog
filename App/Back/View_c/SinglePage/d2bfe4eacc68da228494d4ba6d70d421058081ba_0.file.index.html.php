<?php
/* Smarty version 3.1.29, created on 2018-02-28 07:34:12
  from "D:\phpStudy\WWW\blog\App\Back\View\singlePage\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a965b745cdad9_66779582',
  'file_dependency' => 
  array (
    'd2bfe4eacc68da228494d4ba6d70d421058081ba' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\blog\\App\\Back\\View\\singlePage\\index.html',
      1 => 1494235978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_5a965b745cdad9_66779582 ($_smarty_tpl) {
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
    	<div class="panel-head"><strong>单页列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加单页" />
        </div>
        <table class="table table-hover">
        	<tr>
        		<th width="100">ID</th>
                <th width="200">单页标题</th>
                <th width="100">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['pageInfo']->value;
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
            	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                <td>
                    <a class="button border-blue button-little" href="index.php?p=Back&c=SinglePage&a=edit&page_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
">修改</a> 
                    <a class="button border-yellow button-little" href="index.php?p=Back&c=SinglePage&a=del&page_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
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
