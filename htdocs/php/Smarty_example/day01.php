<?php

 //���� smarty_config�ļ�
 require "../smarty_config.php";
 //ʵ����Smarty�ļ�
 $smarty = new Smarty();
 $smarty->assign('title',"�����֮����");
 $smarty->assign('autor',"С��");
 $smarty->assign('poem1',"��һ��");
 $smarty->assign('poem2',"�ڶ���");
 $smarty->assign('poem3',"������");
 $smarty->assign('poem4',"���ľ�");
 //���ò���ʾģ��
 $smarty->display('Ex01.html');


?>