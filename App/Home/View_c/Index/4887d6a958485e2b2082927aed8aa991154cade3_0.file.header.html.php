<?php
/* Smarty version 3.1.29, created on 2017-05-08 15:30:15
  from "D:\amp\apache\htdocs\blog\App\home\View\Public\header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59101e876b16c0_93502371',
  'file_dependency' => 
  array (
    '4887d6a958485e2b2082927aed8aa991154cade3' => 
    array (
      0 => 'D:\\amp\\apache\\htdocs\\blog\\App\\home\\View\\Public\\header.html',
      1 => 1494225185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59101e876b16c0_93502371 ($_smarty_tpl) {
?>
<header>
	<h1>蜗牛的家</h1>
	<h2>给我一个小小的家，蜗牛的家，能挡风遮雨的地方，不必太大...</h2>
	<div class="logo"><a href="/"></a></div>
	<nav id="topnav"><a href="/">首页</a>
	<?php
$_from = $_smarty_tpl->tpl_vars['firstCate']->value;
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
	  <a href="index.php?p=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>
	<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
	<a href="index.php?p=Home&c=SinglePage&a=index&page_id=2">关于我</a>
	<a href="index.php?p=Home&c=User&a=login"  style="font-size: 12px;margin-left: 100px;padding: 0">登录&nbsp;|</a><a href="index.php?p=Home&c=User&a=register" style="font-size: 12px;padding: 0">&nbsp;注册</a></nav>
</header><?php }
}
