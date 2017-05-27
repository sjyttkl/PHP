<?php
  
  echo "<p>---------------------------------文件操作------------------------------------------<p>";
  
  // ./*  表示当前路径     ../*  表示父路径
   //1，bool copy(string $source,string $dest)
   
	$source_path = './Mo.txt';
	$dest_path = './Lin.txt';
	if(file_exists($source_path))
	{
		if(copy($source_path,$dest_path))
		{
			echo"复制成功" ;
		}
		else
		{
			echo '复制失败';
		}
	}
	else
	{
		echo '该文件不存在。。。。';
	}
	 //2,bool rename(string $oldname,string $newname) 文件重命名和移动使用的同一个函数
	$new_name='../这是已经被移动或者是重命名的文件.txt';
	if(file_exists($source_path))
	{
		if(copy($source_path,$new_name))
		{
			echo"文件移动 成功" ;
		}
		else
		{
			echo '文件移动 失败';
		}
	}
	else
	{
		echo '该文件不存在。。。。<br>';
	}
  
   //3,bool unlink(string $filename) 删除文件
   
   /*4,bool mkdir(string $pathname [, int $mode])新建立的目录
	$pathname 为目录路径
	$mode  为可选参数 用来设置访问权限 ，采用8进制的设置 默认为0777，为最高访问权限，借鉴了Linux表示文件权限的方式
	   r  -可读
	   w  -可写
	   x  -可执行
	   文件又有3种不同的用户级别--三位字符组表示
	     文件拥有者(u)
		 所属用户组 (g)
		 系统的其他用户(o)
		 若没有权限一般用 "-"字符
   
       如果用数字1来表示权限有效，用0来表示权限无效，我们就可以用八进制来表示文件的权限
	   rwx -- 111
	   rw-     110
	   r--     100
	   
	   但是很遗憾，这种表示方式 windows是不认可的，所以$mode参数在windows下是失效的
	   
	   
	   
	   
	   
   */
    if(mkdir('D:/Mo'))
	{
		echo "创建成功！";
	}
	else
	{
      //如果有同名的文件夹则创建失败，但是可以用file_exists($path)先判断下
	  echo"创建失败";
	}
    
   //删除目录 bool rmdir(string $dirname);
   
    echo "<p>--------------------遍历目录------------------------<p>";
	//array scandir(string $directory [,int $sorting_order]) 只是列出 当前所在目录的文件
	// sorting_order 默认是按照字母升序排列，如果设置为 1，则 按照字母降序排列
	
	$path = './';//当前目录，当前路径
	if(file_exists($path))
	{
		$file_asc = scandir($path);
		$file_desc = scandir($path,1);
		
		echo"<p>该目录下的文件 （升序排列）<p>";
		print_r($file_asc);
		
		echo"<p>该目录下的文件 （降序排列）<p>";
		print_r($file_desc);
	}
	else
	{
		echo"该目录不存在<br>";
	}
   
    echo "<p>--------------遍历目录- 递归当前目录及其所有的子孙目录---------------<p>";
	
	 function getDirTree($path)
	 {
		 $tree = array();
		 $tmp = array();
		 if(!is_dir($path))  //如果不是路径，则返回null
		 {
			 echo"该目录不存在<br>";
			 return null;
		 }
		 $files = scandir($path);
		 foreach($files as $value)
	    {
			 if($value=='.'|| $value=='..')
			 {
				 continue;//跳过当前目录和父目录
			 }
			 
			 $full_path = $path.'/'.$value;
			 echo"$full_path<br>";
			 if(is_dir($full_path))
			 {
				 $tree[$value] = getDirTree($full_path);
			 }
		     else
			 {
				 $tmp[] = $value;
			 }
		}
		 
		 //将文件添加到结果数组的末尾
		 $tree = array_merge($tree,$tmp);
		 return $tree;
	 }
    $path  = './TestMo';
	print_r(getDirTree($path));
   
    echo "<p>--------------遍历目录---复制 ，移动目录---------------<p>";
   /*
	PHP没有提供直接复制和移动目录的函数，我们可以使用这样的思路来实现
	递归遍历目录，如遇到子目录，则在目录的相应位置新建同名目录，如遇字文件
	则将该文件复制到目录的相应位置，如果移动目录，则复制完目录后还要递归删除源目录。
	
	 --复制目录
	 --删除目录
	 ---移动目录是  复制目录+删除目录
   */
   
   echo "<p>--------------文件的读写操作---------------<p>";
   /*
	1,resource fopen(string $filename,string $mode)
	$filename 为文件的路名
	$mode 是文件的打开方式
	该函数返回打开后的文件句柄
	其中，$filename 为本地文件的路径名，也可以是URL地址。
	   如果是URL地址，则需要打开allow_url_fopen开关。
	   $mode 的可能取值如下表
	  R
	  r+ 
	  。。。
	  
	  $fid = fopen('./Mo.txt');  返回句柄
	 2， bool fclose(resource $handle)
	  函数将尝试关闭文件句柄，如果成功则返回TRUE，否则返回FALSE
	  
	  string fgetc(resource $handle);
	  单字符读取，要关注字符编码，如果是双字节字符，读取的单字节将会是乱码
	  
	  
   */
   
   
   // 按字符 读取文件
    $fid = fopen('./Mo.txt','rb'); 
	if(!$fid)
	{
		echo "文件打开 失败";
	}
	else
	{
		$chr = fgetc($fid); //读取第一个字符
		var_dump($chr);
		echo'<br>';
		$chr = fgetc($fid);  //读取第二个字符
		var_dump($chr);
		echo"<br>";
		$chr = fgetc($fid);  //读取第三个字符
		var_dump($chr);
		echo"<br>";
		
		
	}
	fclose($fid);
   
   // 读取指定长度字符串fread()
   /*
     3，string fread(int $handle ,int $length)
	 函数在读完$length字节的数据或者达到文件的末尾EOF时会停止读取，如果出现错误则会返回 FALSE
	 
	 注意：  string fread(int $handle ,int $length)，
	            函数读取双字节字符时，如果双字节字符被截断，读取会出现乱码
	
	
	 另外，读者，仅仅是想将整个文件的内容读成字符串，则最好是使用下面讲到的 file_get_contents()函数。
	 
	 4，fgets()和fgetss()用来读取一行数据
	 string fgets(int $handle [,int $length])默认是1024
	   函数返回读取的一行字符串，出错时返回FALSE。遇到下列情况下
	     4.1 遇到换行符（换行符也被读取到返回字符串中）
		 4.2 遇到文件结尾EOF
		 4.3 已经读取了$length-1字节的数据
		 
     string  fgetss(resource  $handle [,$length[,string $allowable_tags]])
	   该函数读取一行数据时，会过滤掉其中 HTML 和php标记
	    $allowable_tags  用来设置那些标记不被过滤
		
	 5，readfile(),file(),file_get_contents()用来读取一个文件并输出内容
	    
	  
   */
    $fid = fopen('./Mo.txt','rb');
	if(!$fid)
	{
		echo '文件打开失败';
	}
	else
	{
		$str = fread($fid,3);
		var_dump($str);
		echo'<br>';
		
		$str = fread($fid,4);
		var_dump($str);
		echo'<br>';
	}
	fclose($fid);
   
   $fid = fopen('./Mo.txt','rb');
   if(!$fid)
   {
	   echo '文件打开失败';
   }
   else
   {
	   $line = fgets($fid); //读取第一行
	   var_dump($line);
	   echo"<br>";
	   
	   $line = fgets($fid);
	   var_dump($line);
	   echo"<br>";
	   
	   $line = fgets($fid);
	   var_dump($line);
	   echo"<br>";
	   
   }
   
   fclose($fid);
   
     echo "<p>--------------文件的读写操作---写 操作-------<p>";
   
   /*
		写操作 常用函数 fwrite() 和 file_put_contents();
		int fwrite(resource $handle,string $string[, int $length]);
		$handle 这里需要一个句柄
		
		fwrite()函数还有一个别名fputs() 二者是一样的
		还有一个php5中新增的函数file_put_contents()也可以用与向文件中写入内容
		int file_put_contents(string $filename,string $data);
   
   */
   $str = '我知道这是 广西大学 计算机与电子信息学院';
   $path = './Mo.txt';
   $fid = fopen($path,'wb');
   fwrite($fid,$str);
   fclose($fid);
   readfile($path);//输出文件
   
    echo "<p>-------------------------------远程访问文件-------------------------------<p>";
	 
	 //远程访问函数readfile() 远程访问文件和访问本地文件很类似，只是文件路径变成了URL地址，同时需确保allow_url_fopen开关已经打开了，可以使用phpinfo()查看
	 //1,
	 // readfile('http://www.baidu.com');
	  
	 //2,
	 // $str = file_get_contents('http://www.baidu.com');
	 // echo $str;
	 
    //3,
   // $file_array = file('http://www.baidu.com');
    //echo join('',$file_array);
	
	 //4,
	 //$fid = fopen('http://www.baidu.com',"rb");
	 //$str = "";
	 //while(!feof($fid))
	// {   //feof — 测试文件指针是否到了文件结束的位置
	//	 $str .= fgets($fid);
		 
	 //}
	 //fclose($fid);
	// echo $str;
   
    //5,
	 $fid = fopen('http://www.baidu.com',"rb");
	 $str = "";
	 while(!feof($fid))
	 {   //feof — 测试文件指针是否到了文件结束的位置
		 $str .= fread($fid,8192);
		 
	 }
	 fclose($fid);
	 //echo $str;
   
   
   
   
     echo "<p>-------------------------------文件的上传和下载-------------------------------<p>";
    /*
		*****上传单个文件
		
		
		php 通过POST方法上传文件，默认为系统临时目录也就是服务端的临时目录，可以通过修改
		     upload_tmp_dir选项来改变临时变量
			 然后利用move_uploaded_file()函数将其移动到指定位置
	     
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
<html>



   <br>
 <form enctype="multipart/form-data" action=<?=$_SERVER['PHP_SELF']?> method="POST">
 
    <input type="hidden" name="MAX_FILE_SIZE" value="104857600"/><!--100M-->
	上传文件：<input name="upload_file" type="file" size="50"/>
	          <input type="submit" name="submit" value="上传"/>		  
 
 </form>
   
 </html>  
  
   
<?php
   if(isset($_POST['submit']))
   {
	   switch($_FILES['upload_file']['error'])
	   {
		   case UPLOAD_ERR_INI_SIZE:
		     echo '<script>alert("文件大小超过了 服务器的限制");</script> ';
			 break;
		   case UPLOAD_ERR_FORM_SIZE :
		     echo '<script>alert("文件大小超过了 浏览器的的限制");</script> ';
			 break;
		   case UPLOAD_ERR_PARTIAL:
		     echo '<script>alert("文件 只有部分文件被上传");</script> ';
			 break;
		   case UPLOAD_ERR_NO_FILE:
		     echo '<script>alert("没有文件被上传");</script> ';
		    break;
		  case UPLOAD_ERR_NO_TMP_DIR:
		     echo '<script>alert("找不到临时文件");</script> ';
			 break;
	      case UPLOAD_ERR_CANT_WRITE:
		     echo '<script>alert("文件写入失败");</script> ';
			 break;
    	  case UPLOAD_ERR_OK:
		     $uplaod_dir = './'.$_FILES['upload_file']['name'];
			 echo "$uplaod_dir";
			 if(file_exists($uplaod_dir))
			 {
				 echo '<script>alert("已经存在同名文件了。。");</script> ';
			 }
		     else
			 {
				 if(move_uploaded_file($_FILES['upload_file']['tmp_name'],$uplaod_dir))
				 {
					 echo '<script>alert("文件写入成功");</script> ';
				 }
				 else
				 {
					 echo '<script>alert("文件写入失败");</script> ';
				 }
			 }
			 break;
	   }
   }
   
   /*
   *****上传多个文件
   只要以数组的形式来命名表单中的上传标记即可
   
      
   
   */
   
?>
<html>



   <br>
   <br>
   <br>
   <br>
   <br>
 <form enctype="multipart/form-data" action=<?=$_SERVER['PHP_SELF']?> method="POST">
 
    <input type="hidden" name="MAX_FILE_SIZE" value="104857600"/><!--100M-->
	
	<table>
	<tr>
	  <td>上传文件：<input name="upload_file2[]" type="file" size="50"/></td>
	</tr>         
		
    <tr>
            
	    <td>上传文件：<input name="upload_file2[]" type="file" size="50"/></td>
	</tr>

	<tr>
	  <td>上传文件：<input name="upload_file2[]" type="file" size="50"/></td>
	</tr>         
		
    <tr>
            
	    <td>上传文件：<input name="upload_file2[]" type="file" size="50"/></td>
	</tr>
	
	<tr>
	  <td>上传文件：<input name="upload_file2[]" type="file" size="50"/></td>
	</tr>         
		
    <tr>
            
	    <td>上传文件：<input name="upload_file2[]" type="file" size="50"/></td>
	</tr>

	
	
	 <tr>
            
	    <td> <input type="submit" name="submit" value="上传"/>	</td>
	</tr>
		 			  
 </table>
 </form>
   
 </html>  
<?php
 
   //文件上传函数
   
   function uploadFile2($file_error,$file_tmp_name,$file_name)
   {
	   $info = " ";
	   if($file_name==" ")
	   {
		   return $info;
	   }
	   
	   switch($file_error)
	   {
		   case UPLOAD_ERR_INI_SIZE:
		     $info = $file_name." : 文件大小超过服务器的限制。<br>";
			
			 break;
		   case UPLOAD_ERR_FORM_SIZE :
		     $info = $file_name." : 文件大小超过了 浏览器的的限制。<br>";
		   
			 break;
		   case UPLOAD_ERR_PARTIAL:
		    $info = $file_name." : 文件 只有部分文件被上传。<br>";
		    
			 break;
		   case UPLOAD_ERR_NO_FILE:
		    $info = $file_name." : 没有文件被上传。<br>";
		    
		    break;
		  case UPLOAD_ERR_NO_TMP_DIR:
		    $info = $file_name." : 找不到临时文件。<br>";
		    
			 break;
	      case UPLOAD_ERR_CANT_WRITE:
		    $info = $file_name." : 文件写入失败。<br>";
		     
			 break;
    	  case UPLOAD_ERR_OK:
		  //将utf-8编码修改成 gb2312 解决中文乱码
		     $uplaod_dir = './'.iconv("UTF-8","gb2312",$file_name);
			 echo "$uplaod_dir";
			 if(file_exists($uplaod_dir))
			 {
				  $info = $file_name." : 已经存在同名文件了。。。<br>";
				
			 }
		     else
			 {
				 if(move_uploaded_file($_FILES['upload_file2']['tmp_name'],$uplaod_dir))
				 {
					  $info = $file_name." : 文件写入成功。<br>";
					 
				 }
				 else
				 {
					  $info = $file_name." : 文件上传失败。<br>";
					
				 }
			 }
			 break;
	   }
   }
 
  if(isset($_POST['submit']))
   {
	   $info = '';
	   $count = count($_FILES['upload_file']['name']);//同时上传的文件个数
	   
	   for($i = 0;$i<$count;++$i)
	   {
		   if($_FILES['upload_file']['name'][$i]=="")
		   {
			   continue ;//跳过空文件名；
		   }
		   $info .= uploadFile2(
						$_FILES['upload_file']['error'][$i],
						$_FILES['upload_file']['temp_name'][$i],
						$_FILES['upload_file']['name'][$i]
		   );
		   
	   }
	   echo $info;
	  
   }
   /*
	 文件的下载
	 
	 直接链接下载文件
     下面的这种方式，又有危险， 1，直接用浏览器打开了，2直接暴露了下载的地址很危险，被防盗链者使用
     下面的这种方式，又有危险， 1，直接用浏览器打开了，2直接暴露了下载的地址很危险，被防盗链者使用
	
       
   */
//1,
   $file_path='./Mo.txt';
   /*
   echo<<<DOWNLOAD
   <a href="{$file_path }">文件下载</a>
DOWNLOAD;
*/
//2, 要实现 安全下载
   //通过 header()和readfiile()实现下载
   /*
   $file_path='./Mo.txt';
   $file_path = iconv('UTF-8','GB2312',$file_path);
   if(!file_exists($file_path))
   {
	   exit('<script>alert("该文件不存在！");</script>');
   }
   $file_name = basename($file_name); //文件名
   $file_size = filesize($file_path);  //文件大小
   header("Content-type:application/octet-stream");
   header('Content-Disposition:attachment;filename="'.$file_name.'"');
   header("Content-Length: ".$file_size);
   
   readfile($file_path);
   */
   
    //3,通过 X-Sendfile实现下载
     /*
		上面的方式下载，php读取文件内容会首先发送到Apache输出的缓冲区，然后
		  再发送给用户。这个就绕圈子了，效率不高，很多时候，我们可以直接让Apache把文件发给用户
		  用下面的方法
	 */ 
   $file_path='./Mo.txt';
   $file_path = iconv('UTF-8','GB2312',$file_path);
   if(!file_exists($file_path))
   {
	   exit('<script>alert("该文件不存在！");</script>');
   }
   $file_name = basename($file_name); //文件名

   header("Content-type: application/octet-stream");
   header('Content-Disposition:attachment;filename="'.$file_name.'"');
   header("X-Sendfile: ".$file_size);
   
   readfile($file_path);
   
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
