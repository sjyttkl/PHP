<?php

 session_start();
 if(isset($_SESSION['xiaodong']))
 { //�Ѿ�ע����session
	 echo "��ӭ��".$_SESSION['xiaodong'].'����';
 }
 else //û��ע��sessin
 {
	 echo "�Ҳ���ʶ�㡣";
 }

?>