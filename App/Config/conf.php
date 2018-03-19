<?php

/**
 * 项目配置文件
 */
return array(
	// 数据库信息组
	'db'	=>	array(
		'host'=>'localhost',
		'port'=>'3306',
		'user'=>'root',
		'pass'=>'',
		'charset'=>'utf8',
		'dbname'=>'blog'
	),
	// 应用程序组
	'App'	=>	array(
		'default_platform'=>'Home',
		'dao'	=> 'pdo',// mysql或者pdo
	),
	// 各个平台组
	'Home'	=>	array(
		'default_controller'=>'Index',
		'default_action'=>'index'
	),
	'Back'	=>	array(
		'default_controller'=>'Admin',
		'default_action'=>'login'
	),
	//验证码信息组
	'Captcha'	=>	array(
		'width'		=>80, 	//宽
		'height'	=>32, 	//高
		'linenum'	=>5, 	//干扰线数量
		'stringnum'	=>4, 	//验证码字符个数
		'pixelnum'	=>0.03 	//干扰线密度
	),
	//分页信息组
	'Page' =>array(
		'rowsPerPage'=>5,	//每页显示的记录数
		'maxNum'	=>5	,	//每页最多显示的页码的个数
	),
	// 其他
);
