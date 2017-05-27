<?php
  
  echo "<p>---------------------------------PHP与MySql----------------------------------------<p>";
  
  
  /*
	5.x开始，PHP连接MYSQL无论使用哪种方式都是使用的mysqlnd驱动（当然是在你安装好的时候）。包括mysql_*、PDO_MYSQL、MYSQLi

        --with-mysqli=mysqlnd --with-pdo-mysql=mysqlnd 而不再是 --with-mysqli=/usr/local/mysql

     PHP7 正式移除了 mysql 扩展
       mysqlnd和mysql mysqli pdo_mysql关系打比方说 mysqlnd是金属，而mysql mysqli pdo_mysql只是金属制品而已

    使用PDO连接mysql
     $pdo = new PDO('mysql:host=localhost;dbname=database_name;port=3306','用户名','密码');
    $pdo->exec('set names utf8');

    $stmt = $pdo->prepare("select * from table where id =:id");
    $stmt->bindValue(':id',1,PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$rows = $pdo->query("select * from table where id = 1")->fetchAll(PDO::FETCH_ASSOC);
  
  */
	if(get_extension_funcs('php_mysqli') == false)
	{
		echo ' no mysql   ';
	}
	else
	{
		echo 'mysql is ok ';
	}
	  
	$hostname = "localhost";
	$user="root";
	$password="root";
	//$link = mysql_connect($hostname,$user,$password);
	$link = new PDO('mysql:host=localhost;dbname=mysql;port=3306','root','root');
	if($link)
	{
		echo"数据库链接成功";
	}
	else
	{
		die("数据库链接失败");
	}
	 mysql_close($link);
?>
 
 
