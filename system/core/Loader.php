<?php
/**
 * 加载器
**/
class loader{
	public function model($className){
	    //构成文件路径  
	    $file = APPLICATION. '/models/' . strtolower($className) . '_model.php';  
	  	
	    //获取文件  
	    if (file_exists($file))  
	    {  
	        //引入文件  
	        include_once($file);          
	    }  
	    else  
	    {  
	        //文件不存在  
	        die("File '$filename' containing class '$className' not found.");      
	    }  
	}
}