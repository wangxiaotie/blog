<?php
/* Smarty version 3.1.29, created on 2018-02-28 06:31:53
  from "D:\phpStudy\WWW\blog\App\Back\View\Master\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a964cd90f7e17_76762013',
  'file_dependency' =>
  array (
    'ba36e8423184a4d40c09b7220960b6addcd4f58c' =>
    array (
      0 => 'D:\\phpStudy\\WWW\\blog\\App\\Back\\View\\Master\\index.html',
      1 => 1494235978,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_5a964cd90f7e17_76762013 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>站长管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">站长信息</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="POST" class="form-x" action="index.php?p=Back&c=Master&a=edit" >
          <div class="form-group">
            <div class="label">
              <label for="sitename">网名</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="nickname" name="nickname" size="50" placeholder="站长网名" data-validate="required:请填写站长网名" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['nickname'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">职业</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="job" name="job" size="50" placeholder="请填写您的职业" data-validate="required:请填写您的职业" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['job'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">籍贯</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="address" name="home" size="50" placeholder="请填写您的籍贯" data-validate="required:请填写您的籍贯" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['home'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">电话</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="tel" name="tel" size="50" placeholder="请填写您的电话" data-validate="required:请填写您的电话" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['tel'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">邮箱</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="email" name="email" size="50" placeholder="请填写您的邮箱" data-validate="required:请填写您的邮箱" value="<?php echo $_smarty_tpl->tpl_vars['masterInfo']->value['email'];?>
"  />
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
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">MVC框架</a>构建</p>
</div><?php }
}
