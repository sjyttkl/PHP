<?php
	
	 echo "<p><p>----------------------------------Smarty 基本语法-----------------------------------------------<p><p>";
	
	 
    /*3.2 配置文件中的变量
		曾在smarty目录下创建了configs目录，该目录是用来存放smarty的配置文件的，
		模板设计者通常把一些全局变量存放在配置文件中，要使用时再从配置文件中加载。
		这样，只要修改配置文件中的变量的值就可以改变全局变量配置了，而不必逐个修改模板文件了。
		
	  3.3，Smarty保留变量
	    类似于PHP中的预定义变量，Smarty中还有一些保留变量，这些保留变量无需在PHP中通过assign()方法进行分配，
		可以直接使用。常用的一些保留变量如下表：
		get               相当于PHP中的$_ GET  
		post              相当于PHP中的$_ POST
		request           相当于PHP中的$_ REQUEST
		cookies           相当于PHP中的$_ COOKIES  
		session           相当于PHP中的$_ SESSION
		server            相当于PHP中的$_ SERVER  
		env                环境变量，相当于PHP中的$_ENV
		now                当前时间戳
		const              常量，通过它可以获得php中的预定义的变量
		config             配置文件变量，通过它可以获得Smarty配置文件中的变量
		template           模板变量，通过它可以获得当前模板的名称
		使用保留变量要按照格式：
		     $smarty.保留变量名
	
	  3.4 变量修饰符 -------可以通过"|"可以连接多个修饰符，形成一个组合修饰符
	     对于时间，我们可以这样修饰
		    $smarty.now|date_format:"%Y-%m-%d %H:%M:%S"
		    其中，$smarty.now是变量名
		    date_format是修饰符
	         %Y-%m-%d %H:%M:%S  是修饰符的参数。变量名和修饰符通过”|“连接，修饰符和参数之间通过"."连接。
			 变量名与修饰符之间以及修饰符和参数之间不能有空格。
	     还有很多------自己去查看下
			capitalize
			count_characters;
			cat
			count_paragraphs
			count_words;
			date_format
			default
			escape
			indent
			lower
			upper
			nl2br
			regex_replace
			replace
			spacify
			string_format
			strip_tags
			truncate
			wordwrap
			
			可以通过"|"可以连接多个修饰符，形成一个组合修饰符
	*/
		
    
        require "../smarty_config.php";
       
 
 
   /*
	3.5 流程控制函数
		3.5.1 条件控制函数 {if}...{elseif}...{/if}
		    
	
   */
   $week = date('w');
   $smarty->assign('week',$week); 
   
   
   /*
	3.5.2 循环控制函数
       smarty中有两种循环控制函数 1，foreach 2,section
	   foreach 函数比section函数简单的多，但是功能很弱，只能简单的处理数组
	    ---遍历枚举数组（数字索引数组）
	   {foreach form=数组名 item=数组元素名}
	      语句
	   {/foreach}
	   
	    ---遍历枚举数组（字符串索引数组）
	   {foreach from数组名 key=键名 item=键值}
		语句
	   {/foreach}
   */
   // ---遍历枚举数组（字符串索引数组）
   $for_each1 = array("小冬",25,"男");
   $smarty->assign('for_each1',$for_each1);
   
   // ---遍历枚举数组（字符串索引数组）
   $for_each2 = array("name"=>"小冬","age"=>25,"sex"=>"男");
   $smarty->assign('for_each2',$for_each2);
   
   // ---遍嵌套遍历多维数组--foreach
   $programs = array(
                 array(
				     "weekday"=>"星期一",
					 "program"=>"周一",
					 ),
					 
				 array(
				     "weekday"=>"星期二",
					 "program"=>"周二",
					 ),	 
					 
				 array(
				     "weekday"=>"星期三",
					 "program"=>"周三",
					 ),
			     array(
				     "weekday"=>"星期四",
					 "program"=>"周四",
					 ),
					 
				 array(
				     "weekday"=>"星期五",
					 "program"=>"周五",
					 ),	 
					 
				 array(
				     "weekday"=>"星期六",
					 "program"=>"周六",
					 ),
				  array(
				     "weekday"=>"星期七",
					 "program"=>"周七",
					 ) 
					 
					 );
   
    $smarty->assign('programs',$programs);
   
   // ---遍嵌套遍历多维数组----section ---它也可以嵌套使用
   //{section name="循环名" loop=数组名  from=数组名  start=起始位置  step=步长} {/section}
   
   $smarty->display('Ex03.html');		
 
   
 
 
 
 

?>