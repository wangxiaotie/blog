<?php
/* Smarty version 3.1.29, created on 2017-05-08 09:49:50
  from "D:\amp\apache\htdocs\blog\App\Home\View\Public\aside.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_590fcebe4366e8_98321294',
  'file_dependency' => 
  array (
    '428446e5d2c1e95d501b54196954b232568bf3b8' => 
    array (
      0 => 'D:\\amp\\apache\\htdocs\\blog\\App\\Home\\View\\Public\\aside.html',
      1 => 1494208166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590fcebe4366e8_98321294 ($_smarty_tpl) {
?>
  <aside>
    <div class="rnav">
    <?php
$_from = $_smarty_tpl->tpl_vars['subCate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_n1']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n1'] : false;
$__foreach_n1_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_n1'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['index']++;
$__foreach_n1_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
      <li class="rnav<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n1']->value['index'] : null)%4+1;?>
"><a href="index.php?p=Home&c=Article&a=index&cate_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_n1_0_saved_local_item;
}
if ($__foreach_n1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_n1'] = $__foreach_n1_0_saved;
}
if ($__foreach_n1_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_n1_0_saved_item;
}
?>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
      	<?php
$_from = $_smarty_tpl->tpl_vars['sortByHits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_n2_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_n2']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n2'] : false;
$__foreach_n2_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_n2'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration']++;
$__foreach_n2_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
      	<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration'] : null) <= 3) {?>
        <li><span class="num<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration'] : null);?>
</span><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
        <?php } else { ?>
        <li><span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n2']->value['iteration'] : null);?>
</span><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_n2_1_saved_local_item;
}
if ($__foreach_n2_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_n2'] = $__foreach_n2_1_saved;
}
if ($__foreach_n2_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_n2_1_saved_item;
}
?>
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
      	<?php
$_from = $_smarty_tpl->tpl_vars['sortByRecommend']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_2_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_2_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
        <li><a href="index.php?p=Home&c=Article&a=show&art_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_local_item;
}
if ($__foreach_row_2_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_item;
}
?>
      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <dl>
          <dt><img src="<?php echo @constant('IMAGES_DIR');?>
/s8.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('IMAGES_DIR');?>
/s7.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('IMAGES_DIR');?>
/s6.jpg"> </dt>
          <dt> </dt>
          <dd>小林博客
            <time>8月7日</time>
          </dd>
          <dd><a href="/">博客色彩丰富，很是好看</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('IMAGES_DIR');?>
/003.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('IMAGES_DIR');?>
/002.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="<?php echo @constant('IMAGES_DIR');?>
/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside><?php }
}
