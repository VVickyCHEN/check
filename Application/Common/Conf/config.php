<?php
return array(
	//'配置项'=>'配置值'
	
	// URL模式
	'URL_MODEL'             =>  2,

	// 伪静态设置
	'URL_HTML_SUFFIX'       =>  '',

	// 允许访问的模块列表
	'MODULE_ALLOW_LIST'     =>  array('Home','Admin'), 

	// 全局配置方式
	'LAYOUT_ON'             =>  true,
	'LAYOUT_NAME'           =>  'Common/base',

	//数据库配置信息
	// 数据库类型
	'DB_TYPE'   			=>  'mysqli',  
	// 服务器地址            
	'DB_HOST'   			=>  'localhost', 
	// 数据库名          
	'DB_NAME'   			=>  'check',
	// 用户名               
	'DB_USER'   			=>  'root', 
	// 密码
	'DB_PWD'    			=>  'root', 
	// 端口
	'DB_PORT'   			=>  3306, 
	// 数据库表前缀 
	'DB_PREFIX' 			=>  '', 
	// 字符集
	'DB_CHARSET'			=>  'utf8', 
	// 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	'DB_DEBUG'  			=>  TRUE, 
);