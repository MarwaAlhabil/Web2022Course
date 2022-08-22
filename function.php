<?php

function familyName($fname){
 echo " $fname";

}
familyName("meme");
echo "<br>";
echo " ***************************** <br>";


?>

<?php

function familyName1($fname , $year){
 echo " $fname "." $year ";

}
familyName1("marwa","21");
echo "<br>";
echo " ***************************** <br>";


?>

<?php

function sum(int $x , int $y){

    $z=$x + $y;
    return $z;
}
sum(2,3);
echo " 2 + 3 = ".sum(2,3)."<br>";
echo " ***************************** <br>";

?>

<?php

function Isprime($n){

    for($x=2;$x<$n;$x++){

        if($n%$x ==0){
            return 0;
        }
    }
    return 1;

}
$a=Isprime(2);
if($a==0)
echo " not prime num"."<br>";
else
echo "prime"."<br>";
echo " ***************************** <br>";

?>

<?php

function factorial($n){
    if($n==0){
      return 1;
      }
      else{
        return $n*factorial($n-1);
      }
      
}
echo "the factorial  = ";
echo (factorial(3));
echo "<br>";
echo " ***************************** <br>";

?>

<?php

function check_palindrome($string) 
{
  if ($string == strrev($string)){
    echo "$string"."  :true , is palindrome"."<br>";
     
    }
  else{
    echo "$string"."  :false , not palindrom"."<br>";
	  
  }
}
echo check_palindrome("madam")."\n";
echo check_palindrome("122")."\n";
echo " ***************************** <br>";

?>

<?php

function reverseString($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverseString(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverseString('1234')."<br>");
print_r(reverseString('marwa')."<br>");
echo " ***************************** <br>";


?>

