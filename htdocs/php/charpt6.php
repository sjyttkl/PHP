<?php
  
  echo "<p>---------------------------------PHP����----һά����------------------------------------------<p>";
  //�������飬1���������飬2���������顣ǰ����ʹ������Ϊ���������Ǽ�ʹ���ַ���Ϊ����Ҳ����ʹ������Ϊ��
  //2�ֶ�������ķ�ʽ�����ǵ�Ч��
   //1��
  $myarray = array('Mo',19,'ĬĬ');
  echo"��һ�ж�������ķ�ʽ��<br>";
  var_dump($myarray);//��ӡ������Ϣ
  //2 ,
  $myarray[0] = 'Mo';
  $myarray[1] = 20;
  $myarray[2] = 'С��';
  echo"<br>�ڶ��ж�������ķ�ʽ��<br>";
  var_dump($myarray);//��ӡ������Ϣ
  
  //ͨ��array() ������������ʱ��php���Զ���0��ʼ���α�š�ͨ��ֱ�Ӹ�ֵ�ķ�ʽ��������ʱ��Ҳ���Բ�ָ��������phpҲ���Զ�������0��ʼ������
  //����������ĳЩʱ��ָ����������һ�ζ���ʱ��ָ��������������£�����Ϊ���鵱ǰ�������ֵ+1;
  echo"<br>��һ�ж�������ķ�ʽ��php���Զ���0��ʼ���α��<br>";
  $myarray[] = 'Mo';
  $myarray[] = 20;
  $myarray[] = 'С��';
    var_dump($myarray);
  echo"<br>�ڶ��ж�������ķ�ʽ��������ĳЩʱ��ָ����������һ�ζ���ʱ��ָ��������������£�����Ϊ���鵱ǰ�������ֵ+1 �� ���ǰ��������ͬ��������ǰ��Ķ���ᱻ����Ķ��帲��<br>";   
  $myarray[3] = 'ĬĬ';
  $myarray[] = 20;
  $myarray[] = 'С�� ';
  var_dump($myarray);
  
  echo "<p><p><p>---------------------------------PHP����----��ά����------------------------------------------<p><p><p>";
  
  /*
	��һ�������Ԫ�ض������ֻ��߶����ַ���ʱ�򣬸����飬����һά���顣��һ�������Ԫ����������������ʱ��������Ƕ�ά���飬��ά�������ͨ��
	array()������ֱ�Ӹ�ֵ���ַ�ʽ����
  */
   echo"��һ�ж�ά����ķ�ʽ��<br>";
   $myarray = array(array('xiaodng',20,"С��"),
                    array('Lin',22,'����'));
					
    var_dump($myarray);
	
    echo"<br><br>�ڶ��ж�ά����ķ�ʽ��<br>";
	$myarray[0][0]= 'xiadong';
	$myarray[0][1]= 20;
	$myarray[0][2]= '�Ķ�';
	$myarray[1][0]= 'lin';
	$myarray[1][1]=  22;
	$myarray[1][2]= 'linlin';
	var_dump($myarray);
	
	echo "<p><p><p>---------------------------------PHP����  ��άά����------------------------------------------<p><p><p>";
	echo"<br><br>��һ�ж�ά����ĸ�ֵ��ʽ��<br>";
	$myarray = array(
	              array(
				        array('momo',19,'ĬĬ'),
						array('momo',19,'ĬĬ')),
						
				 array(
				       array(1993,1),
					  array(1990,4)
					  )
				    );
    var_dump($myarray);
  echo"<br><br>�ڶ��ж�ά����ĸ�ֵ��ʽ��<br>";
   
   	$myarray[0][0][0]= 'xiadong';
	$myarray[0][0][1]= 20;
	$myarray[0][0][2]= '�Ķ�';
	
	$myarray[0][1][0]= 'lin';
	$myarray[0][1][1]=  22;
	$myarray[0][1][2]= 'linlin';
	
	$myarray[1][0][0]= 1993;
	$myarray[1][0][1]=  1;
	$myarray[1][1][0]= 1990;
	$myarray[1][1][1]= 4;
	var_dump($myarray);
  echo "<p><p><p>---------------------------------PHP����   ��������Ķ���------------------------------------------<p><p><p>";
  
  //������������������Ĳ�֮ͬ�����ڣ��������鲻������ʹ����������������Ԫ�أ����ҿ���ʹ���ַ�������������Ԫ��
  
  echo"<br><br>��һ�й�������ĸ�ֵ��ʽ��<br>";
  $myarray = array('name'=>'С��','age'=>19,'hobby'=>'����');
  $myarray['name']='ĬĬ';
  $myarray['age']= 19;
  $myarray['hobby'] = '����';
  var_dump($myarray);
   echo "<p><p><p>---------------------------------PHP����   ���ڹ����������ַ������������������ǿ��Բ����------------------------------------------<p><p><p>";
  //�ڹ����������ַ������������������ǿ��Բ����
  $myarray= array('name'=>'С��','age'=>19,'hobby'=>'����',1=>'������');
  var_dump($myarray);
  /*
	��������������������ƣ����ǰ��������ͬ����������ǰ�涨��ĵĻᱻ����Ķ��帲��
	��������ͬ��ӵ�����ָ�ֵ��ʽ�������������ƣ�Ҳ֧�ֶ�ά���飬����ά���飬��ά�����
  */
  echo "<p><p><p>---------------------------------PHP����   ����ı���------------------------------------------<p><p><p>";
   echo "<p><p><p>---------------------------------PHP����  �����ı���------------------------------------------<p><p><p>";
  $myarray = array('mo',20,'ĬĬ');
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
   echo"---list()��������--<br>";
   //list()���������ĺ�����������array()һ������һ�����Խṹ��list()ֻ�������±�0��ʼ���������飬�﷨�ṹ���£�
   $array = array("С��",'20','������');
   list($nickname,$age,$name)=$myarray;
   echo $nickname.'  '.$age.'  '.$name;
  
  echo"---each()��������--<br>";
  //array each(array &$var) ���ڷ��������е�ǰ�ļ�ֵ�ԣ���������ָ����ǰ�ƶ�һ�����������ָ��Խ���������ĩ�ˣ���each()����false
  $myarray = array('mo',20,'ĬĬ');
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
   
  
  $myarray  = array('ĬĬ',19,'����');
  while(list($key,$value) = each($myarray))
  {
	  echo $key.' => '.$value.'<br>';
  }
   echo "<p><p><p>---------------------------------PHP����   �����Ĺ�������--һά����----------------------------------------<p><p><p>";
   $myarray = array('name'=>'ĬĬ','age'=>20,'hobby'=>'����');
   foreach($myarray as $key => $value)
   {
	   echo $key.' => '.$value.'<br>';
   }
  echo "<p><p><p>---------------------------------PHP����   �����Ĺ�������--��άά����----------------------------------------<p><p><p>";
  
  $myarray = array(
	              'gril ' => array(
				           'name'=>'С��',
						   'nickname'=>'xiaodng',
						   'age'=>19
						   ),
						
				 'boy'=> array(
				        'name'=>'����',
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
  // ʹ��each ��list����������
  
   $myarray = array('name' =>'ĬĬ','age'=>20,'hobby'=>'����');
   while(list($key,$value) = each($myarray))
   {
		echo $key.' => '.$value.'<br>';
   }
  echo "<p><p><p>---------------------------------PHP����   ����Ĳ���---------------------------------------<p><p><p>";
  //����������Ƿ����ָ����ֵ
  //mixed array_search(mixed $needle ,array $haystack[,bool $strict]);
  //$needle ��Ҫ����ָ����ֵ��$naystackֻҪ��������,$strict��ѡ�����Ϊtrue,��ú���
  //��������ʱ����$needle�Ĳ������͡�����������ˣ��򷵻ض�Ӧ�ļ����������򷵻�FALSE,
  //�������$haystack�в�ֹ����һ��$needle,�򷵻ص�һƥ��ļ���
  $myarray = array('name'=>'ĭĭ','age'=>20,1=>2005,'hobby'=>'����');
  $key  = array_search('ĭĭ',$myarray);
  echo '<p>'.$key;
   
  $key  = array_search(2005,$myarray);
  echo '<p>'.$key;

  $key  = array_search('xiadong',$myarray);
  echo '<p>'.$key;
   echo '<p>';
  var_dump($key);
  
  echo "<p><p><p>---------------------------------PHP����   ��һ����������ϲ�Ϊһ������--------------------------------------<p><p><p>";
  //array array_merge(array $arr1 [,array $array2 [,arrray..]])
  //�����1�����ϲ�������������ͬ���ַ�����������ü��������ֵ������ǰһ��ֵ��2��������ϲ������������ͬ�����ּ����������ֵ�����Ḳ��ԭ����ֵ�����Ǹ��ӵ���Ԫ�صĺ���
   $girl =array('name'=>'ĭĭ','age'=>19);
   $boy = array('name'=>'����');
   $girl_date = array(0 => 1993);
   $boy_date = array(0 => 1990);
   $myarray = array_merge($girl,$boy,$girl_date,$boy_date);
   var_dump($myarray);
  
  echo "<p><p><p>---------------------------------PHP����   ��һ������ָ��ɶ������--------------------------------------<p><p><p>";
    //array array_chunk(array $input ,int $size,[,bool $preserve_keys]);
	//����$input �Ƿָ����������������$size �Ƿָ��ɵ�ÿ�������Ԫ�ظ��������һ�������Ԫ�ظ�������С��$size������ѡ��$preserve_keysĬ����FALSE,��ʾ�ָ��������,��������0��ʼ���±��š�
	//������ΪTRUE����ָ������齫����ԭ�����еļ���
	$girl = array('С��','����','age'=>21,22,'hobby'=>'����');
	var_dump($girl);
    $myarray = array_chunk($girl,2);
	echo'<br>';
	var_dump($myarray);
	
	$myarray = array_chunk($girl,2,true);
	echo'<p>';
	var_dump($myarray);
   echo "<p><p><p>---------------------------------PHP����   ͳ������������ֵ���ֵĴ���--------------------------------------<p><p><p>";
   //array array_count_values(array $input),�ú���������һ���������飬���Ϊ$input�����е�ֵ��ֵΪ$input�����г��ֵĴ���
   $girl = array('ĬĬ','age'=>19,1993,'name'=>'ĬĬ','year'=>1993);
   $counts = array_count_values($girl);
   print_r($counts);
    
  echo "<p><p><p>---------------------------------PHP����   ��������������ֵ�ĺ�--------------------------------------<p><p><p>";
    //number array_sum(array $array);
   $myarray = array(1,2,4=>3,'number'=>4,5);
   $sum = array_sum($myarray);
   echo '��Ϊ�� '.$sum;
 echo "<p><p><p>---------------------------------PHP����   ɾ���������ظ���ֵ--------------------------------------<p><p><p>"; 
  //array array_unique(array $array);
  $myarray = array('name'=>'ĬĬ',19,'hobby'=>'����','age'=>25,'ĬĬ');
  $new_array = array_unique($myarray);
  print_r($new_array);
 
  echo "<p><p><p>---------------------------------PHP����   ����������Ԫ�ص���Ŀ--------------------------------------<p><p><p>"; 
  //int count(array $array [,int $mode]);
  //���� $array ��ʾ
  
  
  
  
 ?>
 <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
  ������ GET�ύ<br/>
    ������<input type='text' name='name' size=15/>
	���䣺<input type='text' name='age' size=15/>
	���ã�<input type='text' name='hobby' size=15/>
	<input type="submit" name="submit" value=" �ύ"/>

 </form> 
 <br/>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    ������ POST�ύ<br/>
    ������<input type='text' name='name' size=15/>
	���䣺<input type='text' name='age' size=15/>
	���ã�<input type='text' name='hobby' size=15/>
	<input type="submit" name="submit" value=" �ύ"/>

 </form> 
 <br/>
<?php 
  
  
  echo "<p><p><p>---------------------------------PHP����   Ԥ�����������---���������� '\$_SERVER---------------------------<p><p><p>"; 
  //���������� $_SERVER����һ��ȫ�ֹ������飬���ṩ�˷������Ϳͻ����ü���ǰ���󻷾����й���Ϣ�����ݷ�������ͬ��$_SERVER�еı���ֵ�ͱ����������и���Ĳ���
  //$_SERVER['SERVER_NAME']���Ի������������$_SERVER['SCRIPT_FILENAME']���Ի�õ�ǰ�ű��ľ���·��
  foreach($_SERVER as $key =>$value)
  {
	  echo $key.' => '.$value.'<br>';
  }
  
  echo "<p><p><p>--------------PHP����   �������� '\$_ENV  ----------------<p><p><p>";
  //$_ENV Ҳ��һ��ȫ�ֹ������飬���ṩPHP�������ڷ������������й���Ϣ��
  // ���磬$_ENV['OS']�����Ի�ò���ϵͳ�����ͣ�$_ENV['PATH']���Ի��ϵͳ��������
  //����������ѭ����û�г��ֽ������php�������⣬��Ҫ��php�������variables_order='GPCS'�������Ϊvariables_order='EGPCS';������Apache
  foreach($_ENV as $key => $value)
  {
	  echo $key.' => '.$value.'<br>';
  }
  
   echo "<p><p><p>-----------------PHP����   GET���� '\$_GET  -----------------<p><p><p>";
   //$_GET Ҳ��һ��ȫ�ֹ������飬���������Ի��ͨ��HTTP GET��ʽ���ݵı�����
   //���磺http://127.0.0.1:8080/php/charpt6.php?name='songdongdong'&age=22&age=reading;
   //$_GET['name'] ;$_GET['age'];$_GET['age'] ;
   /*
	  ע�⣻���Ҫ�Ǵ����ģ������ͨ��urlencode()�������������ݽ��б�����ٴ��ݣ��磺urlencode('����')
   */
  
   //������ı�
   if(isset($_GET['submit']))
   {
	   echo'<p>';
	   echo'������'.$_GET['name'].'<br>';
	   echo'���䣺'.$_GET['age'].'<br>';
	   echo'���ã�'.$_GET['hobby'].'<br>';
	  
   }
   echo "<p><p><p>-----------------PHP����   POST���� '\$_POST  -----------------<p><p><p>";
   //��$_GETһ����$_POSTҲ��һ��ȫ�ֹ������飬���������Ի��ͨ��HTTP POST��ʽ���ݵı��� ��//$_POST['name'] ;$_POST['age'];$_POST['age'] ;
   if(isset($_POST['submit']))
   {
	   echo'<p>';
	   echo'������'.$_POST['name'].'<br>';
	   echo'���䣺'.$_POST['age'].'<br>';
	   echo'���ã�'.$_POST['hobby'].'<br>';
   }
     echo "<p><p><p>-----------------PHP����   POST���� '\$_SESSION  --'\$_COOKIE---------------<p><p><p>";
	 /*
		$_SESSION Ҳ��һ��ȫ�ֹ������飬������������ػ��йص���Ϣ����ν�Ự�򵥵�˵���Ƿ������������û�����Ϣ��ע��Ự��Ϣ����ע��SESSION����������������վ��������Щ
		�Ự��Ϣ��������ͨ��GET��POST��ʽ���ݣ���Ҳ���ķ�������ҳ�Ŀ�����
		  ʹ��SESSIONʱ��������Ҫ����session_start()���������Ự��Ȼ��ͨ����$_SESSION���鸳ֵ�ķ�ʽע��SESSION���������������Ϳ���ʹ�øûỰ��Ϣ�ˡ�
		  ���Ự��������Ҫע���Ự��Ϣʱ������ʹ��unset()����ע��ָ����SESSION��������������session_destroy()����������ֹ�Ự��
		  
		 $_COOKIEҲ��һ��ȫ�ֹ������飬��������ʶ���û�����ͬ��SESSION,COOKIE�������û�������У���͸��˺ڿͿɳ�֮������˺ܶ����������ֹʹ��cookie�Ĺ���
		    ʹ��cookie��ʱ��������Ҫ����secookie(),��������cookie�����ƣ�ֵ����Ч�ڵȣ�������ɺ�Ϳ���ͨ��$_COOKIE������ʣ�����COOKIE�����ƣ���ֵ����COOKIE��ֵ��
			����Ч�ڹ��ˣ�COOKIE���Զ����١������Ҫ��ǰ���٣�����Ҫ����setcookie()������COOKIE����Ч������Ϊ��ǰʱ����ǰ��
		
	 */
     echo "<p><p><p>-----------------PHP����   POST���� '\$_REQUEST----'\$_FILES-----------<p><p><p>";
    /*
	    $_REQUEST�Ǹ�ȫ�ֹ������飬��������$_GET��$_POST��$_COOKIE����Ϣ����һ��"ȫ��ѡ��"������"$_REQUEST �ٶȽ��������Ҳ�����ȫ����˲��Ƽ�"
		$_FILES���ȫ�ֹ���������������Ԥ���������������ͬ������һ����ά���飬����5��Ԫ�أ�������ĵ�һ���±��ʾ�����ļ��ϴ�Ԫ�������ڶ����±�������5��Ԥ�����±�֮һ��
		�ֱ��������ϴ��ļ�������
	    $_FILES['upload-name']['name']:��ʾ�ͻ�����������ϴ��ļ����ļ���
		$_FILES['upload-name']['type']:��ʾ�ϴ��ļ���MIME���ͣ���������Ƿ�ֵȡ����������Ĺ���
		$_FILES['upload-name']['size']:�ϴ��ļ��Ĵ�С�����ֽ�Ϊ��λ
		$_FILES['upload-name']['tmp_name']:�ϴ�֮�󣬽����ļ��ƶ�������λ��֮ǰ�������ʱ����
		$_FILES['upload-name']['error']:�ϴ�״̬�� ��5�ֿ��ܡ�
		   5�ֿ��ܵ��ϴ�״̬�����£�
		         1��UPLOAD_ERR_OK ���ļ��ɹ��ϴ�
		         2��UPLOAD_ERR_INI_SIZE ���ļ���С������ upload_max_filesize��ָ�������ֵ����ֵ��PHP�����ļ�������
				 3��UPLOAD_ERR_FORM_SIZE ���ļ���С������MAX_FILE_SIZE���ر������(��ѡ)ָ�������ֵ��
				 4��UPLOAD_ERR_PARTIAL:�ļ�ֻ�ϴ���һ����
				 5��UPLOAD_ERR_NO_FILE:�ϴ�����û��ָ���ļ�
				 
	
	*/
   
 
?>
 <br>
 <form enctype="multipart/form-data" action=<?=$_SERVER['PHP_SELF']?> method="POST">
 
    <input type="hidden" name="MAX_FILE_SIZE" value="5242880"/><!--10M-->
	�ϴ��ļ���<input name="upload_file" type="file" size="50"/>
	          <input type="submit" name="submit" value="�ϴ�"/>		  
 
 </form>
<?php 
 //upload_tmp_dir ��Ҫ���ã����򣬲����ϴ�
  if(isset($_POST['submit']))
  {
	  echo $_FILES['upload_file']['error']==UPLOAD_ERR_OK ? '�ϴ��ɹ�<br>' :' �ϴ�ʧ��<br>';
	  echo "�ϴ��ļ�����".$_FILES['upload_file']['name']."<br>";
	  echo "�ϴ��ļ���С��".$_FILES['upload_file']['size']."�ֽ�<br>";
	  echo "��ʱ�ļ�����".$_FILES['upload_file']['tmp_name']."<br>";
  }


  echo "<p><p><p>-----------------PHP����   POST���� '\$GLOBALS-----------<p><p><p>";

  //$GLOBALSҲ��һ���������飬������Ϊ��ȫ�ֱ����ļ�����������ȫ�������������б���
  
  function myfunc()
  {
	  $name = '�ζ���';//�ֲ�����
	  
	  echo $GLOBALS['name'].'<br>';
	  echo $GLOBALS['age'].'<br>';
	  
	  
	    
  }
  $name='���';//ȫ�ֱ���
  $age = 20;//ȫ�ֱ���
  myfunc();
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

?>