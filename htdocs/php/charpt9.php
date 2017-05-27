<?php
  
  echo "<p>---------------------------------字符串处理与正则表达式------------------------------------------<p>";
  echo "<p><p><p>---------------------trim()---------------------------------<p><p><p>";
   /*常用字符串处理函数，trim()函数，将删去字符两端的空白字符并返回 string trim(string $str[,string $charlist]);
     $str  为待处理的字符串，
	 $charlist,为选参数，用来指定要删去的字符，如果不指定，默认将删除如下字符。
	   "" 空格
	   "\0" 空字符
	   "\n" 换行符
	   "\r" 回车符
	   "\x0B" 垂直制表符
	   "\t" 水平制表符
	   
	  ----如果只是去除字符串左端或者右端的指定字符则可以使用ltrim()和rtrim().用法与trim()类似
   */
   $str1 = "  LIneline love mom ";
   $str2 = "\t\0 lin line lovemomo \n\r";
   $str3 = "lin line lovemomo ";
   echo "<p> 原字符串 ";
   echo '<br> $str1 ';
   var_dump($str1);
   echo '<br> $str2';
   var_dump($str2);
   echo '<br> $str3';
   var_dump($str3);
   
   //删除字符串两端的字符
   
   $charlist = "lin";
   $new_str1 = trim($str1);
   $new_str2 = trim($str2);
   $new_str3 = trim($str3,$charlist);
   echo "<p> 新字符串 ";
   echo '<br> $new_str1 ';
   var_dump($new_str1);
   echo '<br> $new_str2 ';
   var_dump($new_str2);
   echo '<br> $new_str3 ';
   var_dump($new_str3);
   echo "<p><p><p>---------------------改变字符串大小写--------------------------------<p><p><p>";
   /*
	将字符串中的字符全部转成大写字母，可以使用strtoupper()函数；将字符串中的字符全部转成小写字母，可以使用strtolower()。
	string strtoupper(string $str)
	string strtolower(string $str)
   */ 
   $str = "  Lineline love mom ";
   $new_str = strtoupper($str);
   var_dump($new_str);
   echo "<p><p><p>---------------------分割字符串------------------------------<p><p><p>";
   /*
	 array str_split(string $str[,int $split_length=1])
	 $str 为待处理的字符串，$split_length为可选参数，表示分割后字符串的长度，默认为 1
   */
  $str = "  Lineline love mom ";
  echo "<p> 新字符串 ";
  echo'<br>$str';
  var_dump($str);
  $new_str = str_split($str,3);
  echo "<p> 分割后的，新字符串 ，其中空格也代表一个字符";
  echo '<br> $new_str  ';
  var_dump($new_str);
  echo "<p>--------分割字符串---按照分界符分割---------------<p>";
  /* array explode(string $separator,string $str [,int $limit])
    其中，$separator 为由指定的分界符组成的字符串，
	      $str为待处理的字符串
		  $limit 为可选参数，如果没有设置，函数将返回由分割后的若干字符串组成的数组，
		          如果设置了值，则该函数返回的数组中最多包含前$limit个元素，数组的最后一个元素将包含剩余的字符串。也就是设置了返回字符串的长度。
	      从php5.1.0开始，$limit可以被设置为负数，表示返回的数组中包含除了$limit个元素以外的元素，也就是减去整个数组的长度（最后$limit个将被删除）
    
  
  */
   $str = "Lin love Mo God bless them";
   echo "<p> 原字符串 ";
   echo'<br>$str';
   var_dump($str);
   
   /*
	* 按照分界符分割字符串
   */
   $separator = " ";
   $new_str_array = explode($separator,$str);
   echo "<p> 分割后的字符串数组 ";
   echo '<p> $new_str_array';
   var_dump($new_str_array);
   /*
	* 按照分界符分割字符串.$limit为正数
   */
   $separator = " ";
   $new_str_array = explode($separator,$str,3);
   echo '<p> 分割后的字符串数组 $limit的值为  3 ';
   echo '<p> $new_str_array';
   var_dump($new_str_array);
   
    /*
	* 按照分界符分割字符串.$limit为负数
   */
   $separator = " ";
   $new_str_array = explode($separator,$str,-2);
   echo '<p> 分割后的字符串数组 $limit的值为  -2 ';
   echo '<p> $new_str_array';
   var_dump($new_str_array);
   
   
   echo "<p><p><p>---------------------字符串查找-strpos()函数-------------------------<p><p><p>";   
   /*
		要查找字符串中是否存在指定的字符串，可以使用 strpos();
		int strpos(string $str,mixed $find[,int $offset = 0])
		$str 是要被查找的字符串
		$find  是为待查找的字符串，允许使用整数来设置为字符的ASCII码值，
		$offset为可选参数，用来设置查找的起始位置，默认为 0。
		--函数将返回$find在$str中第一次出现的位置，如果没有找到则返回FALSE
		
	注意：由于函数可能返回数字0和布尔值FALSE，因此在使用该函数时，如果需要判断，则应使用等比较运算符"==="或不全等比较运算符"!==",
	
	---1，如果要在查找过程中不区分大小写可以用stripos()函数
	---2，如果要从后往前查找，可以使用strrpos()函数，
	---3，如果既要从后往前查找，又要不区分大小写，则可以使用 strripos()。
    这些函数的用法与strpos函数都是很类似的。	
		
   */
   $str = "Lin love Mo God bless them";
   echo "<p> 原字符串 ";
   echo'<br>$str';
   var_dump($str);
   //查找字符串
   echo "<br> 开始查找。。<br> ";
   $find = array("Mo",0x65,"v");
   foreach($find as $value)
   {
	   $pos = strpos($str,$value,8);//从第八个字符开始查找
	   if($pos===false)
	   {
		   echo "没有找到<br>";
	   }
	   else
	   {
		   echo "位置为：".$pos.'<br>';
	   }
   }
   
   echo "<p><p><p>---------------------字符串替换-str_replace函数-------------------------<p><p><p>";   
   /*
	mixed str_replace(mixed $search,mixed $replace,mixed $str[,int &$count]);
	$search 是待查找的字符串，$replace 是待替换的字符串，二者均可以为字符串数组
	$str 为待操作的字符串，也可以为字符串数组
	$count 为可选参数，如果设置，则用来限制替换的个数
	
	此处省略：详细用法
   */
   
   $str_array= array("Lin love mo God bless them",
                     "Mo Love We bless them");
   echo "<p>原子符串： ";
   var_dump($str_array);
   /*
	 替换字符串
   */
   $search = array("Lin","Mo");
   $replace = array("林林","默默");
   
    $new_str_array= str_replace($search,$replace,$str_array);
   echo "<p>新子符串： ";
   var_dump($new_str_array);
   
   echo "<p>---------------------字符串加密------------------------<p>";   
   /*
	字符串加密
	 md5();
	 shal();
	 crc32();计算一个字符的CRC32多项式
	 uniqid();基于以微妙计的当前时间生成一个唯一的ID
	 crypt();使用DES,Blowfish或MD5加密字符串
	 md5函数的用法如下：
	  string md5(string $str[,bool $raw_output =false])
	  
	  $str为待加密的字符串
	  $raw_output为选项，默认值为FALSE,表示函数将返回32个字符组成的十六进制的散列字符串，若设置为TRUE，将返回16个字符组成的
	  二进制散列字符串
	  
   */
   $str = "Line love Mo God bless them";
   echo "<p> 原字符串";
   var_dump($str);
   //md5 加密字符串
   echo"<p> 一次MD5加密 ".md5($str).'<br>';
   echo"<p> 一次MD5加密 ".md5(md5($str)).'<br>';
   
    echo "<p>---------------------与HTML处理相关的函数-----------------------<p>";  
	/*
		php提示函数在这些特殊字符与其转义字符之间进行相互转换。
		其中，htmlentities()函数用于将字符串中特殊的字符串转成HTML转义字符，而html_entity_decode()函数的作用正好相反，
		用于将字符串中的HTML转义字符成正常显示的字符。
		
		
		htmlentities() 函数的用法如下：
		string htmlentities(string $str [,int $quote_style = ENT_COMPAT [,string $charset]]);
		其中，$str 为待处理的字符串，$quote_style与$charset为可选项，分别表示是否解码引号和使用的字符编号。该函数返回处理后的新字符串。
        $quote_style 的值可以为以下选项之一。 
		
		
		html_entity_decode(string $str [,int $quote_style=ENT_COMPAT[,string $charset]]);的用法与htmlentities()用法类似
		
		htmlspecialchars() 与htmlspecialchars_decode()，用法与上面的用法相似
		 
	*/
	$str = '<Lin love \'Mo\'>  " God bless them"';
	echo "<p>原字符串 ";
	var_dump($str);
	
	/*
		普通字符转换成html转义字符（仅解码双引号）
	*/
	$new_str1 = htmlentities($str);
	echo "<br><p>普通字符转换成html转义字符（仅解码双引号） ";
	var_dump($new_str1);
    
	/*
		普通字符转换成html转义字符（仅解码双引号 单引号）
		
	*/
    $new_str2 = htmlentities($str,ENT_QUOTES);
	echo "<br><p>普通字符转换成html转义字符（仅解码双引号 单引号） ";
	var_dump($new_str2);
   
   /*
		普通字符转换成html转义字符（不解码 引号）
		
	*/
    $new_str3 = htmlentities($str,ENT_NOQUOTES);
	echo "<br><p>普通字符转换成html转义字符（不解码 引号） ";
	var_dump($new_str3);
   
    /*
		HTML 转义成 普通字符
		
	*/
    $new_str4 = html_entity_decode($new_str1,ENT_QUOTES);
	echo "<br><p>HTML 转义字符转换成普通字符 ";
	var_dump($new_str4);
   
    /*
	  实际，开发中，我们尝尝会遇到需要处理用户提交的恶意HTML代码的情况，例如开发留言板程序
     <script> window.location.href("http://www.unknown.com");</script>	
		处理这种恶意html代码一搬需要两种：一种是利用htmlentities()函数对"<"，">"等符号进行转义，使得不被浏览器当作html标记符解析，
		另一种则是strip_tags()函数来过滤HTML标记符
		string strip_tags(string $str [,string $allowable_tags])
		$str 是待过滤的字符串
		$allowable_tags是可选参数u，由于不想被过滤的标记符组成的字符串，该函数返回过滤了HTML标记和PHP标记的新字符串
		  需要注意：$allowable_tags无法设置HTML注释标记和PHP标记不被过滤
		
	*/
   
     $str = '<html><body><script> window.location.href("http://www.unknown.com"); </script> </body></html>';
	 echo "<p>原字符串 ".htmlentities($str);
	 //过滤所有HTML标记
	 $new_str1 = strip_tags($str);
	 echo "<br><p>过滤所有HTML标记： ";
	 echo htmlentities($new_str1);
	 
	 //不过滤<html>和<body>标记
	 $allowable_tags = '<html><body>';
	 $new_str2 = strip_tags($str,$allowable_tags);
	 echo '<br><p>不过滤'.htmlentities('<html>').'和'.htmlentities('<body>').'标记： ';
	 
	 echo htmlentities($new_str2);
     
    echo "<p>---------------------正则表达式概述。。-----------------------<p>";  
	 /*1,一个标准的正则表达式分为3部分：分隔符，表达式，修饰符
		/mo .+?love.*?lin/is
		其中  "/" 就是分隔符，两个"/"之间的就是表达式，第二个"/" 后面的字符串is就是修饰符
		正则表达式中，有12个字符被保留作为特殊用途，他们是：
		[ ] \ ^ $ . | ?  * + (  )  这些特殊字符也被称为元字符
		如果要在 正在表达式中将这些字符作为文本字符，需要"\"来转义，例如 ："1+2 = 3" ，则用 /1\+1=2/
	 */
	  
    /*1,字符集合 ：[]- 
	   /[Ll]/ 表示匹配字符串 "L" 或"l"
	   /[0-9]/ 表示 0-9
	   /[0-9a-fA-F]/ 表示  0-9 或 a-f或 A-F
	   /[0-9ab]/ 表示 0-9或 a或 b
	   /[0-9abU-Z]/ 0-9或者 a，或b 或 大写U-Z
	   
	 2，^ 表示取反
	  /[^0-9]/  匹配一个非数字字符。
	  /[^A-F]/ 匹配一个非大写字母字符。
	  /[^0-9a-fA-F]/ 匹配 一个非16进制的数字（大小写敏感）。
	  
	 3,重复与限定：?*+{}
			
		?:匹配前导字符0次或1次，即表示前导字符是可选的
		*：匹配前导字符0次或多次，
		+:匹配前导字符1次或多次
		
		
		/love?mo/ 表示e 0次或1次，  匹配  lovemo 或lovmo
		/love*mo/ 表示e 0次或多次，   匹配 lovmo lovemo ,loveeemo
	    /love+mo/ 表示e 1次或多次，   匹配  lovemo ,loveeemo
	  
	  
	   正则表达式的规则还允许我们使用一对限定符"{}" 来指定重复字符的次数，格式如下：
	  {min,max} 都是非负整数，表示重复min与max之间，即至少重复min次，最多max次
		   ，如果么有max,表示重复的次数没有上限，即至少重复min次。
		   如果，没有逗号“，”和max，表示重复min次。
		 /love{1,3}mo/ 表示e最少重复1次，最多 3次
	     /love{1,}mo/ 表示e最少重复1次，
		 /love{1,}mo/ 表示e只重复1次，只能匹配 lovemo
		 
		 
		4，任意匹配符： .  
		        它在默认的情况下是不匹配换行符的。
			/love.e/ 匹配  love，lovbe,lov-e;
		 
		 5,贪婪匹配与懒惰匹配
		   ?  * + {} 在匹配时具有“贪婪”性
		   /<.+?>/表达式引擎处理的懒惰匹配
		   
		 6， 开始与结束 ：^$
          ^ 与$ 不匹配任何字符，他们匹配的是字符之前或之后的位置
         /^Lin/ 匹配的是，以Lin 开头的字符串
         /Mo$/表示以Mo结尾

        7，选择 |
		正则表达式中，用|表示选择，利用它可以设置多个可能的匹配选项
		/Lin|Mo/  表示匹配 Lin也可以 是 Mo
		可以使用多个 | 来表示更多可能的匹配选项。
		例如/Lin|Mo|zhang|wang/
		---需要注意的是：只要找到其中一个后，就会立刻停止搜索了。和程序里 "或" 一样的效果
		8,组与反向引用：()
		 /(Lin love Mo!)+/ 就是对 Lin love Mo 进行重复，可以匹配 Lin love Mo! 或者 ”Lin love Mo!Lin love Mo!“
		  
		   当用“()”定义了一个正则表达式组后，正则引擎会把被匹配的组按照顺序编号，存入缓存。
		   可以用“\数字”的方式对被匹配的组进行反向引用。/\1/引用第一个匹配的组，/\2/引用第二个匹配的组，。。。
		   /\0/ 则引用整个被匹配的正则表达式本身，如果反向引用的组没有有效的匹配，则引用到的内容为空。
		   /(Lin)love Mo God bless \1/  代表的是 /(Lin)love Mo God bless Lin/ 
		    /(Lin)love (Mo) God bless \1 and \2/  代表的是 /(Lin)love Mo God bless Lin and Mo/ 
			  /(Lin)love (Mo) God bless \1 and \1/  
           /([Mo]+) love \1/ 将匹配字符串 “Mo love Mo”
		   /([Mo])+ love \1/ 因为 当([Mo])第一次匹配“M”时，\1代表 “M”,接着([Mo])会匹配“o”,此时\1代表 “o”，
		                     所以整个表达式是 “Mo love o ”
		    在 PHP中，还可以如下格式对数组进行命名：
			/(?P<组名>组内容)/
   
        9，转义字符
		使用反斜线"\" 除了转义*、+、？、|等原子符还有很多
		
		10 ，模式修正符 --可以放在表达式的外面，也可以放在表达式的里面
		  I：表示忽略大小写    
		   M S X
		 /Lin love Mo/i
		 /(?i) Lin love Mo/表示开启模式修饰符
		 /(?-i) Lin love Mo/表示关闭模式修饰符	  

		 
	  */
	 echo "<p><p><p>---------------------正则表达式在字符串处理中的应用---------------------------------<p><p><p>";  
	 
	 //1，字符串的匹配与查找
	   /* int preg_match(string $pattern,string $str[,array $matches[,int $flags]])
	   $matches是可选参数，如果设置了$matches,则其忽被搜索结果所填充。
	   $matches[0]将包含与整个模式匹配的文本，
	   $matches[1]将包含与第一个正则表达式组所匹配的文本
	   $flags 也是可选参数，可以设置为PREG_OFFSET_CAPTURE，如果设置了该标记，则对每个出现的匹配结果会同时返回其在字符串中的偏移量，
	   返回的数组是个二维数组，每个数组单元的第一项为匹配的字符串，第二项为偏移量
	   
	    如果匹配成功返回 1，如果匹配失败返回  0 ；
		
		
		2, 上面的匹配完后，就会停止搜索。但是有的时候，为了可以继续搜索，以便找到所有的匹配项，就要用下面的函数了
		int preg_match_all(string $pattern,string $str,array $matches[,int $flags]);
		$flag 可以选的值如下：
		      PREG_PATTERN_ORDER; 默认值，对搜索排序
			  PREG_SET_ORDER;   
			  PREG_OFFSET_CAPTURE;
		
		3，字符串的替换
		  mixed preg_replace(mixed $pattern ,mixed $replacement ,mixed $str [,int $limit]);
		
		4,字符串的分割：
		 array preg_split(string $pattern ,string $str[,int $limit [, int $flags]])
	   */
	  $str = 'Lin love Mo';
	  $pattern1 = '/love/';
	  $pattern2 = '/girl/';
	  
	  if(preg_match($pattern1,$str))
	  {
		  echo 'love was found!<br>';
	  }
	  else
	  {
		  echo 'love was not  found!<br>';
	  }
	  
		if(preg_match($pattern2,$str))
	  {
		  echo 'girl was found!<br>';
	  }
	  else
	  {
		  echo 'girl was not  found!<br>';
	  }  
	 
	  $str = 'Lin love Mo God bless Lin and Mo';
	  $pattern = '/^(Lin)[^M]+(Mo).+\1 and \2/';
	  if(preg_match($pattern,$str,$matches))
	  {
		  echo"<p> found :<br>";
		  print_r($matches);
	  }
	  else
	  {
		  echo "<p> no found <br>";
	  }
	 
	 
	 
	 
  
   
?>