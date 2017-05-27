<?php
  
    /*
     1,以后只要包含此文件就可以直接使用该对象了
	 2，喜欢面向对象的读者，还可以将Smarty相关配置封装到自己的类中，
	  以后只要包含自己的类即可。
	  class  MySmarty extends Smary()
	  {
		  function  MySmarty()
		  {
			$this->template_dir = SMARTY_PATH.'templates';//是在模板文件路径
			$this->compile_dir = SMARTY_PATH.'templates_c';	//设置模板编译文件地址
			$this->config_dir = SMARTY_PATH.'configs';//设置配置文件路径
			$this->cache_dir = SMARTY_PATH.'cache'; //设置缓存路径
    
		  }
	  }
   
   
   */
     //这里smarty的配置文件--
    //设置smarty的路径，绝对路径
	define('SMARTY_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/smarty/');
	 //设置smarty的路径，相对路径
	//define('SMARTY_PATH','./smarty');
	echo SMARTY_PATH;
	require SMARTY_PATH.'Smarty.class.php';//require 和 include 几乎完全一样，除了处理失败的方式不同之外。require 在出错时产生 E_COMPILE_ERROR 级别的错误。换句话说将导致脚本中止而 include 只产生警告（E_WARNING），脚本会继续运行。
	
	$smarty = new Smarty();//实例化一个Smarty对象 
	$smarty->template_dir = SMARTY_PATH.'templates';//是在模板文件路径
	$smarty->compile_dir = SMARTY_PATH.'templates_c';	//设置模板编译文件地址
	$smarty->config_dir = SMARTY_PATH.'configs';//设置配置文件路径
	$smarty->cache_dir = SMARTY_PATH.'cache'; //设置缓存路径
   

?>
