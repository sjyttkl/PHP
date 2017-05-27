<?php
  
  echo "<p>---------------------------------PHP与XML----------------------------------------<p>";
  
  /*
  //创建xml对象
    1，输入 文件路径
	simplexml_load_file(string $filename);
	2，输入 $data 为字符串表示的xml文档
	simplexml_load_string(string $data);
	3，$node 为DOM扩展库创建的一个xml元素节点
	   $dom = new DomDocument();
	   $dom->loadXML($str_xml)//载入包含xml的字符串
	simplexml_import_dom(DOMNode $node);
  
  */
  $file_path = './Lession.xml';
  if(file_exists($file_path))
  {
	  //创建SimpleXml对象
	  
	  $xml = simplexml_load_file($file_path);
	  
	  //修改
	  $xml->lession[0]["name"] = $xml->lession[0]["name"].'(实战)';
	  $xml->lession[0]->stu_number = '98';
	  $xml->lession[0]->ave_mark = '90';
	  
	  $xml->lession[1]["name"] = $xml->lession[0]["name"].'高级实战';
	  $xml->lession[1]->stu_number = '89';
	  $xml->lession[1]->ave_mark = '32';
	  
	  $new_xml = $xml->asXML();
	  if($xml->asXML('./NewLession.xml'))
	  {
		  echo 'XML文件保存成功';
	  }
  }
  
  
  /*
	使用Dom扩展库动态创建XML文档，有文档帮助使用
  
  */
  
  $version = "1.0";
  $encoding = "UTF-8";
  $dom = new DomDocument($version,$encoding);
  $rootEle = $dom->createElement("boys");//创建根节点
  $dom->appendChild($rootEle);//将根节点添加到DOM对象中
  
  $boy = $dom->createElement("boy");
  $boy->setAttribute('name','小冬');
  $boy->setAttribute('age','25');
  $rootEle->appendChild($boy);
  
  $love = $dom->createElement('love');
  $rootEle->appendChild($love);
  //创建子节点
  $sex = $dom->createElement('SEX','女生');
  $love->appendChild($sex);
  
  
  
  $love = $dom->createElement("学习",'很好');
  $rootEle->appendChild($boy);
  
  echo $dom->saveXML();
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
?>
 
 
