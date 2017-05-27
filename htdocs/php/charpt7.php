<?php
  
  echo "<p>---------------------------------PHP函数----函数的定义和调用------------------------------------------<p>";
 
  /*
     php 函数名称可以是字母数字，下划线，组成，但是不可以是数字开头。同时php函数名称不区分大小写，因此
	 如果同时出现 sayHello(),sayhello()的函数，php引擎就会报错。
	 php理论上支持汉字，但是由于汉字是双字节符号，为防止出错，请尽量不要使用
	 
	 */
  
  
   function sayHello($name)
   {
	   echo "hello $name ,welcome you!<br>";
	   
   }
   sayHello("lin");
   sayHello("小冬");
  
  //函数的回调
  function add($a,$b)
  {
	 return $a+$b;
  }
  $a = 1;
  $b = 2;
  echo "$a+$b = ".add($a,$b)."<br/>";//函数的回调
  //内部定义函数
  
  function compute()
  {
	  echo '开始计算了！<br>';
	  function add2($a,$b)
	  {
		return $a+$b;
	  }	  
  }
  
  compute(); //调用外部函数,注意，只有当compute()函数被调用，add2()函数才能被定义，
            //而且不论函数点在内部还是外部，它都具有全局作用域，都可以在全局范围内被调用
  $a = 1;
  $b = 2;
   echo "$a+$b = ".add2($a,$b); //调用内部函数
  
  echo "<p>-----------PHP函数----可变函数-------------<p>";
  
  //php支持可变函数，所谓可变函数就是有同样的函数名称，但是函数体可以动态变动。
  //为了支持可变函数，php允许将函数名作为字符串赋给某个变量
  function add3($a,$b)
  {
	  return $a+$b;
  }
  function sub($a,$b)
  {
	  return $a-$b;
  }
  function mul($a,$b)
  {
	  return $a*$b;
  }
   function div($a,$b)
  {
	  if($b==0)
	  {
		  return null;
	  }
	  return $a/$b;
  }
  
  $a = 1;
  $b = 2;
  $compute = 'add3';
  echo "$a + $b = ".$compute($a,$b)."<br>";
  
  $compute = 'sub';
  echo "$a - $b = ".$compute($a,$b)."<br>";
  
  $compute = 'mul';
  echo "$a * $b = ".$compute($a,$b)."<br>";
  
  $compute = 'div';
  echo "$a / $b = ".$compute($a,$b)."<br>";
 
  echo "<p>-----------PHP函数----匿名函数-------------<p>";
  //从php5.3.0开始，支持匿名函数，php匿名函数通过闭包（Closures）实现，常用于回调函数
  //例如：php内置函数array_filter(),其作用是按照回调函数过滤数组元素。用法如下：
  function filter($var)
  {
	  return $var>10;
  }
  $myarray= array(5,6,7,8,9,10,11,12,13,14,15);
  echo'<p>原数组<br>';
  print_r($myarray);
  
  $newarray= array_filter($myarray,'filter');
  echo'<p>过滤后的数组<br>';
  print_r($newarray);
  
  //如果使用匿名函数则可以写出更加简洁的代码
  
    $myarray= array(5,6,7,8,9,10,11,12,13,14,15);
    echo'<p>原数组<br>';
    print_r($myarray);
   
   $newarray= array_filter($myarray,function($var){return $var >10;});
   echo'<p>过滤后的数组<br>';
   print_r($newarray);
  
   echo "<p>---------------------------------PHP函数----参数的传递------------------------------------------<p>";
    //包括值传递和引用传递两种，同时php默认参数和可变参数
	//1，值传递
	
	
	function sayHello2($name)
	{
		echo "Hello $name ,welcome your!<br>";
	}
	$gril = "小冬";
	sayHello2($gril);
    
	function introduceMySelf($me)
	{
		echo '本府 '.$me['name'].'，年方 '.$me['age'].',爱好 '.$me['hobby'];		
	}
	$mo['name'] = '宋冬冬';
	$mo['age'] = 20;
	$mo['hobby'] = '看书';
	introduceMySelf($mo);
	
  //2，引用传递
  
  function changename(&$name)
  {
	  $name = "小冬";
  }
  $gril = "xiaodong";
  echo "<p>调用函数之前";
  echo"我叫  $gril";
  
  changename($gril);
  echo"<p>调用函数之后";
  echo"我叫 $gril";
  
  //数组按照引用传递，只是传递了其首个元素的地址
  
  function setInfo(&$people)
  {
	  $people['name'] = '小冬';
	  $people['age'] = 20;
	  $people['hobby'] = '读书';
	  
  }
  $gril = array('name'=>'','age'=>'','hobby'=>'');
  echo '<p>调用函数之前：  ';
  print_r($gril);
  
  setInfo($gril);
  echo"<p>调用函数之后";
   print_r($gril);
   echo"<p>";
   
  
  //默认参数    
  
  function introduceDefault($name,$age=20,$hobby='编程')
  {
	  echo '本府 '.$name.'，年方'.$age.'，爱好是：'.$hobby.'<br>';
  }
  $name = '宋冬冬';
  $age = 25;
  $hobby = '看书';
  introduceDefault($name);
  introduceDefault($name,$age);
  introduceDefault($name,$age,$hobby);
  //需要注意的是含默认值的参数需要放置在没有默认值参数的后面，否则函数在调用时无法确认哪个参数设置了默认值
  //不能像这还有定义：introduceDefault($age=20，$name,$hobby='编程'){}
  
  //可变参数
  /*
	所谓可变参数，就是函数的参数个数可以在函数调用时动态变化。实际使用时，通过func_num_args()函数获得函数参数的个数，
	通过func_get_args()函数返回由输入参数组成的数组。
  */
  echo"<p>";
  echo"<p>";
  function introduceNumArgs()
  {
	  $num = func_num_args();
	  $args = func_get_args();
	  switch($num)
	  {
		  case 0://0个参数
		      echo '本府芳名不便告知，望谅解<br>';
			  break;
		  case 1://1个参数
		      echo '本府行不改名做不改姓，'.$args[0].'是也！ <br>';
			  break;
		  case 2://2个参数
		      echo '本府'.$args[0].'年方'.$args[1].' !<br>';
			  break;
		  case 3://3个参数
		      echo '本府'.$args[0].'年方'.$args[1].',爱好'.$args[2].' !<br>';
			  break;	  		 
          default:
               echo '你想知道的太多了，来人啦，拖出去斩了。。。。<br>';
			  break; 		  
		
	  }
	    
  }
  
  
  introduceNumArgs();
	  introduceNumArgs('宋冬冬');
	  introduceNumArgs('宋冬冬',20);
	  introduceNumArgs('宋冬冬',22,'看书');
	  introduceNumArgs('宋冬冬',22,'看书','跪求大人扣扣');
   echo "<p>---------------------------------PHP函数----变量的作用域------------------------------------------<p>";
   //分清楚 局部变量和全局变量 --------------------略
   //要在函数内部使用全局变量，需要用global声明，或者用预定义数组$GLOBALS['变量名']来引用
   
   //1,global声明
   function introduceGlobal()
   {
	   global $name,$age,$hobby;//声明全局变量
	   echo '本府 '.$name.'，年方 '.$age.'，爱好  '.$hobby.' ！';  
   }
   $name = '小冬';
   $age = 25;
   $hobby = '看书';
   introduceGlobal();
   
   //2,$GLOBALS数组来引用
   echo"<p>";
  echo"<p>";
   function introduceGloabal()
   {
	   //通过$GLOBALS数组引用全局变量
	   echo '本府 '.$GLOBALS['name'].'，年方'.$GLOBALS['age'].'，爱好：'.$GLOBALS['hobby'].' !';
   }
   $name = '宋冬冬';
   $age = 21;
   $hobby = '写错字';
   introduceGloabal();
   
   //一旦函数内部声明全局变量后，对其的任何修改都将反映到实际变量中，并不想局部变量那样，函数退出后一切都"归与平静"
   
   //4，静态变量   
   //4.1 普通局部变量
   function increase()
   {
	   $count = 18;
	   ++$count;
	   echo '<p> 我今年 '.$count.' 岁啦!<p>';
   }
   increase();
   increase();
   increase();
   //4.2 静态变量
    function increase2()
   {
	   static $count = 18;
	   ++$count;
	   echo '<p> 我今年 '.$count.' 岁啦!<p>';
   }
   increase2();
   increase2();
   increase2();
   
    echo "<p>---------------------------------PHP函数----函数的返回值------------------------------------------<p>";
	//1,单个返回值
	function getAge()
	{
		$age = 19;
		return $age;
	}
	echo '<p>我今年 '.getAge().' 岁啦  !<p>';
   //2,返回字符串
   function getName()
   {
	   $name = '宋冬冬';
	   return $name;
   }
   echo '<p>我的名字是：'.getName().'，堂下何人？<p>';
   
   //3,返回多个返回值----php函数不能一次返回多个单值，但是可以通过范湖一个数组来实现
   function getInfo()
   {
	   $boy['name'] = '宋冬冬';
	   $boy['age'] = 25;
	   $boy['hobby'] = '发呆';
	   return $boy;
   }
  print_r(getInfo());
   
   
   
    //4,返回引用
   
   function &getName2()
   {
	   $name = '宋冬冬，返回的是引用';
	   return $name;//返回变量引用
   }	
   
   $name = &getName2();//将引用返回值赋给变量
   echo '<p>我的名字是：'.$name.'，堂下何人？<p>';
   
   
    echo "<p>---------------------------------PHP函数----内置函数------------------------------------------<p>";
   /*
	php真正的威力是在于，它有丰富的内置函数，可以满足各种开发者的使用要求。
	php中的许多内置函数都是以扩展库的形式提供的，只有加载了相应的扩展库才能使用相应的函数
   
     通过函数 get_loaded_extensions()可以获得当前php引擎加载了哪些扩展库
	 
	 *****开发者可以查看PHP官方手册查询相关函数的使用方法
   */
   print_r(get_loaded_extensions());
   
   
   
   
   
   
   
   
  
  
  
  
  
  
  

?>