<?php

for($x=0;$x<=100;$x+=10){
    echo"the number is $x <br>";
}

echo"**********************<br>";

$arr=["1","2","3"];
for($i=0;$i<count($arr);$i++){
echo" elemant :".$arr[$i]."<br>";
}
echo"**********************<br>";

$colors=array("red","green","blue");
foreach($colors as $value){
echo"$value <br>";
}

echo"**********************<br>";

$array=array("Peter"=>"35","Ben"=>"37");
foreach($array as $x=>$val){
    echo "$x => $val <br>";
}

echo"**********************<br>";

$c=1;
while($c<=5){
    echo"the number is : $c <br>";
    $c++;
}

echo"**********************<br>";

$b=1;
do{
    echo"the number is : $b <br>";
    $b++;
}
while($b<=5);



?>