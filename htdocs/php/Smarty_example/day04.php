<?php
	
	 echo "<p><p>----------------------------------Smarty 基本语法-----------------------------------------------<p><p>";
	
	/*
	  3.6 文件包含操作
	    Smarty 中也有类似与PHP的include()，require()，这样的文件的包含函数，Smarty中的文件包含的函数有两种
		 一种是include，用于包含模板文件，
		 另一种是include_php，用于包含PHP文件。
		 另外还有一个insert函数，类似与include，区别于insert函数包含的文件不会被缓存，也就是每次模板调用都会执行该函数
		 
		 3.6.1 include函数，用户包括模板函数
		 {include file="模板路径" 参数名=参数值。。}
		 
		 3.6.2 include_php函数
		   用于包含php文件，需要在file属性中指定要包含模板的位置，默认只被包含一次，可以通过once属性值设定是
		   否允许重复包含。在待包含的文件中可以通过$this访问Smarty对象
		   {include_php file="模板路径" 参数名=属性值。。}
		   {include_php file="head2.php"}  --但是它好像已经过时了，
		 
	  3.7 文本处理函数
	    Smarty中的文本处理函数主要包括 Idelim,rdelim,literal .
		  一搬在HTML文档中  {ldelim}php文件{rdelim}
		Idelim和rdelim分别用于输出左定界符和右定界符。
		而literal用于将该函数区域内的所有字符当作文本处理，这在输出javascript，php等脚本语言的代码时候特别有用
		
		
	 3.8 配置文件
	 Smarty的配置文件常被网页设计者们用来存放全局变量，这样一旦全局变量改变，他们就不用去逐个修改每个模板文件
	 Smarty配置文件的命名没有特殊的要求，通常习惯使用扩展名.conf的名称来命名。
	 配置文件的语法也很简单。就是"变量名=变量值"，通常还可以通过"#"号添加注释
	 
	 #一个人
	   name="boy"
	   age = 32
	   hobby= "鞋子"
	   通过内置函数config_load可以在模板中加载配置文件。要在模板文件中调用配置文件的变量也有两种方式，
	   一种是用两个“#”来区分普通变量和配置变量，另一种是使用Smarty的保留变量$smarty.config来调用
	   请查看见 当前目录下的 boy.conf
	     需要在html里 顶上面引用{config_load file="boy.conf"}
		  配置文件中可以分段，用[]添加段名，。再通过config_load函数加载配置文件时需要指定段名。
		  {config_load file="boy.conf" section="girl"}
	
	 
	*/
	
	 echo "<p><p>----------------------------------Smarty  缓存技术-----------------------------------------------<p><p>";
	 /*
	 4.	Smarty使用了一种缓存技术，它可以将最终给用户的网页页面缓存成一个静态的HTML文件这样，当用户下一次请求该页面时
		就会直接调用该缓存文件，而不必调用模板，通过缓存机制可以加快页面的显示速度。
   	  4.1 启用和禁止缓存
	    使用缓存虽然可以加快页面的显示速度，但这一技术并不是到处都适用。有些页面，如果股票显示，需要实时刷新，这时候缓存就不合适了
		在Smarty对象中，有一个属性$Caching可以看控制是否缓存，设置为true时，为启用。设置为false为禁止缓存
	  4.2 设置缓存有效期,默认有效期是3600秒，也就是一小时后失效，届时会重新启用模板。单位是秒
	     可以同时设置两个模板的有效期，如下：
		   
	       $smarty->cache_lifetime=1800;
	      $smarty->display('Ex05.html');	
          $smarty->display('Ex04.html');	

     当然可以通过smarty的属性$cacheing = 2 来分别设置每个模板的缓存时间
				  //启用模板
				   $smarty->caching = true;
				   //设置Ex04.html的缓存时间
				   $smarty->caching=2;
				   //设置缓存有效期为15分钟
					$smarty->cache_lifetime=900;
					//调用并显示模板
					$smarty->display('Ex04.html');
					
					
					//设置Ex05.html的缓存时间
				   $smarty->caching=2;
				   //设置缓存有效期为30分钟
					$smarty->cache_lifetime=1800;
					//调用并显示模板
					$smarty->display('Ex05.html');
					
	 4.3 清除缓存
	 
	   通过Smarty对象的clear_all_cache()和clear_cache()方法来实现的。
	    前者是清除所有缓存，后者是删除指定模板的缓存
		void clear_all_cache([int expire_time] ) expire_time是可选参数，单位是秒
		
		void clearCache(string template[ ,string cache_id [,string compile_id[,int expire_time]]])
		  template 是指定要删除的缓存模板
		  cache_id 和compild_id 是可选参数，分别表示缓存号和编译号
		  expire_time是设置缓存时间，超过这个时间将被删除
	 */
	
	 require "../smarty_config.php";
	 //1
	 $smarty->caching = true;
	 //2,设置缓存有效期,默认有效期是3600秒，也就是一小时后失效，届时会重新启用模板。单位是秒
	 $smarty->cache_lifetime=1800;
	 //3，缓存超过两小时，即被删除
	 //$smarty->clear_all_cache(7200);
	 $smarty->clearCache('Ex04.html');
	 
     $smarty->display('Ex04.html');	
	
	 
 
   
 
 
 
 

?>