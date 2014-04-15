<?php  

	//应用的根目录就是index.php的父目录  
	define("SERVER_ROOT", dirname(__FILE__));  
	  
	//你的域名.comm 是你的服务器域名  
	define('SITE_ROOT' , 'http://localhost/framework');  

	//框架系统目录
	define('FLORAL',SERVER_ROOT.'/system/core/Floral.php');
	define('SYSTEM_CORE',SERVER_ROOT.'/system/core/');

	//框架用户目录
	define('APPLICATION',SERVER_ROOT.'/application/');


	//配置信息
	define('CONFIG_PATH',SERVER_ROOT.'/config.php');



	/**
	 * 引入配置信息
	**/
	require_once(CONFIG_PATH);

	/**  
	 * 引入Floral配置
	 */  
	require_once(FLORAL);