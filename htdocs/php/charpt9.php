<?php
  
  echo "<p>---------------------------------�ַ���������������ʽ------------------------------------------<p>";
  echo "<p><p><p>---------------------trim()---------------------------------<p><p><p>";
   /*�����ַ�����������trim()��������ɾȥ�ַ����˵Ŀհ��ַ������� string trim(string $str[,string $charlist]);
     $str  Ϊ��������ַ�����
	 $charlist,Ϊѡ����������ָ��Ҫɾȥ���ַ��������ָ����Ĭ�Ͻ�ɾ�������ַ���
	   "" �ո�
	   "\0" ���ַ�
	   "\n" ���з�
	   "\r" �س���
	   "\x0B" ��ֱ�Ʊ��
	   "\t" ˮƽ�Ʊ��
	   
	  ----���ֻ��ȥ���ַ�����˻����Ҷ˵�ָ���ַ������ʹ��ltrim()��rtrim().�÷���trim()����
   */
   $str1 = "  LIneline love mom ";
   $str2 = "\t\0 lin line lovemomo \n\r";
   $str3 = "lin line lovemomo ";
   echo "<p> ԭ�ַ��� ";
   echo '<br> $str1 ';
   var_dump($str1);
   echo '<br> $str2';
   var_dump($str2);
   echo '<br> $str3';
   var_dump($str3);
   
   //ɾ���ַ������˵��ַ�
   
   $charlist = "lin";
   $new_str1 = trim($str1);
   $new_str2 = trim($str2);
   $new_str3 = trim($str3,$charlist);
   echo "<p> ���ַ��� ";
   echo '<br> $new_str1 ';
   var_dump($new_str1);
   echo '<br> $new_str2 ';
   var_dump($new_str2);
   echo '<br> $new_str3 ';
   var_dump($new_str3);
   echo "<p><p><p>---------------------�ı��ַ�����Сд--------------------------------<p><p><p>";
   /*
	���ַ����е��ַ�ȫ��ת�ɴ�д��ĸ������ʹ��strtoupper()���������ַ����е��ַ�ȫ��ת��Сд��ĸ������ʹ��strtolower()��
	string strtoupper(string $str)
	string strtolower(string $str)
   */ 
   $str = "  Lineline love mom ";
   $new_str = strtoupper($str);
   var_dump($new_str);
   echo "<p><p><p>---------------------�ָ��ַ���------------------------------<p><p><p>";
   /*
	 array str_split(string $str[,int $split_length=1])
	 $str Ϊ��������ַ�����$split_lengthΪ��ѡ��������ʾ�ָ���ַ����ĳ��ȣ�Ĭ��Ϊ 1
   */
  $str = "  Lineline love mom ";
  echo "<p> ���ַ��� ";
  echo'<br>$str';
  var_dump($str);
  $new_str = str_split($str,3);
  echo "<p> �ָ��ģ����ַ��� �����пո�Ҳ����һ���ַ�";
  echo '<br> $new_str  ';
  var_dump($new_str);
  echo "<p>--------�ָ��ַ���---���շֽ���ָ�---------------<p>";
  /* array explode(string $separator,string $str [,int $limit])
    ���У�$separator Ϊ��ָ���ķֽ����ɵ��ַ�����
	      $strΪ��������ַ���
		  $limit Ϊ��ѡ���������û�����ã������������ɷָ��������ַ�����ɵ����飬
		          ���������ֵ����ú������ص�������������ǰ$limit��Ԫ�أ���������һ��Ԫ�ؽ�����ʣ����ַ�����Ҳ���������˷����ַ����ĳ��ȡ�
	      ��php5.1.0��ʼ��$limit���Ա�����Ϊ��������ʾ���ص������а�������$limit��Ԫ�������Ԫ�أ�Ҳ���Ǽ�ȥ��������ĳ��ȣ����$limit������ɾ����
    
  
  */
   $str = "Lin love Mo God bless them";
   echo "<p> ԭ�ַ��� ";
   echo'<br>$str';
   var_dump($str);
   
   /*
	* ���շֽ���ָ��ַ���
   */
   $separator = " ";
   $new_str_array = explode($separator,$str);
   echo "<p> �ָ����ַ������� ";
   echo '<p> $new_str_array';
   var_dump($new_str_array);
   /*
	* ���շֽ���ָ��ַ���.$limitΪ����
   */
   $separator = " ";
   $new_str_array = explode($separator,$str,3);
   echo '<p> �ָ����ַ������� $limit��ֵΪ  3 ';
   echo '<p> $new_str_array';
   var_dump($new_str_array);
   
    /*
	* ���շֽ���ָ��ַ���.$limitΪ����
   */
   $separator = " ";
   $new_str_array = explode($separator,$str,-2);
   echo '<p> �ָ����ַ������� $limit��ֵΪ  -2 ';
   echo '<p> $new_str_array';
   var_dump($new_str_array);
   
   
   echo "<p><p><p>---------------------�ַ�������-strpos()����-------------------------<p><p><p>";   
   /*
		Ҫ�����ַ������Ƿ����ָ�����ַ���������ʹ�� strpos();
		int strpos(string $str,mixed $find[,int $offset = 0])
		$str ��Ҫ�����ҵ��ַ���
		$find  ��Ϊ�����ҵ��ַ���������ʹ������������Ϊ�ַ���ASCII��ֵ��
		$offsetΪ��ѡ�������������ò��ҵ���ʼλ�ã�Ĭ��Ϊ 0��
		--����������$find��$str�е�һ�γ��ֵ�λ�ã����û���ҵ��򷵻�FALSE
		
	ע�⣺���ں������ܷ�������0�Ͳ���ֵFALSE�������ʹ�øú���ʱ�������Ҫ�жϣ���Ӧʹ�õȱȽ������"==="��ȫ�ȱȽ������"!==",
	
	---1�����Ҫ�ڲ��ҹ����в����ִ�Сд������stripos()����
	---2�����Ҫ�Ӻ���ǰ���ң�����ʹ��strrpos()������
	---3�������Ҫ�Ӻ���ǰ���ң���Ҫ�����ִ�Сд�������ʹ�� strripos()��
    ��Щ�������÷���strpos�������Ǻ����Ƶġ�	
		
   */
   $str = "Lin love Mo God bless them";
   echo "<p> ԭ�ַ��� ";
   echo'<br>$str';
   var_dump($str);
   //�����ַ���
   echo "<br> ��ʼ���ҡ���<br> ";
   $find = array("Mo",0x65,"v");
   foreach($find as $value)
   {
	   $pos = strpos($str,$value,8);//�ӵڰ˸��ַ���ʼ����
	   if($pos===false)
	   {
		   echo "û���ҵ�<br>";
	   }
	   else
	   {
		   echo "λ��Ϊ��".$pos.'<br>';
	   }
   }
   
   echo "<p><p><p>---------------------�ַ����滻-str_replace����-------------------------<p><p><p>";   
   /*
	mixed str_replace(mixed $search,mixed $replace,mixed $str[,int &$count]);
	$search �Ǵ����ҵ��ַ�����$replace �Ǵ��滻���ַ��������߾�����Ϊ�ַ�������
	$str Ϊ���������ַ�����Ҳ����Ϊ�ַ�������
	$count Ϊ��ѡ������������ã������������滻�ĸ���
	
	�˴�ʡ�ԣ���ϸ�÷�
   */
   
   $str_array= array("Lin love mo God bless them",
                     "Mo Love We bless them");
   echo "<p>ԭ�ӷ����� ";
   var_dump($str_array);
   /*
	 �滻�ַ���
   */
   $search = array("Lin","Mo");
   $replace = array("����","ĬĬ");
   
    $new_str_array= str_replace($search,$replace,$str_array);
   echo "<p>���ӷ����� ";
   var_dump($new_str_array);
   
   echo "<p>---------------------�ַ�������------------------------<p>";   
   /*
	�ַ�������
	 md5();
	 shal();
	 crc32();����һ���ַ���CRC32����ʽ
	 uniqid();������΢��Ƶĵ�ǰʱ������һ��Ψһ��ID
	 crypt();ʹ��DES,Blowfish��MD5�����ַ���
	 md5�������÷����£�
	  string md5(string $str[,bool $raw_output =false])
	  
	  $strΪ�����ܵ��ַ���
	  $raw_outputΪѡ�Ĭ��ֵΪFALSE,��ʾ����������32���ַ���ɵ�ʮ�����Ƶ�ɢ���ַ�����������ΪTRUE��������16���ַ���ɵ�
	  ������ɢ���ַ���
	  
   */
   $str = "Line love Mo God bless them";
   echo "<p> ԭ�ַ���";
   var_dump($str);
   //md5 �����ַ���
   echo"<p> һ��MD5���� ".md5($str).'<br>';
   echo"<p> һ��MD5���� ".md5(md5($str)).'<br>';
   
    echo "<p>---------------------��HTML������صĺ���-----------------------<p>";  
	/*
		php��ʾ��������Щ�����ַ�����ת���ַ�֮������໥ת����
		���У�htmlentities()�������ڽ��ַ�����������ַ���ת��HTMLת���ַ�����html_entity_decode()���������������෴��
		���ڽ��ַ����е�HTMLת���ַ���������ʾ���ַ���
		
		
		htmlentities() �������÷����£�
		string htmlentities(string $str [,int $quote_style = ENT_COMPAT [,string $charset]]);
		���У�$str Ϊ��������ַ�����$quote_style��$charsetΪ��ѡ��ֱ��ʾ�Ƿ�������ź�ʹ�õ��ַ���š��ú������ش��������ַ�����
        $quote_style ��ֵ����Ϊ����ѡ��֮һ�� 
		
		
		html_entity_decode(string $str [,int $quote_style=ENT_COMPAT[,string $charset]]);���÷���htmlentities()�÷�����
		
		htmlspecialchars() ��htmlspecialchars_decode()���÷���������÷�����
		 
	*/
	$str = '<Lin love \'Mo\'>  " God bless them"';
	echo "<p>ԭ�ַ��� ";
	var_dump($str);
	
	/*
		��ͨ�ַ�ת����htmlת���ַ���������˫���ţ�
	*/
	$new_str1 = htmlentities($str);
	echo "<br><p>��ͨ�ַ�ת����htmlת���ַ���������˫���ţ� ";
	var_dump($new_str1);
    
	/*
		��ͨ�ַ�ת����htmlת���ַ���������˫���� �����ţ�
		
	*/
    $new_str2 = htmlentities($str,ENT_QUOTES);
	echo "<br><p>��ͨ�ַ�ת����htmlת���ַ���������˫���� �����ţ� ";
	var_dump($new_str2);
   
   /*
		��ͨ�ַ�ת����htmlת���ַ��������� ���ţ�
		
	*/
    $new_str3 = htmlentities($str,ENT_NOQUOTES);
	echo "<br><p>��ͨ�ַ�ת����htmlת���ַ��������� ���ţ� ";
	var_dump($new_str3);
   
    /*
		HTML ת��� ��ͨ�ַ�
		
	*/
    $new_str4 = html_entity_decode($new_str1,ENT_QUOTES);
	echo "<br><p>HTML ת���ַ�ת������ͨ�ַ� ";
	var_dump($new_str4);
   
    /*
	  ʵ�ʣ������У����ǳ�����������Ҫ�����û��ύ�Ķ���HTML�������������翪�����԰����
     <script> window.location.href("http://www.unknown.com");</script>	
		�������ֶ���html����һ����Ҫ���֣�һ��������htmlentities()������"<"��">"�ȷ��Ž���ת�壬ʹ�ò������������html��Ƿ�������
		��һ������strip_tags()����������HTML��Ƿ�
		string strip_tags(string $str [,string $allowable_tags])
		$str �Ǵ����˵��ַ���
		$allowable_tags�ǿ�ѡ����u�����ڲ��뱻���˵ı�Ƿ���ɵ��ַ������ú������ع�����HTML��Ǻ�PHP��ǵ����ַ���
		  ��Ҫע�⣺$allowable_tags�޷�����HTMLע�ͱ�Ǻ�PHP��ǲ�������
		
	*/
   
     $str = '<html><body><script> window.location.href("http://www.unknown.com"); </script> </body></html>';
	 echo "<p>ԭ�ַ��� ".htmlentities($str);
	 //��������HTML���
	 $new_str1 = strip_tags($str);
	 echo "<br><p>��������HTML��ǣ� ";
	 echo htmlentities($new_str1);
	 
	 //������<html>��<body>���
	 $allowable_tags = '<html><body>';
	 $new_str2 = strip_tags($str,$allowable_tags);
	 echo '<br><p>������'.htmlentities('<html>').'��'.htmlentities('<body>').'��ǣ� ';
	 
	 echo htmlentities($new_str2);
     
    echo "<p>---------------------������ʽ��������-----------------------<p>";  
	 /*1,һ����׼��������ʽ��Ϊ3���֣��ָ��������ʽ�����η�
		/mo .+?love.*?lin/is
		����  "/" ���Ƿָ���������"/"֮��ľ��Ǳ��ʽ���ڶ���"/" ������ַ���is�������η�
		������ʽ�У���12���ַ���������Ϊ������;�������ǣ�
		[ ] \ ^ $ . | ?  * + (  )  ��Щ�����ַ�Ҳ����ΪԪ�ַ�
		���Ҫ�� ���ڱ��ʽ�н���Щ�ַ���Ϊ�ı��ַ�����Ҫ"\"��ת�壬���� ��"1+2 = 3" ������ /1\+1=2/
	 */
	  
    /*1,�ַ����� ��[]- 
	   /[Ll]/ ��ʾƥ���ַ��� "L" ��"l"
	   /[0-9]/ ��ʾ 0-9
	   /[0-9a-fA-F]/ ��ʾ  0-9 �� a-f�� A-F
	   /[0-9ab]/ ��ʾ 0-9�� a�� b
	   /[0-9abU-Z]/ 0-9���� a����b �� ��дU-Z
	   
	 2��^ ��ʾȡ��
	  /[^0-9]/  ƥ��һ���������ַ���
	  /[^A-F]/ ƥ��һ���Ǵ�д��ĸ�ַ���
	  /[^0-9a-fA-F]/ ƥ�� һ����16���Ƶ����֣���Сд���У���
	  
	 3,�ظ����޶���?*+{}
			
		?:ƥ��ǰ���ַ�0�λ�1�Σ�����ʾǰ���ַ��ǿ�ѡ��
		*��ƥ��ǰ���ַ�0�λ��Σ�
		+:ƥ��ǰ���ַ�1�λ���
		
		
		/love?mo/ ��ʾe 0�λ�1�Σ�  ƥ��  lovemo ��lovmo
		/love*mo/ ��ʾe 0�λ��Σ�   ƥ�� lovmo lovemo ,loveeemo
	    /love+mo/ ��ʾe 1�λ��Σ�   ƥ��  lovemo ,loveeemo
	  
	  
	   ������ʽ�Ĺ�����������ʹ��һ���޶���"{}" ��ָ���ظ��ַ��Ĵ�������ʽ���£�
	  {min,max} ���ǷǸ���������ʾ�ظ�min��max֮�䣬�������ظ�min�Σ����max��
		   �����ô��max,��ʾ�ظ��Ĵ���û�����ޣ��������ظ�min�Ρ�
		   �����û�ж��š�������max����ʾ�ظ�min�Ρ�
		 /love{1,3}mo/ ��ʾe�����ظ�1�Σ���� 3��
	     /love{1,}mo/ ��ʾe�����ظ�1�Σ�
		 /love{1,}mo/ ��ʾeֻ�ظ�1�Σ�ֻ��ƥ�� lovemo
		 
		 
		4������ƥ����� .  
		        ����Ĭ�ϵ�������ǲ�ƥ�任�з��ġ�
			/love.e/ ƥ��  love��lovbe,lov-e;
		 
		 5,̰��ƥ��������ƥ��
		   ?  * + {} ��ƥ��ʱ���С�̰������
		   /<.+?>/���ʽ���洦�������ƥ��
		   
		 6�� ��ʼ����� ��^$
          ^ ��$ ��ƥ���κ��ַ�������ƥ������ַ�֮ǰ��֮���λ��
         /^Lin/ ƥ����ǣ���Lin ��ͷ���ַ���
         /Mo$/��ʾ��Mo��β

        7��ѡ�� |
		������ʽ�У���|��ʾѡ���������������ö�����ܵ�ƥ��ѡ��
		/Lin|Mo/  ��ʾƥ�� LinҲ���� �� Mo
		����ʹ�ö�� | ����ʾ������ܵ�ƥ��ѡ�
		����/Lin|Mo|zhang|wang/
		---��Ҫע����ǣ�ֻҪ�ҵ�����һ���󣬾ͻ�����ֹͣ�����ˡ��ͳ����� "��" һ����Ч��
		8,���뷴�����ã�()
		 /(Lin love Mo!)+/ ���Ƕ� Lin love Mo �����ظ�������ƥ�� Lin love Mo! ���� ��Lin love Mo!Lin love Mo!��
		  
		   ���á�()��������һ��������ʽ������������ѱ�ƥ����鰴��˳���ţ����뻺�档
		   �����á�\���֡��ķ�ʽ�Ա�ƥ�������з������á�/\1/���õ�һ��ƥ����飬/\2/���õڶ���ƥ����飬������
		   /\0/ ������������ƥ���������ʽ��������������õ���û����Ч��ƥ�䣬�����õ�������Ϊ�ա�
		   /(Lin)love Mo God bless \1/  ������� /(Lin)love Mo God bless Lin/ 
		    /(Lin)love (Mo) God bless \1 and \2/  ������� /(Lin)love Mo God bless Lin and Mo/ 
			  /(Lin)love (Mo) God bless \1 and \1/  
           /([Mo]+) love \1/ ��ƥ���ַ��� ��Mo love Mo��
		   /([Mo])+ love \1/ ��Ϊ ��([Mo])��һ��ƥ�䡰M��ʱ��\1���� ��M��,����([Mo])��ƥ�䡰o��,��ʱ\1���� ��o����
		                     �����������ʽ�� ��Mo love o ��
		    �� PHP�У����������¸�ʽ���������������
			/(?P<����>������)/
   
        9��ת���ַ�
		ʹ�÷�б��"\" ����ת��*��+������|��ԭ�ӷ����кܶ�
		
		10 ��ģʽ������ --���Է��ڱ��ʽ�����棬Ҳ���Է��ڱ��ʽ������
		  I����ʾ���Դ�Сд    
		   M S X
		 /Lin love Mo/i
		 /(?i) Lin love Mo/��ʾ����ģʽ���η�
		 /(?-i) Lin love Mo/��ʾ�ر�ģʽ���η�	  

		 
	  */
	 echo "<p><p><p>---------------------������ʽ���ַ��������е�Ӧ��---------------------------------<p><p><p>";  
	 
	 //1���ַ�����ƥ�������
	   /* int preg_match(string $pattern,string $str[,array $matches[,int $flags]])
	   $matches�ǿ�ѡ���������������$matches,������������������䡣
	   $matches[0]������������ģʽƥ����ı���
	   $matches[1]���������һ��������ʽ����ƥ����ı�
	   $flags Ҳ�ǿ�ѡ��������������ΪPREG_OFFSET_CAPTURE����������˸ñ�ǣ����ÿ�����ֵ�ƥ������ͬʱ���������ַ����е�ƫ������
	   ���ص������Ǹ���ά���飬ÿ�����鵥Ԫ�ĵ�һ��Ϊƥ����ַ������ڶ���Ϊƫ����
	   
	    ���ƥ��ɹ����� 1�����ƥ��ʧ�ܷ���  0 ��
		
		
		2, �����ƥ����󣬾ͻ�ֹͣ�����������е�ʱ��Ϊ�˿��Լ����������Ա��ҵ����е�ƥ�����Ҫ������ĺ�����
		int preg_match_all(string $pattern,string $str,array $matches[,int $flags]);
		$flag ����ѡ��ֵ���£�
		      PREG_PATTERN_ORDER; Ĭ��ֵ������������
			  PREG_SET_ORDER;   
			  PREG_OFFSET_CAPTURE;
		
		3���ַ������滻
		  mixed preg_replace(mixed $pattern ,mixed $replacement ,mixed $str [,int $limit]);
		
		4,�ַ����ķָ
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