<?php
  
  echo "<p>---------------------------------PHP����----�����Ķ���͵���------------------------------------------<p>";
 
  /*
     php �������ƿ�������ĸ���֣��»��ߣ���ɣ����ǲ����������ֿ�ͷ��ͬʱphp�������Ʋ����ִ�Сд�����
	 ���ͬʱ���� sayHello(),sayhello()�ĺ�����php����ͻᱨ��
	 php������֧�ֺ��֣��������ں�����˫�ֽڷ��ţ�Ϊ��ֹ�����뾡����Ҫʹ��
	 
	 */
  
  
   function sayHello($name)
   {
	   echo "hello $name ,welcome you!<br>";
	   
   }
   sayHello("lin");
   sayHello("С��");
  
  //�����Ļص�
  function add($a,$b)
  {
	 return $a+$b;
  }
  $a = 1;
  $b = 2;
  echo "$a+$b = ".add($a,$b)."<br/>";//�����Ļص�
  //�ڲ����庯��
  
  function compute()
  {
	  echo '��ʼ�����ˣ�<br>';
	  function add2($a,$b)
	  {
		return $a+$b;
	  }	  
  }
  
  compute(); //�����ⲿ����,ע�⣬ֻ�е�compute()���������ã�add2()�������ܱ����壬
            //���Ҳ��ۺ��������ڲ������ⲿ����������ȫ�������򣬶�������ȫ�ַ�Χ�ڱ�����
  $a = 1;
  $b = 2;
   echo "$a+$b = ".add2($a,$b); //�����ڲ�����
  
  echo "<p>-----------PHP����----�ɱ亯��-------------<p>";
  
  //php֧�ֿɱ亯������ν�ɱ亯��������ͬ���ĺ������ƣ����Ǻ�������Զ�̬�䶯��
  //Ϊ��֧�ֿɱ亯����php������������Ϊ�ַ�������ĳ������
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
 
  echo "<p>-----------PHP����----��������-------------<p>";
  //��php5.3.0��ʼ��֧������������php��������ͨ���հ���Closures��ʵ�֣������ڻص�����
  //���磺php���ú���array_filter(),�������ǰ��ջص�������������Ԫ�ء��÷����£�
  function filter($var)
  {
	  return $var>10;
  }
  $myarray= array(5,6,7,8,9,10,11,12,13,14,15);
  echo'<p>ԭ����<br>';
  print_r($myarray);
  
  $newarray= array_filter($myarray,'filter');
  echo'<p>���˺������<br>';
  print_r($newarray);
  
  //���ʹ���������������д�����Ӽ��Ĵ���
  
    $myarray= array(5,6,7,8,9,10,11,12,13,14,15);
    echo'<p>ԭ����<br>';
    print_r($myarray);
   
   $newarray= array_filter($myarray,function($var){return $var >10;});
   echo'<p>���˺������<br>';
   print_r($newarray);
  
   echo "<p>---------------------------------PHP����----�����Ĵ���------------------------------------------<p>";
    //����ֵ���ݺ����ô������֣�ͬʱphpĬ�ϲ����Ϳɱ����
	//1��ֵ����
	
	
	function sayHello2($name)
	{
		echo "Hello $name ,welcome your!<br>";
	}
	$gril = "С��";
	sayHello2($gril);
    
	function introduceMySelf($me)
	{
		echo '���� '.$me['name'].'���귽 '.$me['age'].',���� '.$me['hobby'];		
	}
	$mo['name'] = '�ζ���';
	$mo['age'] = 20;
	$mo['hobby'] = '����';
	introduceMySelf($mo);
	
  //2�����ô���
  
  function changename(&$name)
  {
	  $name = "С��";
  }
  $gril = "xiaodong";
  echo "<p>���ú���֮ǰ";
  echo"�ҽ�  $gril";
  
  changename($gril);
  echo"<p>���ú���֮��";
  echo"�ҽ� $gril";
  
  //���鰴�����ô��ݣ�ֻ�Ǵ��������׸�Ԫ�صĵ�ַ
  
  function setInfo(&$people)
  {
	  $people['name'] = 'С��';
	  $people['age'] = 20;
	  $people['hobby'] = '����';
	  
  }
  $gril = array('name'=>'','age'=>'','hobby'=>'');
  echo '<p>���ú���֮ǰ��  ';
  print_r($gril);
  
  setInfo($gril);
  echo"<p>���ú���֮��";
   print_r($gril);
   echo"<p>";
   
  
  //Ĭ�ϲ���    
  
  function introduceDefault($name,$age=20,$hobby='���')
  {
	  echo '���� '.$name.'���귽'.$age.'�������ǣ�'.$hobby.'<br>';
  }
  $name = '�ζ���';
  $age = 25;
  $hobby = '����';
  introduceDefault($name);
  introduceDefault($name,$age);
  introduceDefault($name,$age,$hobby);
  //��Ҫע����Ǻ�Ĭ��ֵ�Ĳ�����Ҫ������û��Ĭ��ֵ�����ĺ��棬�������ڵ���ʱ�޷�ȷ���ĸ�����������Ĭ��ֵ
  //�������⻹�ж��壺introduceDefault($age=20��$name,$hobby='���'){}
  
  //�ɱ����
  /*
	��ν�ɱ���������Ǻ����Ĳ������������ں�������ʱ��̬�仯��ʵ��ʹ��ʱ��ͨ��func_num_args()������ú��������ĸ�����
	ͨ��func_get_args()�������������������ɵ����顣
  */
  echo"<p>";
  echo"<p>";
  function introduceNumArgs()
  {
	  $num = func_num_args();
	  $args = func_get_args();
	  switch($num)
	  {
		  case 0://0������
		      echo '�������������֪�����½�<br>';
			  break;
		  case 1://1������
		      echo '�����в������������գ�'.$args[0].'��Ҳ�� <br>';
			  break;
		  case 2://2������
		      echo '����'.$args[0].'�귽'.$args[1].' !<br>';
			  break;
		  case 3://3������
		      echo '����'.$args[0].'�귽'.$args[1].',����'.$args[2].' !<br>';
			  break;	  		 
          default:
               echo '����֪����̫���ˣ����������ϳ�ȥն�ˡ�������<br>';
			  break; 		  
		
	  }
	    
  }
  
  
  introduceNumArgs();
	  introduceNumArgs('�ζ���');
	  introduceNumArgs('�ζ���',20);
	  introduceNumArgs('�ζ���',22,'����');
	  introduceNumArgs('�ζ���',22,'����','������˿ۿ�');
   echo "<p>---------------------------------PHP����----������������------------------------------------------<p>";
   //����� �ֲ�������ȫ�ֱ��� --------------------��
   //Ҫ�ں����ڲ�ʹ��ȫ�ֱ�������Ҫ��global������������Ԥ��������$GLOBALS['������']������
   
   //1,global����
   function introduceGlobal()
   {
	   global $name,$age,$hobby;//����ȫ�ֱ���
	   echo '���� '.$name.'���귽 '.$age.'������  '.$hobby.' ��';  
   }
   $name = 'С��';
   $age = 25;
   $hobby = '����';
   introduceGlobal();
   
   //2,$GLOBALS����������
   echo"<p>";
  echo"<p>";
   function introduceGloabal()
   {
	   //ͨ��$GLOBALS��������ȫ�ֱ���
	   echo '���� '.$GLOBALS['name'].'���귽'.$GLOBALS['age'].'�����ã�'.$GLOBALS['hobby'].' !';
   }
   $name = '�ζ���';
   $age = 21;
   $hobby = 'д����';
   introduceGloabal();
   
   //һ�������ڲ�����ȫ�ֱ����󣬶�����κ��޸Ķ�����ӳ��ʵ�ʱ����У�������ֲ����������������˳���һ�ж�"����ƽ��"
   
   //4����̬����   
   //4.1 ��ͨ�ֲ�����
   function increase()
   {
	   $count = 18;
	   ++$count;
	   echo '<p> �ҽ��� '.$count.' ����!<p>';
   }
   increase();
   increase();
   increase();
   //4.2 ��̬����
    function increase2()
   {
	   static $count = 18;
	   ++$count;
	   echo '<p> �ҽ��� '.$count.' ����!<p>';
   }
   increase2();
   increase2();
   increase2();
   
    echo "<p>---------------------------------PHP����----�����ķ���ֵ------------------------------------------<p>";
	//1,��������ֵ
	function getAge()
	{
		$age = 19;
		return $age;
	}
	echo '<p>�ҽ��� '.getAge().' ����  !<p>';
   //2,�����ַ���
   function getName()
   {
	   $name = '�ζ���';
	   return $name;
   }
   echo '<p>�ҵ������ǣ�'.getName().'�����º��ˣ�<p>';
   
   //3,���ض������ֵ----php��������һ�η��ض����ֵ�����ǿ���ͨ������һ��������ʵ��
   function getInfo()
   {
	   $boy['name'] = '�ζ���';
	   $boy['age'] = 25;
	   $boy['hobby'] = '����';
	   return $boy;
   }
  print_r(getInfo());
   
   
   
    //4,��������
   
   function &getName2()
   {
	   $name = '�ζ��������ص�������';
	   return $name;//���ر�������
   }	
   
   $name = &getName2();//�����÷���ֵ��������
   echo '<p>�ҵ������ǣ�'.$name.'�����º��ˣ�<p>';
   
   
    echo "<p>---------------------------------PHP����----���ú���------------------------------------------<p>";
   /*
	php���������������ڣ����зḻ�����ú���������������ֿ����ߵ�ʹ��Ҫ��
	php�е�������ú�����������չ�����ʽ�ṩ�ģ�ֻ�м�������Ӧ����չ�����ʹ����Ӧ�ĺ���
   
     ͨ������ get_loaded_extensions()���Ի�õ�ǰphp�����������Щ��չ��
	 
	 *****�����߿��Բ鿴PHP�ٷ��ֲ��ѯ��غ�����ʹ�÷���
   */
   print_r(get_loaded_extensions());
   
   
   
   
   
   
   
   
  
  
  
  
  
  
  

?>