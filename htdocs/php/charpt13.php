<?php
  
  echo "<p>---------------------------------会话管理  COOKIE  SESSION-----------------------------------------<p>";
 /*
	1,cookie
	  bool setcookie ( string $name [, string $value = "" [, int $expire = 0 [, string $path = "" [, string $domain = "" [, bool $secure = false [, bool $httponly = false ]]]]]] )
      $name Cookie的名称
      $value:是Cookie保存在客户端的值，可以通过$_COOKIE['name']获取到。	  
 */ 
 $name = 'last_login_time';
 /*
 $value = date('Y-m-d H-i-s');
 setcookie($name,$value);
 setcookie($name,$value,time()+3600*24);
 setcookie($name,$value,0,'/Mo/');
 setcookie($name,$value,0,'','www.mo.com');
 setcookie($name,$value,0,'','',true);
 setcookie($name,$value,0,'','','',true);
 */
 
 
 date_default_timezone_set('ASia/Shanghai');//设置默认区时
 $name = 'last_login_time2';
  //下面这段代码是用于保存用户每次登陆时间
  if(isset($_COOKIE[$name]))
  {
	  echo "你上次访问时间是".$_COOKIE[$name]."<br>";
  }
  else
  {
	  echo "欢迎您的第一次访问网站";
  }
   setcookie($name,date('Y年 m 月 d 日 H时 i 分 s 秒'));//设置或更新Cookie的值
   
   
   /*
   //删 除 cookie -- 失效时间设置为当前时间就行了
   
   setcookie('last_login_time','',time()-1);//失效时间为当前UNIX时间戳之前1秒
    */
	
	
	
 ?>
 <?php
 
    echo "<p>---------------------------------会话管理  COOKIE  的应用---------------------------------------<p>";
    /*	
	Cookie是Web开发中的应用有很多，但是考虑到安全性，我们主要用它来保存用户一些‘踪迹’。例如，用户在填写表单时，对一些不太重要的信息，
	如用户名，邮箱等，可以用cookie来保存
	*/
	//利用cookie保存表单信息
	
	if(!isset($_POST['submit']))
	{
		$username = '';
		$email = '';
		$tel = '';
		if(isset($_COOKIE['username']))
		{
			//如果设置了用户名cookie，就可以从cookie变量中取得用户名的值
			$username = $_COOKIE['username'];
		}
		if(isset($_COOKIE['email']))
		{
			$email = $_COOKIE['email'];
		}
		if(isset($_COOKIE['tel']))
		{
			$tel = $_COOKIE['tel'];
		}
		
		//输出表单
		echo <<<FORM
      <form action="{$_SERVER['PHP_SELF']}" method = "post">
			  <table>
				<tr>
				   <td>用户名：</td>
				   <td><input type='text' name='username' value='{$username}'/></td>
				</tr>
				<tr>
				   <td>邮箱：</td>
				   <td><input type='text' name='email' value='{$email}'/></td>
				</tr>
				<tr>
				   <td>电话：</td>
				   <td><input type='text' name='tel' value='{$tel}'/></td>
				</tr>
				<tr>
				  
				   <td colspan=2><input type="submit" name="submit" value="提交"></td>
				</tr>
			  
			  
			  
			  </table>
		
		
		
		    </form>
FORM;

	}
	else
	{
		if (empty($_POST['username']))
		{
			echo"警告：用户名不能为空";
		}
		else if (empty($_POST['email']))
		{
			echo"警告：邮箱 不能为空";
		}
		else if (empty($_POST['tel']))
		{
			echo"警告：电话 不能为空";
		}
		else 
		{
			echo "您的信息如下：<br>";
			echo '用户名 '.$_POST['username'].'<br>';
			echo '邮箱 '.$_POST['email'].'<br>';
			echo '电话 '.$_POST['tel'].'<br>';
		}
		
		
		//返回链接
		echo '<p> <a href="'.$_SERVER['PHP_SELF'].'">返回</a>';
		//设置或者更新cookie数据
		setcookie('username',$_POST['username'],time()+3600*24);
		setcookie('email',$_POST['email'],time()+3600*24);
		setcookie('tel',$_POST['tel'],time()+3600*24);
	}
	
 
   echo "<p>---------------------------------会话管理  SESSION 的应用---------------------------------------<p>";
   //启动session
   session_start();
   echo'<p>默认的session_name名称为：';
   echo session_name();
   
   session_name("Mo");//修改会话名称
   echo'<p>修改后的session_name为：';
   echo session_name();
   
   echo"<p>session_id的值为：";
   echo session_id("xiadongdongdongdong");
    echo'<p>修改后的ssession_id的值为：';
   echo session_id();
   
   echo"<p>session文件保存路径为：：";
   echo session_save_path();
   session_save_path("D:/Myserver/Temp");
  
   echo'<p>修改后的session_save_path的值为：';
   echo session_save_path();
   
   
   //注册session
    
	 $_SESSION['name']='xiaodong';
	 if(isset($_SESSION['name']))//empty($_SESION['name'])
	 {
		  echo'<p>已经注册session变量：';
	 //读取session $_SESSION['name']
           echo '<p> .. '.$_SESSION['name'].'，你来了';
	 }
	 else
	 {
		  echo'<p>尚未注册session变量：';
	 }
	 
    
	//注销 Session  session 和cookie一样，过了有效期就会自动删除 可以用unset()去注销一个变量和sessin
	unset($_SESSION['name']);
	
	
	echo"<p>注销后：<br>";
	print_r($_SESSION);
	
	
	
	
	/*
	  如果要注销，所有的Session变量，结束当前的会话，则稍微麻烦
	  需要先将$_SESSION数组中所有的元素注销，然后使用session_destory()函数清除当前会话中的所有数据。
	  如果使用了Cookiez在客户端保存的session_id，结束会话时需连同Cookie一起删除
	  	
	*/
	//注销所有会话
	$_SESSION = array();
	
	if(isset($_COOKIE[session_name()]))
	{
		setcookie(session_name(),'',time()-1);
	}
	//清除会话中的所有数据
	session_destroy();
	
	if(empty($_SESSION['name']))
	{
		echo '<p>您的已经注销了。。';
	}
		
    //-***特别注意，千万，不用 unset($_SESSION)方式去注销整个$_SESSION数组，否则将使$_SESSION数组对的相关函数失效 
   
   
   
    echo "<p>---------------------------------会话管理  SESSION 的作用范围，--------------------------------------<p>";
	//1,
	//session_set_cookie_params(int $lifetime [,string $path [,string $domain [,bool $secure = false [,bool $httponly = false]]]])
	
	/*2,
		通过URL传递 session_id，有时候客户端浏览器，会禁用cookie,这就使通过cookie来传递session_id的方式不可行了
		我们可以通过 get方式，在url添加sessin_name和session_id,将需要传递给会话页面
	*/
	session_name("xiaodong");
	session_id("12345789123457890");
	$_SESSION['xiaodong'] = "小冬";
	 echo $_SESSION['xiaodong'];
   
 ?>
	<a href='link.php'>普通链接</a>
	<a href="link.php?<?=session_name()?>=<?=session_id()?>">会话链接</a> 
<?php
	  echo "<p>---------------------------------会话管理  SESSION 有效期，--------------------------------------<p>";
	  
	  
	  
?>
 
 
