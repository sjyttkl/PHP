<?php

 session_start();
 if(isset($_SESSION['xiaodong']))
 { //已经注册了session
	 echo "欢迎您".$_SESSION['xiaodong'].'大神';
 }
 else //没有注册sessin
 {
	 echo "我不认识你。";
 }

?>