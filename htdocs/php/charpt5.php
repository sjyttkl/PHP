<?php

 //php流程控制
 echo "<p>---------------------------------php流程控制-----------------------------------------------";
 echo"<p>开始寻宝。。。<br>";
 echo"左。。。<br>";
 echo"右。。。<br>";
 echo"上。。。<br>";
 echo"下。。。<br>";
 echo"发现了吗？。。。<br>";
 echo"发现宝藏了。。。<br>";
 echo "<p>---------------------------------php分支结构-----------------------------------------------";
 
 $today = date("w");
 if($today==0)
 {
	 echo"<p>亲今天是礼拜天，可以睡懒觉了哦。。";
 }
 else if($today==1)
 {
	 echo"<p>不好意思，今天不是礼拜天，是周一，你需要工作了";
 }else if($today==2)
 {
	  echo"<p>不好意思，今天不是礼拜天，是周二，你需要工作了";
 }else if($today==3)
 {
	  echo"<p>不好意思，今天不是礼拜天，是周三，你需要工作了";
 }else if($today==4)
 {
	  echo"<p>不好意思，今天不是礼拜天，是周四，你需要工作了";
 }else if($today==5)
 {
	  echo"<p>不好意思，今天不是礼拜天，是周五，你需要工作了";
 }else if($today==6)
 {
	  echo"<p>不好意思，今天不是礼拜天，是周六，你需要工作了";
 }
 
 echo "<p>---------------------------------switch语句-----------------------------------------------";
 $today = date("w");
 switch($today)
 {
	
 case 1: 
	 echo"<p>不好意思，今天不是礼拜天，是周一，你需要工作了";
	 break;
 case 2:
	  echo"<p>不好意思，今天不是礼拜天，是周二，你需要工作了";
	  break;
 case 3:
	  echo"<p>不好意思，今天不是礼拜天，是周三，你需要工作了";
	  break;
 case 4:
	  echo"<p>不好意思，今天不是礼拜天，是周四，你需要工作了";
	  break;
 case 5:
	  echo"<p>不好意思，今天不是礼拜天，是周五，你需要工作了";
	  break;
 case 6:
	  echo"<p>不好意思，今天不是礼拜天，是周六，你需要工作了";
	  break; 
  default:
       echo"<p>亲今天是礼拜天，可以睡懒觉了哦。。";
	  break; 
 }
 
 
 
  echo "<p>---------------------------------循环语句(while)-----------------------------------------------<p>";
  $num = 1;
  while($num<=100)
  {
	  echo $num." ";
	  ++$num;
  }
 echo "<p>---------------------------------循环语句(do--while)-----------------------------------------------<p>";
   $num = 1;
   do
   {
	   echo $num." ";
	   ++$num;
   }while($num<=100);
 echo "<p>---------------------------------循环语句(for)-----------------------------------------------<p>";
 
 for($num =0;$num<=100;++$num)
 {
	 echo $num."  ";
 }
 
 $girl = array('默默','mo','阳光莫','小小草');
 $size = count($girl);
 for($i=0;$i<$size;++$i)
 {
	 echo $girl[$i].'  ';
 }
 
 echo "<p>---------------------------------循环语句(foreach)-----------------------------------------------<p>";
 
  $girl = array('默默','mo','阳光莫','小小草');
  foreach($girl as $value)
  {
	  echo $value." ";
  }
  $girl =array('名字'=>'小冬','英文名字'=>'xiadong','美称'=>'xiaondongdong','外号'=>'小');
  foreach($girl as $key =>$value)
  {
	  echo $key.' : '.$value.'<br>';
  } 
  
 
 echo "<p>---------------------------------循环嵌套-----------------------------------------------<p>";
 $num = 1;
 while($num<=10)
 {
	 $i = 1;
	 while($i<=$num)
	 {
		 echo $i.' ';
		 ++$i;
	 }
	 echo '<br>';
	 ++$num;
 }
 
 echo"<p>";
 $student = array(array('name'=>'小冬','age'=>19,'hobby'=>'看书'),
                  array('name'=>'晏姝','age'=>18,'hobby'=>'编程'));
				  
  
    foreach($student as $stu)
	{
		echo'<p>';
		foreach($stu as $key =>$value)
		{
			echo $key.' : '.$value.'<br>';
		}
	}
 
 echo "<p>---------------------------------循环嵌套 ----- breka  continue -----------------------------------------------<p>";
 
 for($i = 1;$i<=10;++$i)
 {
	 for($j =1;$j<=8;++$j)
	 {
		 if($j==4)
		 {
			 break 1;// break 后面接一个数字，代表跳出几层循环。break 1，代表跳出一层循环
		 }
		 echo $j."  ";
	 }
	 echo '<br>';
 }
 echo"<br>  <br>"; 
  for($i = 1;$i<=10;++$i)
 {
	 for($j =1;$j<=8;++$j)
	 {
		 if($j==4)
		 {
			 break 2;// break 后面接一个数字，代表跳出几层循环。break 2，代表跳出外层循环
		 }
		 echo $j."  ";
	 }
	 echo '<br>';
 }
 
 echo"<br>  <br>";
 
   for($num = 2;$i<=100;++$num)
 {  $i =2;
	 while($i<=$num-1)
	 {
		 if($num %$i ==0)
		 {
			 continue 2;// continue  后面接一个数字，代表跳出几层循环。break 2，代表跳出外层循环,后，继续执行尚未执行的语句
		 }
		 ++$i;
		
	 }
	  echo $num."  ";
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>