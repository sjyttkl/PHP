<?php

 //包含 smarty_config文件
 require "../smarty_config.php";
 //实例化Smarty文件
 $smarty = new Smarty();
 $smarty->assign('title',"《编程之美》");
 $smarty->assign('autor',"小冬");
 $smarty->assign('poem1',"第一句");
 $smarty->assign('poem2',"第二句");
 $smarty->assign('poem3',"第三句");
 $smarty->assign('poem4',"第四句");
 //调用并显示模板
 $smarty->display('Ex01.html');


?>