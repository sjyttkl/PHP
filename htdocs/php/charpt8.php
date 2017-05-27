<?php
  
  echo "<p>---------------------------------PHP函数----面相对象------------------------------------------<p>";
   //php5开始全面支持面向对象开发，
   /*
	 在实际开发中，我们往往把一个类定义在一个单独的文件中，在需要使用它的时候把该文件包含进来
	 例如：有一个people类，定义在当前目录下的文件People.class.php中，
	 为了在其他的文件中使用该类，我们可以使用require语句或include语句将其包含进来
	 ------在require语句或include语句后面跟的是类文件呃路径，可以使相对路径，也可以是绝对路径。
	         ---二者的唯一区别是：require语句包含文件如果有语法错误或者不存在的时候，会提示致命错误"Fatal error"，
			    同时程序终止运行。
				 include语句遇到这样的情况，则只是提示警告错误"Warning"， 然后程序继续运行。
	------require_once 和 include_once 。正如它们的名字一样二者在包含文件时会检查是否已有同样的文件被包含了，如果有则不会重复包含，
	这是它们与rquire和include语句的唯一区别。我们应该尽量避免使用rquire_once语句和include_once语句，这回造成效率底下。
	
	
	
	
				  
   */
   
  class People2
  {
	  public $name;
	  public function introduceMyself()
	  {
		  echo "我是。。。".$this->name.' 。。。';
	  }
  }
  require './People.class.php';
  //include './People.class.php';
  
  //require_once './People.class.php';
  //include_once './People.class.php';
   
   
   //-----为了避免麻烦，从php5开始，php通过定义一个_autoload函数来实现类的自动加载。php在尝试使用未定义的类时，会自动调用此函数
  // function _autoload($class_name)//定义自动加载函数
   //{
	//   require_once './'.$class_name.'.php';
  // }
   
   //类的实例化
   
   $p = new People();
   $p->name='小冬';
   echo $p->name.'<br>';
   $p->introduceMyself();
  
  //类的方法，[static |final ]访问控制修饰符 function 方法名称([方法参数]){ //方法细节}
  //访问控制修饰符 public，protected private中的一个，如果不指定，则默认为public
  //static 关键字的类方法为静态方法。在静态方法中，只能调用静态变量，而不能调用普通变量，但在普通方法中，可以调用静态变量。
  //1，在类的内部访问该类的静态方法    self::静态方法名
  
  //2，在类的内部访问父类的静态方法    parent::静态方法名
  
   echo"<br><br><br>";
  class People3
  {
	  public static function introduceMyself() //定义无参的静态方法
	  {
		  echo "本府的名字,等等。。<br>";
	  }
	  public static function introduceSomeoneElse($name)  //定义带参数的静态方法
	  {
		  if($name == '小冬')
		  {
			  self::introduceMyself();
		  }
		  else
		  {
			  echo '这就是：。。。'.$name.'  同学<br>';
		  }
	  }
  }
  People3::introduceMyself();
  People3::introduceSomeoneElse('小冬+');
  
  
  //final 的关键字，表示该方法在被子类继承时，无法被覆盖
  
  /*
	类的属性：
	    class People
		{
			static $name1; //定义的静态属性，默认为公有
			public static $name;
            protected $age;
            private $hobby;
				
		}
  
  */
  echo "<p>---------------PHP函数----构造方法和析构方法-----------------<p>";
  //构造函数的语法格式为 function __construct([方法参数]){}
   echo"<br><br><br>";
  class Gril1
  {
	  
	  function _construct()
	  {
		  echo '一个很好的人出生了<br>';
	  }
  }
  class Gril2
  {
	  public $name;
	  function __construct($name)
	  {
		  $this->name = $name;
		  echo "名字是：".$this->name.' good的人出现了<br>';
	  }
	  //析构函数在类的实例被销毁时候(所有类都实例化过后，就开始销毁了)，自动调用。且无方法参数.
	  //如果，没有给定析构函数，则php引擎会自动给类添加一个析构函数，其方法内容为空。
	  function __destruct()
	  {
		  
		  echo '<br>Gril2 来也匆匆，去也匆匆。。<br>';
	  }
  }
  $g1 = new Gril1();
  $g2 = new Gril2('宋冬冬 ');
  
   echo"<br><br><br>";
  //关键字constant 代表是始终不变的常量。
  class People4
  {
	  const MALE = '男';
	  const FEMALE = '女';
	  public function askGender()
	  {
		  echo '你是：'.self::MALE.'人是'.self::FEMALE.'人？';
	  }
  }
  $p = new People4();
  $p->askGender();
  echo 'MALE= '.People4::MALE.'<br>';
  echo 'MALE= '.People4::FEMALE.'<br>';
  
  echo "<p>---------------------------------PHP函数----类的继承与封装------------------------------------------<p>";
  //父类
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
		  echo '我是：'.$this->name.'，年方 '.$this->age.'！<br>';
	  }
	  function __destruct()
	  {
		  echo "People5 结束 了<br/>";
	  }
  }
  //子类
  class Student extends People5
  {
	  public $school;
	  public function setSchool($school)
	  {
		  $this->school = $school;
	  }
	  public function getSchool()
	  {
		  echo'我来自：'.$this->school.'!<br>';
	  }
	  //$s销毁后，默认调用父类的析构方法
  }
  //1,
  /*
  $s = new Student();
  $s->setName('宋冬冬');
  echo'我的名字是：'.$s->name.'是也<br>';
  
  $s->setAge(19);
  $s->getString();
  
  $s->setSchool("广西大学 ");
  $s->getSchool();
  */
  //2,
  $s = new Student('小冬',25); //子类实例化，默认调用父类的构造函数
  
  echo'我的名字是'.$s->name.'是也<br>';
  $s->getString();
   
   //如果子类中定义了构造函数，则子类在实例化不会自动调用父类的构造方法。对于析构函数同样如此，
   //如果子类中定义析构方法，则子类的实例在被销毁时候不会自动去调用父类的析构方法。
   /*
    为了在子类中调用父类的构造方法和析构方法，须按照如下语法格式显示调用
	
	1，显示调用父类的构造函数
	function __construct([子类的构造方法参数])
	{
		parent::__construct([父类的构造方法参数])
		{
			
		}
	}
	
	//2，显示调用父类的析构函数
	    function __destruct()
		{
			Parent::__destruct()
			{
				
			}
		}
     
	 例如：
	 
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
   echo "<p>---------------PHP函数----访问控制----------------<p>";
   /*
   
	public         全都能
	protected    不能在类的外部访问，或者在类的外部访问
	private     2， 不能在子类中访问  2，  不能在类的外部访问
   */
    echo "<p>---------------PHP函数----final关键字----------------<p>";
	 /*
		final即最终的意思，是php5新增的关键字。被final修饰的类，将不能被继承，即不能拥有子类
		
	
	
	//下面的是错误的，由于，fianl关键字来修饰父类的方法，所以不能被继承。如果继承了，将会报错。
   final class  People6
   {
	   public function sayHello()
	   {
		   echo '大家好！<br>';
	   }
   }
   class Student2 extends People6
   {
	   public function doHomeWork()
	   {
		   echo "作业好多啊！<br>";
	   }
   }
   $s = new Student2();
    */
   
   echo "<p>---------------PHP函数----类的多态性----------------<p>";
   /*
	所谓的多态性(Polymorphism)，简单的说就是同一操作作用于不同类的实例时，将产生不同的执行结果。
	在软件设计中，多态性使得应用程序更加模块化可扩展
	   多态性又分为静态多态性和动态多态性。
	------静态多态性是指一个同名函数或者是一个类中的同名方法，根据参数列表（类型和个数）的
	   不同来区别语义，即所谓的函数重载。但是php中不支持函数重载。
	   
	------动态多态性是指类的成员方法，能根据调用它的对象类型的不同，自动做出适应性调整，而且调整是发生在程序运行时。
	php中通过抽象类和接口技术来实现动态多态性
	   
   */
   // 子类覆盖父类的方法::只要在子类中定义同名的父类方法即可。覆盖后若要访问父类原来的方法，需要使用关键字parent加域操作符的方式。
   class People6
   {
	   public $name;
	   public function sayHello()
	   {
		   echo'大家好<br>';
	   }
   }
   //子类
   class Student3 extends People6
   {
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	   function __destruct()
	   {
		   parent::sayHello();
		   echo"大家好，我是".$this->name.'请多多关注<br>';
	   }
	  	   
   }
   $s = new Student3('小冬');
   $s->sayHello();
   
    //如果父类不想自己的方法被子类覆盖重写，那么可以使用final关键字来修饰父类的方法。
   
   class People7
   {
	   public  $name;
	   final public  function sayHello()
	   {
		  echo'大家好<br>';
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
		   //错误，由于子类尝试覆盖父类的final公有方法  
		   // Cannot override final method People7
		//   echo'大家好 ,我是 '.$this->name.'<br>';
	  // }
	   
   }
   $s =new Student4();
   //$s->sayHello();
    echo "<p>---------------PHP函数----抽象类与抽象方法---------------<p>";
	/*
		抽象类是不能被实例化的类，只能作为父类被其他类继承。与普通类一样，抽象类也可以有属性和方法，
		但是不同点是，抽象类必须至少包含一个抽象方法。所谓抽象方法，就是没有具体实现方法，对应的函数体就为空。
		抽象方法的细节只能在子类中实现，而且子类必须实现所继承抽象类的抽象方法
		
		---抽象方法的访问控制修饰符只能为public和protected之一。如果抽象方法声明为public，则子类中实现的方法也应该声明为public,
		   但是，如果抽象方法声明为protected，则子类中实现的方法既可以声明为protected，也可以声明为public。
	*/
   abstract class People8
   {
	   public $name;
	   public function sayHello()
	   {
		   echo "<p>大家好，我是".$this->name.'请多关照<br>';
	   }
	   abstract protected function doWork();
   }
   
   //学生类
   class Student5 extends People8
   {
	   function __construct($name)
	   {
		   $this->name = $name;//访问父类的公有属性
	   }
	   public function doWork()
	   {
		   parent::sayHello();
		   echo" 我 是  stuent5..";
	   }
   }
   //工人子类
   class Worker extends People8
   {
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	   public function doWork()
	   {
		   
		   parent::sayHello();
		   echo" 我 是  Worker..";
	   }
   }
    //商人子类
   class Bussinessman extends People8
   {
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	   public function doWork()
	   {
		   
		   parent::sayHello();
		   echo" 我 是  Bussinessman..";
	   }
   }
   
    //公务员子类
   class Offical extends People8
   {
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	   public function doWork()
	   {
		   
		   parent::sayHello();
		   echo" 我 是  Offical...";
	   }
   }
   
   $s = new Student5('学生妹');
   $s->doWork();
   
   $s = new Worker('工人大叔');
   $s->doWork();
   
   $s = new Bussinessman('商人。妹子');
   $s->doWork();
   
   $s = new Offical('公务员');
   $s->doWork();
   /*
		接口技术。无论是普通类还是抽象类，都只能实现单继承。即一个子类只能继承一个父类。
		事实上，php也只支持单继承。如果要实现多继承，则要使用接口技术。
		接口也是一种类，只是这种类中可以定义常量，但是不能定义属性变量；可以定义方法，但方法必须为空。也就是，接口中只能定义
		常量和尚未实现的方法，而且必须是public(可以省略，因为类的方法默认都是 public)
	
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
		   echo "<br>大家好，我是".$this->name.'<br>';
	   }
	   
	    public function doWork()
	   {		   
		  
		   echo" <br>我 要写作业了<br>";
	   }
	   
   }
   //工人子类
   class Worker2 implements People9
   {
	   public $name;
	   function __construct($name)
	   {
		   $this->name =$name;
	   }
	     public function sayHello()
	   {
		   echo "<br>大家好，我是".$this->name.'<br>';
	   }
	   public function doWork()
	   {
		   	   
		   echo" <br>我 要工作了..<br>";
	   }
   }
   
   $s = new Student6('宋冬冬');
   $s->sayHello();
   $s->doWork();
   
   $s = new Worker2('小冬');
   $s->sayHello();
   $s->doWork();
   
   //多实现，student implements people ,tool .vehicle
   
   
echo "<p>---------------------------------PHP函数----类中的魔术方法-----------------------------------------<p>";
   
   /*
	php类中以两个下滑线开头的方法被称为魔术方法，
	  -----1，动态重载 __set()和__get()，__call()和__callStatic()
	      
		  (1),__set 和 __get()方法
		    当程序试图修改一个不存在的或者不可见的类属性时，php引擎会调用__set()方法，当然是前提是该方法在类中被定义
			function __set($name,$value)
			{
				$name 是动态创建的变量名，
				$value 是该变量的值
			}
			当程序试图读取个不存在的或者不可见的类属性时，php引擎会调用__get()方法，当然是前提是该方法在类中被定义
			function __get($name)
			{
				
			}
   */
   
   
   
   class People10
   {
	   private $name;
	   private $data = array();//定义数组用于存储动态创建的属性
	   
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	   function __set($name,$value)
	   {
		   $this->data[$name] = $value;
		    echo "动态创建了变量".$name.'其值为：'.$value.'<br>';
	   }
	   function __get($name)
	   {
		   echo '获取动态创建的变量'.$name.'<br>';
		   return $this->data[$name];
	   }
	   function toString()
	   {
		   echo'大家好，我是'.$this->name.'<br>';
	   }
   }
   $p = new People10('宋冬冬');
   $p->age = 22;                   //动态创建$age ,自动调用__set();
   $p->name = '小冬冬';            //动态创建$name ,自动调用__set();
   $p->toString();
   
   echo $p->age.'<br>';               //调用动态属性$age ,自动调用__get();
   echo $p->name.'<br>';               //调用动态属性$name ,自动调用__get();
   
  //从运行结果可以看出，如果类中存在私有属性，动态创建同名属性时不会覆盖私有属性。
   /*(2),__call 和 _callStatic()方法
   当程序试图调用一个不存在或不可见的类方法时，php引擎将会调用__call()方法，当然，前提是__call()方法在类中被定义。
     function __call($name,$args)
	 {
		 $name 是动态方法名 
		 $args 是该方法的参数，以数组的形式存在
	 }
   
   */
   class People11
   {
	   function __call($name ,$args)
	   {
		   echo "<p> 动态创建了方法 ".$name.' 其参数为：<br>';
		   //动态打印名称和参数
		   print_r($args);
		   echo '<br>';
		   
		   
		   echo '大家好，我是'.$args[0].',今年'.$args[1].'岁<br>';
		   //动态内容
	   }
   }
   
   $p= new People11();
   $p->toString('宋冬冬',25);
   /*
     从php5.3.0开始，可以使用__callStatic()动态创建静态方法。__callStatic()格式如下
	 
	  static function __callStatic($name,$args)
	  {
		   $name 是动态方法名 
		 $args 是该方法的参数，以数组的形式存在
	  }
	 
   */
   class People_Static11
   {
	   function __call($name ,$args)
	   {
		   echo "<p> People_Static11动态创建了方法 ".$name.' 其参数为：<br>';
		   //动态打印名称和参数
		   print_r($args);
		   echo '<br>';
		   
		   
		   echo 'People_Static11 大家好，我是'.$args[0].',今年'.$args[1].'岁<br>';
		   //动态内容
	   }
   }
   
   $p= new People_Static11();
   $p->toString('宋冬冬',25);
   
   
   /*
		对象的克隆：__clone()方法
		 注意不是 ，引用的传递
		
   */
   
   // 下面的是引用的传递
   class People12
   {
	   public  $name;
	   function __construct($name)
	   {
		   $this->name = $name;
	   }
	      
   }
   $a = new People12('宋冬冬');
   $b = $a;
   echo"<p> 改变之前：<br>";
   echo"$a->name=".$a->name.'<br>';
   echo"$b->name=".$b->name.'<br>';
   
   $a->name = '小东东';
   echo"<p> 改变之前：<br>";
   echo"$a->name=".$a->name.'<br>';
   echo"$b->name=".$b->name.'<br>';
    // 下面的是利用clone关键字进行的操作
	/*
		很多时候需要复制一个对象的副本，而不仅仅是对该对象的引用。这时我们可以使用clone关键字。
		但是注意，如果被‘克隆’的类属性中有引用，则该引用被保留了 ，也就是说，副本中的引用与类中的应用都指向了同样的内存
	*/
	class Peolple13
	{
		public $name;
		public $age;
	}
	$gril = '美女';
	$age = 13;
	$a = new Peolple13();
	$a->name = &$gril;//将引用赋给属性
	$a->age = $age;//将值赋给属性
	$b = clone $a;  //将$a 复制给$b-
	echo"<p> 改变之前：<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br>';
   
    $a->name='宋冬冬';
    $a->age = 24;	
	echo"<p> 改变之后：<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br><br><br><br>';
   
   /*
        可以从上面的案例可以看出，由于类中的属性$name被赋予了引用，因此在用clone关键字机芯复制时，“复制品”中$name与“原装”的$name指向
	  了同样的变量。
	    为了解决这个问题，我们可以使用__clone方法。__clone()方法一旦被定义，类在被复制时就会自动调用它，这样
		我们就可以在__clone()方法中引用属性重新开辟内存。
		
		     	  
   */
   
   class  People14
   {
	   public $name;
	   public $age;
	   function __clone()
	   {
		   echo "开始克隆..<br>";
		   $gril = $this->name;  //重新开辟内存
		   $this->name = &$gril;//将该内存的引用赋给$name属性
		   
	   }
	   
   }
   
    $gril = '美女';
	$age = 13;
	$a = new People14();
	$a->name = &$gril;//将引用赋给属性
	$a->age = $age;//将值赋给属性
	$b = clone $a;  //将$a 复制给$b-
	echo"<p> 改变之前：<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br>';
   
    $a->name='宋冬冬';
    $a->age = 24;	
	echo"<p> 改变之后：<br>";
    echo"$a->name=".$a->name.'<br>';
    echo"$a->name=".$a->age.'<br>';
	echo"$b->name=".$b->name.'<br>';
    echo"$b->name=".$b->age.'<br>';
   
   
   
   
   
?>