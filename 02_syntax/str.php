<?php 
//دوال النصوص 
 echo strlen ("hello world!");// ايجاد طول السلسلة
 echo str_word_count("rozan ali ashour!"); // ايجاد عدد الكلمات 
 echo strrev("rozan ali ashour!"); //عكس الكلام من اليمين لليسار 
 echo str_replace("world" ,"php"," hello world"); // استبدال كلمة بكلمة اخرى 
 echo strpos("helloworld " , "world"); //قطع جزء من النص 
 echo substr("hello world!,hh",4,7); //عدد الحروف المقطوعة 
 $str = "hello world!,hh";
 echo substr($str,0,strpos("$str",'!')+1);
?>