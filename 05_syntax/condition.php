<?php
// if
 $t = date("H");
if ($t < "20") {
  echo "Have a good day!";
}
//if else
$t = date("H");
if ($t < "10") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
// if else if
$t = date("H");
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "5") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
//switch 
//example1
$t = 10;
switch ($t){
    case 10 :
        echo " Have a good day!"; 
        break;
        case 5 :
            echo " Have a good night!"; 
      break;        
}
//example2
$t>10;
 if($t<10){
    echo " good day";
 }
 elseif($t>10){
    echo" hello";
 }
 else {
    echo " yes";
 }
// example3
$t=10;
 switch($t){
    case 11 :
        echo " good day";
        break;
    case 15 :
        echo " hello";
        break; 
    case 10 :
         echo " yes";
        break;      
        
 }
 ?>