<?php
	
	//当类初始化时，自动引入相关文件  
	function __autoload($className)  
	{  
		include_once(SYSTEM_CORE.$className.'.php');
	}  

	var_dump($_SERVER['REQUEST_METHOD']);
	//处理GET请求
	$request = $_SERVER['PHP_SELF'];

	//解析$request变量，得到用户请求的页面（page1）和其它GET变量（&分隔的变量）如一个请求http://你的域名.com/index.php?page1&article=buildawebsite,则被解析为array("page1", "article=buildawebsite")
	$parsed = array_slice(explode('/',explode('index.php' , $request)[1]),1);

	//用户请求的action
	$controller = array_shift($parsed);
	$action = array_shift($parsed);

	//剩下的为GET变量，把它们解析出来
	$getVars = array();
	
	foreach ($parsed as $key=>$value)
	{
	    $getVars[$key] = $value;
	}

	//构成控制器文件路径 
	if(!isset($controller))$controller = $CONFIG['system']['route']['default_controller'];
	if(!isset($action))$action = $CONFIG['system']['route']['default_action'];
	$target = APPLICATION. '/controllers/' . $controller . '.php';  
	//引入目标文件  
	if (file_exists($target))  
	{  
	    include_once($target);  
	  
	    //修改page变量，以符合命名规范（如$controller="news"，我们的约定是首字母大写
	    $class = ucfirst($controller);  
	  
	    //初始化对应的类  
	    if (class_exists($class))  
	    {  
	        $controller = new $class;  
	    }  
	    else  
	    {  
	        //类的命名正确吗？  
	        die('class does not exist!');  
	    }  
	}  
	else  
	{  
	    //不能在controllers找到此文件  
	    die('page does not exist!');  
	}  
	
	//把变量传给相应action 
	call_user_func_array(array($controller,$action), $getVars);

?>  