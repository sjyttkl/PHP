<?php
  
  echo "<p>---------------------------------PHP����----�������------------------------------------------<p>";
   //php5��ʼȫ��֧��������󿪷���
   /*
	 ��ʵ�ʿ����У�����������һ���ඨ����һ���������ļ��У�����Ҫʹ������ʱ��Ѹ��ļ���������
	 ���磺��һ��people�࣬�����ڵ�ǰĿ¼�µ��ļ�People.class.php�У�
	 Ϊ�����������ļ���ʹ�ø��࣬���ǿ���ʹ��require����include��佫���������
	 ------��require����include��������������ļ���·��������ʹ���·����Ҳ�����Ǿ���·����
	         ---���ߵ�Ψһ�����ǣ�require�������ļ�������﷨������߲����ڵ�ʱ�򣬻���ʾ��������"Fatal error"��
			    ͬʱ������ֹ���С�
				 include��������������������ֻ����ʾ�������"Warning"�� Ȼ�����������С�
	------require_once �� include_once ���������ǵ�����һ�������ڰ����ļ�ʱ�����Ƿ�����ͬ�����ļ��������ˣ�������򲻻��ظ�������
	����������rquire��include����Ψһ��������Ӧ�þ�������ʹ��rquire_once����include_once��䣬������Ч�ʵ��¡�
	
	
	
	
				  
   */
   
  class People2
  {
	  public $name;
	  public function introduceMyself()
	  {
		  echo "���ǡ�����".$this->name.' ������';
	  }
  }
  require './People.class.php';
  //include './People.class.php';
  
  //require_once './People.class.php';
  //include_once './People.class.php';
   
   
   //-----Ϊ�˱����鷳����php5��ʼ��phpͨ������һ��_autoload������ʵ������Զ����ء�php�ڳ���ʹ��δ�������ʱ�����Զ����ô˺���
  // function _autoload($class_name)//�����Զ����غ���
   //{
	//   require_once './'.$class_name.'.php';
  // }
   
   //���ʵ����
   
   $p = new People();
   $p->name='С��';
   echo $p->name.'<br>';
   $p->introduceMyself();
  
  //��ķ�����[static |final ]���ʿ������η� function ��������([��������]){ //����ϸ��}
  //���ʿ������η� public��protected private�е�һ���������ָ������Ĭ��Ϊpublic
  //static �ؼ��ֵ��෽��Ϊ��̬�������ھ�̬�����У�ֻ�ܵ��þ�̬�����������ܵ�����ͨ������������ͨ�����У����Ե��þ�̬������
  //1��������ڲ����ʸ���ľ�̬����    self::��̬������
  
  //2��������ڲ����ʸ���ľ�̬����    parent::��̬������
  
   echo"<br><br><br>";
  class People3
  {
	  public static function introduceMyself() //�����޲εľ�̬����
	  {
		  echo "����������,�ȵȡ���<br>";
	  }
	  public static function introduceSomeoneElse($name)  //����������ľ�̬����
	  {
		  if($name == 'С��')
		  {
			  self::introduceMyself();
		  }
		  else
		  {
			  echo '����ǣ�������'.$name.'  ͬѧ<br>';
		  }
	  }
  }
  People3::introduceMyself();
  People3::introduceSomeoneElse('С��+');
  
  
  //final �Ĺؼ��֣���ʾ�÷����ڱ�����̳�ʱ���޷�������
  
  /*
	������ԣ�
	    class People
		{
			static $name1; //����ľ�̬���ԣ�Ĭ��Ϊ����
			public static $name;
            protected $age;
            private $hobby;
				
		}
  
  */
  echo "<p>---------------PHP����----���췽������������-----------------<p>";
  //���캯�����﷨��ʽΪ function __construct([��������]){}
   echo"<br><br><br>";
  class Gril1
  {
	  
	  function _construct()
	  {
		  echo 'һ���ܺõ��˳�����<br>';
	  }
  }
  class Gril2
  {
	  public $name;
	  function __construct($name)
	  {
		  $this->name = $name;
		  echo "�����ǣ�".$this->name.' good���˳�����<br>';
	  }
	  //�������������ʵ��������ʱ��(�����඼ʵ�������󣬾Ϳ�ʼ������)���Զ����á����޷�������.
	  //�����û�и���������������php������Զ��������һ�������������䷽������Ϊ�ա�
	  function __destruct()
	  {
		  
		  echo '<br>Gril2 ��Ҳ�Ҵң�ȥҲ�Ҵҡ���<br>';
	  }
  }
  $g1 = new Gril1();
  $g2 = new Gril2('�ζ��� ');
  
   echo"<br><br><br>";
  //�ؼ���constant ������ʼ�ղ���ĳ�����
  class People4
  {
	  const MALE = '��';
	  const FEMALE = 'Ů';
	  public function askGender()
	  {
		  echo '���ǣ�'.self::MALE.'����'.self::FEMALE.'�ˣ�';
	  }
  }
  $p = new People4();
  $p->askGender();
  echo 'MALE= '.People4::MALE.'<br>';
  echo 'MALE= '.People4::FEMALE.'<br>';
  
  echo "<p>---------------------------------PHP����----��ļ̳����װ------------------------------------------<p>";
  //����
  class People5
  {
	  public $name;
	  private $age;
	  function __construct($name,$age)
	  {
		  $this->name = $name;
		  $this->age = $age;
	  }
	  public function setName($name)
	  {
		  $this->name = $name;
	  }
	  public function setAge($age)
	  {
		  $this->age = $age;
	  }
	  public function getString()
	  {
		  echo '���ǣ�'.$this->name.'���귽 '.$this->age.'��<br>';
	  }
	  function __destruct()
	  {
		  echo "People5 ���� ��<br/>";
	  }
  }
  //����
  class Student extends People5
  {
	  public $school;
	  public function setSchool($school)
	  {
		  $this->school = $school;
	  }
	  public function getSchool()
	  {
		  echo'�����ԣ�'.$this->school.'!<br>';
	  }
	  //$s���ٺ�Ĭ�ϵ��ø������������
  }
  //1,
  /*
  $s = new Student();
  $s->setName('�ζ���');
  echo'�ҵ������ǣ�'.$s->name.'��Ҳ<br>';
  
  $s->setAge(19);
  $s->getString();
  
  $s->setSchool("������ѧ ");
  $s->getSchool();
  */
  //2,
  $s = new Student('С��',25); //����ʵ������Ĭ�ϵ��ø���Ĺ��캯��
  
  echo'�ҵ�������'.$s->name.'��Ҳ<br>';
  $s->getString();
   
   //��������ж����˹��캯������������ʵ���������Զ����ø���Ĺ��췽����������������ͬ����ˣ�
   //��������ж��������������������ʵ���ڱ�����ʱ�򲻻��Զ�ȥ���ø��������������
   /*
    Ϊ���������е��ø���Ĺ��췽���������������밴�������﷨��ʽ��ʾ����
	
	1����ʾ���ø���Ĺ��캯��
	function __construct([����Ĺ��췽������])
	{
		parent::__construct([����Ĺ��췽������])
		{
			
		}
	}
	
	//2����ʾ���ø������������
	    function __destruct()
		{
			Parent::__destruct()
			{
				
			}
		}
     
	 ���磺
	 
	 class People
	 {
	   function __construct()
	   {
		   
	   }
		
		function __destruct()
		{
			
		}
	 }
	 class Student extends People
	 {
		 function __construct()
		 {
			 parent::__construct();
		 }
		 
		 function __destruct()
		 {
			 parent::__destruct();
		 }
	 }
	 
	
   */
   echo "<p>---------------PHP����----���ʿ���----------------<p>";
   /*
   
	public         ȫ����
	protected    ����������ⲿ���ʣ�����������ⲿ����
	private     2�� �����������з���  2��  ����������ⲿ����
   */
    echo "<p>---------------PHP����----final�ؼ���----------------<p>";
	 /*
		final�����յ���˼����php5�����Ĺؼ��֡���final���ε��࣬�����ܱ��̳У�������ӵ������
		
	
	
	//������Ǵ���ģ����ڣ�fianl�ؼ��������θ���ķ��������Բ��ܱ��̳С�����̳��ˣ����ᱨ��
   final class  People6
   {
	   public function sayHello()
	   {
		   echo '��Һã�<br>';
	   }
   }
   class Student2 extends People6
   {
	   public function doHomeWork()
	   {
		   echo "��ҵ�öడ��<br>";
	   }
   }
   $s = new Student2();
    */
   
   echo "<p>---------------PHP����----��Ķ�̬��----------------<p>";
   /*
	��ν�Ķ�̬��(Polymorphism)���򵥵�˵����ͬһ���������ڲ�ͬ���ʵ��ʱ����������ͬ��ִ�н����
	���������У���̬��ʹ��Ӧ�ó������ģ�黯����չ
	   ��̬���ַ�Ϊ��̬��̬�ԺͶ�̬��̬�ԡ�
	------��̬��̬����ָһ��ͬ������������һ�����е�ͬ�����������ݲ����б����ͺ͸�������
	   ��ͬ���������壬����ν�ĺ������ء�����php�в�֧�ֺ������ء�
	   
	------��̬��̬����ָ��ĳ�Ա�������ܸ��ݵ������Ķ������͵Ĳ�ͬ���Զ�������Ӧ�Ե��������ҵ����Ƿ����ڳ�������ʱ��
	php��ͨ��������ͽӿڼ�����ʵ�ֶ�̬��̬��
	   
   */
   // ���า�Ǹ���ķ���::ֻҪ�������ж���ͬ���ĸ��෽�����ɡ����Ǻ���Ҫ���ʸ���ԭ���ķ�������Ҫʹ�ùؼ���parent����������ķ�ʽ��
   class People6
   {
	   public $name;
	   public function sayHello()
	   {
		   echo'��Һ�<br>';
	   }
   }
   //����
   class Student3 extends People6
   {
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	   function __destruct()
	   {
		   parent::sayHello();
		   echo"��Һã�����".$this->name.'�����ע<br>';
	   }
	  	   
   }
   $s = new Student3('С��');
   $s->sayHello();
   
    //������಻���Լ��ķ��������า����д����ô����ʹ��final�ؼ��������θ���ķ�����
   
   class People7
   {
	   public  $name;
	   final public  function sayHello()
	   {
		  echo'��Һ�<br>';
	   }
   }
   
   class Student4 extends People7
   {
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	  // public function sayHello()
	   //{
		   //�����������ೢ�Ը��Ǹ����final���з���  
		   // Cannot override final method People7
		//   echo'��Һ� ,���� '.$this->name.'<br>';
	  // }
	   
   }
   $s =new Student4();
   //$s->sayHello();
    echo "<p>---------------PHP����----����������󷽷�---------------<p>";
	/*
		�������ǲ��ܱ�ʵ�������ֻ࣬����Ϊ���౻������̳С�����ͨ��һ����������Ҳ���������Ժͷ�����
		���ǲ�ͬ���ǣ�������������ٰ���һ�����󷽷�����ν���󷽷�������û�о���ʵ�ַ�������Ӧ�ĺ������Ϊ�ա�
		���󷽷���ϸ��ֻ����������ʵ�֣������������ʵ�����̳г�����ĳ��󷽷�
		
		---���󷽷��ķ��ʿ������η�ֻ��Ϊpublic��protected֮һ��������󷽷�����Ϊpublic����������ʵ�ֵķ���ҲӦ������Ϊpublic,
		   ���ǣ�������󷽷�����Ϊprotected����������ʵ�ֵķ����ȿ�������Ϊprotected��Ҳ��������Ϊpublic��
	*/
   abstract class People8
   {
	   public $name;
	   public function sayHello()
	   {
		   echo "<p>��Һã�����".$this->name.'������<br>';
	   }
	   abstract protected function doWork();
   }
   
   //ѧ����
   class Student5 extends People8
   {
	   function __construct($name)
	   {
		   $this->name = $name;//���ʸ���Ĺ�������
	   }
	   public function doWork()
	   {
		   parent::sayHello();
		   echo" �� ��  stuent5..";
	   }
   }
   //��������
   class Worker extends People8
   {
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	   public function doWork()
	   {
		   
		   parent::sayHello();
		   echo" �� ��  Worker..";
	   }
   }
    //��������
   class Bussinessman extends People8
   {
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	   public function doWork()
	   {
		   
		   parent::sayHello();
		   echo" �� ��  Bussinessman..";
	   }
   }
   
    //����Ա����
   class Offical extends People8
   {
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	   public function doWork()
	   {
		   
		   parent::sayHello();
		   echo" �� ��  Offical...";
	   }
   }
   
   $s = new Student5('ѧ����');
   $s->doWork();
   
   $s = new Worker('���˴���');
   $s->doWork();
   
   $s = new Bussinessman('���ˡ�����');
   $s->doWork();
   
   $s = new Offical('����Ա');
   $s->doWork();
   /*
		�ӿڼ�������������ͨ�໹�ǳ����࣬��ֻ��ʵ�ֵ��̳С���һ������ֻ�ܼ̳�һ�����ࡣ
		��ʵ�ϣ�phpҲֻ֧�ֵ��̳С����Ҫʵ�ֶ�̳У���Ҫʹ�ýӿڼ�����
		�ӿ�Ҳ��һ���ֻ࣬���������п��Զ��峣�������ǲ��ܶ������Ա��������Զ��巽��������������Ϊ�ա�Ҳ���ǣ��ӿ���ֻ�ܶ���
		��������δʵ�ֵķ��������ұ�����public(����ʡ�ԣ���Ϊ��ķ���Ĭ�϶��� public)
	
   */
   interface People9
   {
	   const MALE = 'GG';
	   const FEMAL = 'MM';
	   
	   function doWork();
	   function sayHello();
   }
   class Student6 implements People9
   {
	   public $name;
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	   public function sayHello()
	   {
		   echo "<br>��Һã�����".$this->name.'<br>';
	   }
	   
	    public function doWork()
	   {		   
		  
		   echo" <br>�� Ҫд��ҵ��<br>";
	   }
	   
   }
   //��������
   class Worker2 implements People9
   {
	   public $name;
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	     public function sayHello()
	   {
		   echo "<br>��Һã�����".$this->name.'<br>';
	   }
	   public function doWork()
	   {
		   	   
		   echo" <br>�� Ҫ������..<br>";
	   }
   }
   
   $s = new Student6('�ζ���');
   $s->sayHello();
   $s->doWork();
   
   $s = new Worker2('С��');
   $s->sayHello();
   $s->doWork();
   
   //��ʵ�֣�student implements people ,tool .vehicle
   
   
echo "<p>---------------------------------PHP����----���е�ħ������-----------------------------------------<p>";
   
   /*
	php�����������»��߿�ͷ�ķ�������Ϊħ��������
	  -----1����̬���� __set()��__get()��__call()��__callStatic()
	      
		  (1),__set �� __get()����
		    ��������ͼ�޸�һ�������ڵĻ��߲��ɼ���������ʱ��php��������__set()��������Ȼ��ǰ���Ǹ÷��������б�����
			function __set($name,$value)
			{
				$name �Ƕ�̬�����ı�������
				$value �Ǹñ�����ֵ
			}
			��������ͼ��ȡ�������ڵĻ��߲��ɼ���������ʱ��php��������__get()��������Ȼ��ǰ���Ǹ÷��������б�����
			function __get($name)
			{
				
			}
   */
   
   
   
   class People10
   {
	   private $name;
	   private $data = array();//�����������ڴ洢��̬����������
	   
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	   function __set($name,$value)
	   {
		   $this->data[$name] = $value;
		    echo "��̬�����˱���".$name.'��ֵΪ��'.$value.'<br>';
	   }
	   function __get($name)
	   {
		   echo '��ȡ��̬�����ı���'.$name.'<br>';
		   return $this->data[$name];
	   }
	   function toString()
	   {
		   echo'��Һã�����'.$this->name.'<br>';
	   }
   }
   $p = new People10('�ζ���');
   $p->age = 22;                   //��̬����$age ,�Զ�����__set();
   $p->name = 'С����';            //��̬����$name ,�Զ�����__set();
   $p->toString();
   
   echo $p->age.'<br>';               //���ö�̬����$age ,�Զ�����__get();
   echo $p->name.'<br>';               //���ö�̬����$name ,�Զ�����__get();
   
  //�����н�����Կ�����������д���˽�����ԣ���̬����ͬ������ʱ���Ḳ��˽�����ԡ�
   /*(2),__call �� _callStatic()����
   ��������ͼ����һ�������ڻ򲻿ɼ����෽��ʱ��php���潫�����__call()��������Ȼ��ǰ����__call()���������б����塣
     function __call($name,$args)
	 {
		 $name �Ƕ�̬������ 
		 $args �Ǹ÷����Ĳ��������������ʽ����
	 }
   
   */
   class People11
   {
	   function __call($name ,$args)
	   {
		   echo "<p> ��̬�����˷��� ".$name.' �����Ϊ��<br>';
		   //��̬��ӡ���ƺͲ���
		   print_r($args);
		   echo '<br>';
		   
		   
		   echo '��Һã�����'.$args[0].',����'.$args[1].'��<br>';
		   //��̬����
	   }
   }
   
   $p= new People11();
   $p->toString('�ζ���',25);
   /*
     ��php5.3.0��ʼ������ʹ��__callStatic()��̬������̬������__callStatic()��ʽ����
	 
	  static function __callStatic($name,$args)
	  {
		   $name �Ƕ�̬������ 
		 $args �Ǹ÷����Ĳ��������������ʽ����
	  }
	 
   */
   class People_Static11
   {
	   function __call($name ,$args)
	   {
		   echo "<p> People_Static11��̬�����˷��� ".$name.' �����Ϊ��<br>';
		   //��̬��ӡ���ƺͲ���
		   print_r($args);
		   echo '<br>';
		   
		   
		   echo 'People_Static11 ��Һã�����'.$args[0].',����'.$args[1].'��<br>';
		   //��̬����
	   }
   }
   
   $p= new People_Static11();
   $p->toString('�ζ���',25);
   
   
   /*
		����Ŀ�¡��__clone()����
		 ע�ⲻ�� �����õĴ���
		
   */
   
   // ����������õĴ���
   class People12
   {
	   public  $name;
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	      
   }
   $a = new People12('�ζ���');
   $b = $a;
   echo"<p> �ı�֮ǰ��<br>";
   echo"$a->name=".$a->name.'<br>';
   echo"$b->name=".$b->name.'<br>';
   
   $a->name = 'С����';
   echo"<p> �ı�֮ǰ��<br>";
   echo"$a->name=".$a->name.'<br>';
   echo"$b->name=".$b->name.'<br>';
    // �����������clone�ؼ��ֽ��еĲ���
	/*
		�ܶ�ʱ����Ҫ����һ������ĸ��������������ǶԸö�������á���ʱ���ǿ���ʹ��clone�ؼ��֡�
		����ע�⣬���������¡�����������������ã�������ñ������� ��Ҳ����˵�������е����������е�Ӧ�ö�ָ����ͬ�����ڴ�
	*/
	class Peolple13
	{
		public $name;
		public $age;
	}
	$gril = '��Ů';
	$age = 13;
	$a = new Peolple13();
	$a->name = &$gril;//�����ø�������
	$a->age = $age;//��ֵ��������
	$b = clone $a;  //��$a ���Ƹ�$b-
	echo"<p> �ı�֮ǰ��<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br>';
   
    $a->name='�ζ���';
    $a->age = 24;	
	echo"<p> �ı�֮��<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br><br><br><br>';
   
   /*
        ���Դ�����İ������Կ������������е�����$name�����������ã��������clone�ؼ��ֻ�о����ʱ��������Ʒ����$name�롰ԭװ����$nameָ��
	  ��ͬ���ı�����
	    Ϊ�˽��������⣬���ǿ���ʹ��__clone������__clone()����һ�������壬���ڱ�����ʱ�ͻ��Զ�������������
		���ǾͿ�����__clone()�����������������¿����ڴ档
		
		     	  
   */
   
   class  People14
   {
	   public $name;
	   public $age;
	   function __clone()
	   {
		   echo "��ʼ��¡..<br>";
		   $gril = $this->name;  //���¿����ڴ�
		   $this->name = &$gril;//�����ڴ�����ø���$name����
		   
	   }
	   
   }
   
    $gril = '��Ů';
	$age = 13;
	$a = new People14();
	$a->name = &$gril;//�����ø�������
	$a->age = $age;//��ֵ��������
	$b = clone $a;  //��$a ���Ƹ�$b-
	echo"<p> �ı�֮ǰ��<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br>';
   
    $a->name='�ζ���';
    $a->age = 24;	
	echo"<p> �ı�֮��<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br>';
   
   
   
   
   
?>