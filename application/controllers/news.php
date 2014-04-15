<?php
/**
 * 文章控制器
**/
class News extends FController{
	/**
	 *  views模板
	**/
	public $template = 'test';

	/**
	 * 此方法由router.php调用
	**/
	public function article($atitle){
		 //加载model
		 $this->loadModel("news"); 
         //获取一片文章   
         $article = $this->news_model->get_article($atitle);   
         //把文章数据赋给视图模板   
         $data['title'] = $article['title'];
         $data['content'] = $article['content']; 
         //创建一个视图，并传入该控制器的template变量   
         $this->view($this->template,$data);   
	}
}