<?php
  
    /*
     1,�Ժ�ֻҪ�������ļ��Ϳ���ֱ��ʹ�øö�����
	 2��ϲ���������Ķ��ߣ������Խ�Smarty������÷�װ���Լ������У�
	  �Ժ�ֻҪ�����Լ����༴�ɡ�
	  class  MySmarty extends Smary()
	  {
		  function  MySmarty()
		  {
			$this->template_dir = SMARTY_PATH.'templates';//����ģ���ļ�·��
			$this->compile_dir = SMARTY_PATH.'templates_c';	//����ģ������ļ���ַ
			$this->config_dir = SMARTY_PATH.'configs';//���������ļ�·��
			$this->cache_dir = SMARTY_PATH.'cache'; //���û���·��
    
		  }
	  }
   
   
   */
     //����smarty�������ļ�--
    //����smarty��·��������·��
	define('SMARTY_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/smarty/');
	 //����smarty��·�������·��
	//define('SMARTY_PATH','./smarty');
	echo SMARTY_PATH;
	require SMARTY_PATH.'Smarty.class.php';//require �� include ������ȫһ�������˴���ʧ�ܵķ�ʽ��֮ͬ�⡣require �ڳ���ʱ���� E_COMPILE_ERROR ����Ĵ��󡣻��仰˵�����½ű���ֹ�� include ֻ�������棨E_WARNING�����ű���������С�
	
	$smarty = new Smarty();//ʵ����һ��Smarty���� 
	$smarty->template_dir = SMARTY_PATH.'templates';//����ģ���ļ�·��
	$smarty->compile_dir = SMARTY_PATH.'templates_c';	//����ģ������ļ���ַ
	$smarty->config_dir = SMARTY_PATH.'configs';//���������ļ�·��
	$smarty->cache_dir = SMARTY_PATH.'cache'; //���û���·��
   

?>
