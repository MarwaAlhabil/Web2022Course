<?php
//opretaor العمليات
 $v1 = 2;
 //$res = ($v1+1)*2-1;
 $res = $v1++*2-1;
 echo $res."<br>";
 $v2 =2;
 $r = $v2++*2-1 + $v2;
 echo $r."<br>";
 $v = $v1++*2+--$v2+$v1;
 echo $v;

 //example 
 $salary = 2000;
 $res = $salary-($salary*0.05);
 echo $res."<br>";
 ?>