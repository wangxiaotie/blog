<?php
/* Smarty version 3.1.29, created on 2018-02-28 07:32:41
  from "D:\phpStudy\WWW\blog\App\Back\View\singlePage\edit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a965b193d8d95_80133144',
  'file_dependency' => 
  array (
    '212df38a3ba41b25c1d6076c0fc1d3c9d2959d49' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\blog\\App\\Back\\View\\singlePage\\edit.html',
      1 => 1519802711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_5a965b193d8d95_80133144 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src='/App/Back/Public/ckeditor/ckeditor.js'><?php echo '</script'; ?>
>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>单页管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加单页</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Back&c=SinglePage&a=dealEdit">
          <div class="form-group">
            <div class="label">
              <label for="sitename">单页标题</label>
            </div>
            <div class="field">
              <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['single']->value['page_id'];?>
">
              <input type="text" class="input" id="title" name="title" size="50" placeholder="单页标题" data-validate="required:请填写您的单页标题" value="<?php echo $_smarty_tpl->tpl_vars['single']->value['title'];?>
" />
            </div>
          </div>

          <div class="form-group">
            <div class="label">
              <label for="readme">单页内容</label>
            </div>
            <div class="field">
              <textarea name="content" id="ckeditor" class="input" rows="8" cols="50"><?php echo $_smarty_tpl->tpl_vars['single']->value['content'];?>
</textarea>
              <?php echo '<script'; ?>
 type="text/javascript">
                CKEDITOR.replace('ckeditor');
              <?php echo '</script'; ?>
>
            </div>
          </div>
          <div class="form-button">
            <button name="submit" class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div style='height:40px; border-bottom:1px #DDD solid'></div>
  <p class="text-right text-gray" style="float:right">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div>
</body>
</html><?php }
}
