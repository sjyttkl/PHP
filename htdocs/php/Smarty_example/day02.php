<?php
	
	 echo "<p><p>----------------------------------Smarty 基本语法-----------------------------------------------<p><p>";
	 
	 
	/*
	  1,自定义定界符 默认的定界符是{}。但是有时候回合HTML中的JavaScript代码中出现的{}，发生冲突，所以需要自定义定界符
	    $smarty - >left_delimiter = "<!--{";
		$smarty - >right_delimiter = "}-->";
	  2,注释：
	        {**}
			如果有定界符
			  <!--{*我是注释*}-->
			  
	   时刻要主义，所有关于Smarty的东西都要被包含在Smarty定界符内，否则会被当成HTML文档的一部分。
	   
	   3，变量：它被包含在smarty定界符中，最终会被真实值替换
	      --从PHP代码中通过assign()方法分配的变量。
		  --从Smarty配置文件加载的变量
		  --Smarty保留变量
	    3.1--PHP分配的变量
             这一类变量是在php代码中通过assign()方法分配，之前例子中变量都属于这一类。
             值得注意的是，在assign('name','小冬')，变量名(name)没有加“$”符号，但我们在Smarty中
             引用这类变量时，变量是需要加“$”符号的。或者可以说"$"符号是变量名的一部分，
			 通过php既可以分配普通的变量，也可以分配数组和对象	。
             php中的枚举数组(数字索引数组)在Smarty中可以按照同样的方式引用，比如，对于php中的$boy[0]变量，
              Smarty中的引用方式同样为$boy[0]。			
 */	
  //包含 smarty_config文件
     require "../smarty_config.php";
	 $boy = array("小冬",25,array("看书","睡觉"),
	                   "name"=>"丫头",
					   "sid"=>"100",
					   "lessons"=>array("magic"=>"黑魔法",
					                    "math"=>array("魔法数学",90)
										)
					   
					   
					   );
	 
	 class Gril
	 {
		 public $name;
		 public $sid2;
		 public $lessons2;
		 
		 function Gril($name,$sid2,$lessons2)
		 {
			 $this->name = $name;
			 $this->sid2 = $sid2;
			 $this->lessons2 = $lessons2;
			 
		 }
	 }
	 
	 $name = "晏姝";
	 $sid2 = "2456";
	 $lessons2 = array("magic" =>array("数学",95),"math" =>array("语文",85));
	 $gril = new Gril($name,$sid2,$lessons2);
	 $smarty->assign("gril",$gril);
	 
	 $smarty->assign("boy",$boy);
	 $smarty->display('Ex02.html');
	 
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
		
	 
	
	*/
		
    
 
 
 
 
 
 
 
 
 
 
 
 
 

?>