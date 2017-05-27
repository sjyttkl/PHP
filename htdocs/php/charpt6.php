<?php
  
  echo "<p>---------------------------------PHP数组----一维数组------------------------------------------<p>";
  //两种数组，1，索引数组，2，关联数组。前者是使用数字为键，后者是既使用字符串为键，也可以使用数字为键
  //2种定义数组的方式：都是等效的
   //1，
  $myarray = array('Mo',19,'默默');
  echo"第一中定义数组的方式：<br>";
  var_dump($myarray);//打印数组信息
  //2 ,
  $myarray[0] = 'Mo';
  $myarray[1] = 20;
  $myarray[2] = '小冬';
  echo"<br>第二中定义数组的方式：<br>";
  var_dump($myarray);//打印数组信息
  
  //通过array() 函数定义数组时，php会自动从0开始依次编号。通过直接赋值的方式定义数组时，也可以不指定索引，php也会自动产生从0开始索引。
  //甚至可以在某些时候指定索引，下一次定义时不指定，在这种情况下，索引为数组当前索引最大值+1;
  echo"<br>第一中定义数组的方式：php会自动从0开始依次编号<br>";
  $myarray[] = 'Mo';
  $myarray[] = 20;
  $myarray[] = '小冬';
    var_dump($myarray);
  echo"<br>第二中定义数组的方式：可以在某些时候指定索引，下一次定义时不指定，在这种情况下，索引为数组当前索引最大值+1 ， 如果前后定义了相同的索引则前面的定义会被后面的定义覆盖<br>";   
  $myarray[3] = '默默';
  $myarray[] = 20;
  $myarray[] = '小冬 ';
  var_dump($myarray);
  
  echo "<p><p><p>---------------------------------PHP数组----二维数组------------------------------------------<p><p><p>";
  
  /*
	当一个数组的元素都是数字或者都是字符的时候，该数组，就是一维数组。当一个数组的元素中有其他的数组时该数组就是二维数组，二维数组可以通过
	array()函数和直接赋值两种方式定义
  */
   echo"第一中二维数组的方式：<br>";
   $myarray = array(array('xiaodng',20,"小冬"),
                    array('Lin',22,'李林'));
					
    var_dump($myarray);
	
    echo"<br><br>第二中二维数组的方式：<br>";
	$myarray[0][0]= 'xiadong';
	$myarray[0][1]= 20;
	$myarray[0][2]= '夏冬';
	$myarray[1][0]= 'lin';
	$myarray[1][1]=  22;
	$myarray[1][2]= 'linlin';
	var_dump($myarray);
	
	echo "<p><p><p>---------------------------------PHP数组  多维维数组------------------------------------------<p><p><p>";
	echo"<br><br>第一中多维数组的赋值方式：<br>";
	$myarray = array(
	              array(
				        array('momo',19,'默默'),
						array('momo',19,'默默')),
						
				 array(
				       array(1993,1),
					  array(1990,4)
					  )
				    );
    var_dump($myarray);
  echo"<br><br>第二中多维数组的赋值方式：<br>";
   
   	$myarray[0][0][0]= 'xiadong';
	$myarray[0][0][1]= 20;
	$myarray[0][0][2]= '夏冬';
	
	$myarray[0][1][0]= 'lin';
	$myarray[0][1][1]=  22;
	$myarray[0][1][2]= 'linlin';
	
	$myarray[1][0][0]= 1993;
	$myarray[1][0][1]=  1;
	$myarray[1][1][0]= 1990;
	$myarray[1][1][1]= 4;
	var_dump($myarray);
  echo "<p><p><p>---------------------------------PHP数组   关联数组的定义------------------------------------------<p><p><p>";
  
  //关联数组与索引数组的不同之处在于，关联数组不仅可以使用数字来检索数组元素，而且可以使用字符串来检索数组元素
  
  echo"<br><br>第一中关联数组的赋值方式：<br>";
  $myarray = array('name'=>'小冬','age'=>19,'hobby'=>'看书');
  $myarray['name']='默默';
  $myarray['age']= 19;
  $myarray['hobby'] = '看书';
  var_dump($myarray);
   echo "<p><p><p>---------------------------------PHP数组   关在关联数组中字符串索引和数字索引是可以并存的------------------------------------------<p><p><p>";
  //在关联数组中字符串索引和数字索引是可以并存的
  $myarray= array('name'=>'小冬','age'=>19,'hobby'=>'看书',1=>'美丽的');
  var_dump($myarray);
  /*
	关联数组和索引数组类似，如果前后定义了相同的索引，则前面定义的的会被后面的定义覆盖
	关联数组同样拥有两种赋值方式和索引数组类似，也支持多维数组，即三维数组，四维数组等
  */
  echo "<p><p><p>---------------------------------PHP数组   数组的遍历------------------------------------------<p><p><p>";
   echo "<p><p><p>---------------------------------PHP数组  索引的遍历------------------------------------------<p><p><p>";
  $myarray = array('mo',20,'默默');
  $size = count($myarray);
  for($i = 0;$i<$size;++$i)
  {
	  echo $i.'=>'.$myarray[$i].'<br>';
  }
    echo"--while--<br>";
  $i=0;
  while($i<$size)
  {
	  echo$i.'=>'.$myarray[$i].'<br>';
	  $i ++;
  }
  echo"--do -- while--<br>";
  
  $i = 0;
  do
  {
		echo $i.'=>'.$myarray[$i].'<br>';
		++$i;
  }while($i<$size);
  
  echo"-foreach--<br>";
  foreach($myarray as $key=>$value)
  {
	  echo $key.'=>'.$value.'<br>';
  }  
   echo"---list()遍历数组--<br>";
   //list()不是真正的函数，而是与array()一样，是一种语言结构，list()只能用于下标0开始的索引数组，语法结构如下：
   $array = array("小冬",'20','狗东西');
   list($nickname,$age,$name)=$myarray;
   echo $nickname.'  '.$age.'  '.$name;
  
  echo"---each()遍历数组--<br>";
  //array each(array &$var) 用于返回数组中当前的键值对，并将数组指针向前移动一步。如果数组指针越过了数组的末端，则each()返回false
  $myarray = array('mo',20,'默默');
  $array = each($myarray);
  echo'<p>';
  var_dump($array);
  
  $array = each($myarray);
  echo'<p>';
  var_dump($array);
  
  $array = each($myarray);
  echo'<p>';
  var_dump($array);
  
  $array = each($myarray);
  echo'<p>';
  var_dump($array);
  echo'<p>';
   
  
  $myarray  = array('默默',19,'看书');
  while(list($key,$value) = each($myarray))
  {
	  echo $key.' => '.$value.'<br>';
  }
   echo "<p><p><p>---------------------------------PHP数组   遍历的关联数组--一维数组----------------------------------------<p><p><p>";
   $myarray = array('name'=>'默默','age'=>20,'hobby'=>'看书');
   foreach($myarray as $key => $value)
   {
	   echo $key.' => '.$value.'<br>';
   }
  echo "<p><p><p>---------------------------------PHP数组   遍历的关联数组--二维维数组----------------------------------------<p><p><p>";
  
  $myarray = array(
	              'gril ' => array(
				           'name'=>'小冬',
						   'nickname'=>'xiaodng',
						   'age'=>19
						   ),
						
				 'boy'=> array(
				        'name'=>'琳琳',
						'nickname'=>'xiaodng',
				        'age'=>8
					  ),
				    );
					
	foreach($myarray as $gender_key =>$gender_value)
	{
		echo $gender_key.' =><br> ';
		foreach($gender_value as $key =>$value)
		{
			echo '&nbsp&nbsp'.$key.' = > '.$value.'<br>';
		}
	}
  // 使用each 和list来遍历数组
  
   $myarray = array('name' =>'默默','age'=>20,'hobby'=>'看书');
   while(list($key,$value) = each($myarray))
   {
		echo $key.' => '.$value.'<br>';
   }
  echo "<p><p><p>---------------------------------PHP数组   数组的操作---------------------------------------<p><p><p>";
  //检查数组中是否存在指定的值
  //mixed array_search(mixed $needle ,array $haystack[,bool $strict]);
  //$needle 是要检查的指定的值，$naystack只要检查的数组,$strict可选，如果为true,则该函数
  //在搜索的时候检查$needle的参数类型。如果搜索到了，则返回对应的键名，否则，则返回FALSE,
  //如果数组$haystack中不止存在一个$needle,则返回第一匹配的键名
  $myarray = array('name'=>'沫沫','age'=>20,1=>2005,'hobby'=>'看书');
  $key  = array_search('沫沫',$myarray);
  echo '<p>'.$key;
   
  $key  = array_search(2005,$myarray);
  echo '<p>'.$key;

  $key  = array_search('xiadong',$myarray);
  echo '<p>'.$key;
   echo '<p>';
  var_dump($key);
  
  echo "<p><p><p>---------------------------------PHP数组   把一个或多个数组合并为一个数组--------------------------------------<p><p><p>";
  //array array_merge(array $arr1 [,array $array2 [,arrray..]])
  //如果，1，待合并的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。2，如果待合并的数组包含相同的数字键名，后面的值将不会覆盖原来的值，而是附加到该元素的后面
   $girl =array('name'=>'沫沫','age'=>19);
   $boy = array('name'=>'琳琳');
   $girl_date = array(0 => 1993);
   $boy_date = array(0 => 1990);
   $myarray = array_merge($girl,$boy,$girl_date,$boy_date);
   var_dump($myarray);
  
  echo "<p><p><p>---------------------------------PHP数组   把一个数组分隔成多个数组--------------------------------------<p><p><p>";
    //array array_chunk(array $input ,int $size,[,bool $preserve_keys]);
	//参数$input 是分隔的数组变量，参数$size 是分隔成的每个数组的元素个数（最后一个数组的元素个数可以小于$size），可选的$preserve_keys默认是FALSE,表示分隔后的数组,索引将从0开始重新编排。
	//若设置为TRUE，则分隔的数组将保留原数组中的键名
	$girl = array('小冬','琳琳','age'=>21,22,'hobby'=>'看书');
	var_dump($girl);
    $myarray = array_chunk($girl,2);
	echo'<br>';
	var_dump($myarray);
	
	$myarray = array_chunk($girl,2,true);
	echo'<p>';
	var_dump($myarray);
   echo "<p><p><p>---------------------------------PHP数组   统计数组中所有值出现的次数--------------------------------------<p><p><p>";
   //array array_count_values(array $input),该函数将返回一个关联数组，其键为$input数组中的值，值为$input数组中出现的次数
   $girl = array('默默','age'=>19,1993,'name'=>'默默','year'=>1993);
   $counts = array_count_values($girl);
   print_r($counts);
    
  echo "<p><p><p>---------------------------------PHP数组   计算数组中所有值的和--------------------------------------<p><p><p>";
    //number array_sum(array $array);
   $myarray = array(1,2,4=>3,'number'=>4,5);
   $sum = array_sum($myarray);
   echo '和为： '.$sum;
 echo "<p><p><p>---------------------------------PHP数组   删除数组中重复的值--------------------------------------<p><p><p>"; 
  //array array_unique(array $array);
  $myarray = array('name'=>'默默',19,'hobby'=>'看书','age'=>25,'默默');
  $new_array = array_unique($myarray);
  print_r($new_array);
 
  echo "<p><p><p>---------------------------------PHP数组   计算数组中元素的数目--------------------------------------<p><p><p>"; 
  //int count(array $array [,int $mode]);
  //其中 $array 表示
  
  
  
  
 ?>
 <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
  这里是 GET提交<br/>
    姓名：<input type='text' name='name' size=15/>
	年龄：<input type='text' name='age' size=15/>
	爱好：<input type='text' name='hobby' size=15/>
	<input type="submit" name="submit" value=" 提交"/>

 </form> 
 <br/>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    这里是 POST提交<br/>
    姓名：<input type='text' name='name' size=15/>
	年龄：<input type='text' name='age' size=15/>
	爱好：<input type='text' name='hobby' size=15/>
	<input type="submit" name="submit" value=" 提交"/>

 </form> 
 <br/>
<?php 
  
  
  echo "<p><p><p>---------------------------------PHP数组   预定义数组变量---服务器变量 '\$_SERVER---------------------------<p><p><p>"; 
  //服务器变量 $_SERVER，是一个全局关联数组，它提供了服务器和客户配置及当前请求环境的有关信息，根据服务器不同，$_SERVER中的变量值和变量个数会有个别的差异
  //$_SERVER['SERVER_NAME']可以获得主机域名，$_SERVER['SCRIPT_FILENAME']可以获得当前脚本的绝对路径
  foreach($_SERVER as $key =>$value)
  {
	  echo $key.' => '.$value.'<br>';
  }
  
  echo "<p><p><p>--------------PHP数组   环境变量 '\$_ENV  ----------------<p><p><p>";
  //$_ENV 也是一个全局关联数组，它提供PHP解析所在服务器环境的有关信息。
  // 例如，$_ENV['OS']，可以获得操作系统的类型，$_ENV['PATH']可以获得系统环境变量
  //如果，下面的循环，没有出现结果则，是php配置问题，需要在php配置里，把variables_order='GPCS'配置项，改为variables_order='EGPCS';，重启Apache
  foreach($_ENV as $key => $value)
  {
	  echo $key.' => '.$value.'<br>';
  }
  
   echo "<p><p><p>-----------------PHP数组   GET变量 '\$_GET  -----------------<p><p><p>";
   //$_GET 也是一个全局关联数组，利用它可以获得通过HTTP GET方式传递的变量。
   //例如：http://127.0.0.1:8080/php/charpt6.php?name='songdongdong'&age=22&age=reading;
   //$_GET['name'] ;$_GET['age'];$_GET['age'] ;
   /*
	  注意；如果要是传中文，最好是通过urlencode()函数对中文数据进行编码后再传递，如：urlencode('看书')
   */
  
   //看上面的表单
   if(isset($_GET['submit']))
   {
	   echo'<p>';
	   echo'姓名：'.$_GET['name'].'<br>';
	   echo'年龄：'.$_GET['age'].'<br>';
	   echo'爱好：'.$_GET['hobby'].'<br>';
	  
   }
   echo "<p><p><p>-----------------PHP数组   POST变量 '\$_POST  -----------------<p><p><p>";
   //和$_GET一样，$_POST也是一个全局关联数组，利用它可以获得通过HTTP POST方式传递的变量 ，//$_POST['name'] ;$_POST['age'];$_POST['age'] ;
   if(isset($_POST['submit']))
   {
	   echo'<p>';
	   echo'姓名：'.$_POST['name'].'<br>';
	   echo'年龄：'.$_POST['age'].'<br>';
	   echo'爱好：'.$_POST['hobby'].'<br>';
   }
     echo "<p><p><p>-----------------PHP数组   POST变量 '\$_SESSION  --'\$_COOKIE---------------<p><p><p>";
	 /*
		$_SESSION 也是一个全局关联数组，它包含所有与回话有关的信息。所谓会话简单的说就是服务器保留了用户的信息。注册会话信息，即注册SESSION变量，能在整个网站中引用这些
		会话信息，而无需通过GET或POST方式传递，这也大大的方便了网页的开发。
		  使用SESSION时，首先需要利用session_start()函数启动会话，然后通过给$_SESSION数组赋值的方式注册SESSION变量，接下来，就可以使用该会话信息了。
		  当会话结束，需要注销会话信息时，可以使用unset()函数注销指定的SESSION变量，或者利用session_destroy()函数彻底终止会话，
		  
		 $_COOKIE也是一个全局关联数组，它常用于识别用户。不同于SESSION,COOKIE保存在用户计算机中，这就给了黑客可乘之机，因此很多浏览器都禁止使用cookie的功能
		    使用cookie的时候，首先需要利用secookie(),函数设置cookie的名称，值，有效期等，设置完成后就可以通过$_COOKIE数组访问，键名COOKIE的名称，键值即是COOKIE的值。
			当有效期过了，COOKIE会自动销毁。如果需要提前销毁，则需要利用setcookie()函数将COOKIE的有效期设置为当前时间以前。
		
	 */
     echo "<p><p><p>-----------------PHP数组   POST变量 '\$_REQUEST----'\$_FILES-----------<p><p><p>";
    /*
	    $_REQUEST是个全局关联数组，它包含了$_GET、$_POST、$_COOKIE的信息，是一个"全能选手"。但是"$_REQUEST 速度较慢，而且不够安全，因此不推荐"
		$_FILES这个全局关联数组与其他的预定义的数组有所不同，他是一个二维数组，包含5个元素，读数组的第一个下标表示表单的文件上传元素名，第二个下标是下面5个预定义下标之一，
		分别描述了上传文件的属性
	    $_FILES['upload-name']['name']:表示客户端想服务器上传文件的文件名
		$_FILES['upload-name']['type']:表示上传文件的MIME类型，这个变量是否赋值取决于浏览器的功能
		$_FILES['upload-name']['size']:上传文件的大小。以字节为单位
		$_FILES['upload-name']['tmp_name']:上传之后，将此文件移动到最终位置之前赋予的临时名。
		$_FILES['upload-name']['error']:上传状态码 有5种可能。
		   5种可能的上传状态码如下：
		         1，UPLOAD_ERR_OK ：文件成功上传
		         2，UPLOAD_ERR_INI_SIZE ：文件大小超出了 upload_max_filesize所指定的最大值，该值在PHP配置文件中设置
				 3，UPLOAD_ERR_FORM_SIZE ：文件大小超出了MAX_FILE_SIZE隐藏表单域参数(可选)指定的最大值。
				 4，UPLOAD_ERR_PARTIAL:文件只上传了一部分
				 5，UPLOAD_ERR_NO_FILE:上传表单中没有指定文件
				 
	
	*/
   
 
?>
 <br>
 <form enctype="multipart/form-data" action=<?=$_SERVER['PHP_SELF']?> method="POST">
 
    <input type="hidden" name="MAX_FILE_SIZE" value="5242880"/><!--10M-->
	上传文件：<input name="upload_file" type="file" size="50"/>
	          <input type="submit" name="submit" value="上传"/>		  
 
 </form>
<?php 
 //upload_tmp_dir 需要设置，否则，不能上传
  if(isset($_POST['submit']))
  {
	  echo $_FILES['upload_file']['error']==UPLOAD_ERR_OK ? '上传成功<br>' :' 上传失败<br>';
	  echo "上传文件名：".$_FILES['upload_file']['name']."<br>";
	  echo "上传文件大小：".$_FILES['upload_file']['size']."字节<br>";
	  echo "临时文件名：".$_FILES['upload_file']['tmp_name']."<br>";
  }


  echo "<p><p><p>-----------------PHP数组   POST变量 '\$GLOBALS-----------<p><p><p>";

  //$GLOBALS也是一个关联数组，可以认为是全局变量的集合它包含了全局作用域中所有变量
  
  function myfunc()
  {
	  $name = '宋冬冬';//局部变量
	  
	  echo $GLOBALS['name'].'<br>';
	  echo $GLOBALS['age'].'<br>';
	  
	  
	    
  }
  $name='晏姝';//全局变量
  $age = 20;//全局变量
  myfunc();
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

?>