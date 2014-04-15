<?php
/**
 *  controller继承此类
**/
include_once(SYSTEM_CORE.'Render.php');
include_once(SYSTEM_CORE.'Loader.php');

class FController{
	//加载器
	protected $loader;
	//view转换
	protected $render;

	public function __construct(){
		$this->render = new Render();
		$this->loader = new Loader();
	}

	public function view($template,$data=null){
		$this->render->view($template,$data);
	}

	public function loadModel($className){
		$this->loader->model($className);
		$model = $className."_model" ;
		$this->$model = new $model;
	}
}