<?php dexlare(strict_types=1)
 // sum function between two numbers

 function sum(int $a, int $b){
    $sum = $a + $b;
    return $sum;
 }
 echo "5 + 4 =".sum(5,4)."<br>";

 //difference between two numbers

 function diff(int $a, int $b){
    $difference = $a - $b;
    return $diff;
 }
 echo "10 - 3 =" .diff(10,3) ."<br>";

 //division of two numbers
  
 function div(int $a, int $b){
    $divison = $a / $b;
    retun $div;
 }
 echo "100 / 25 =" .div(100,25) ."<br>"

 //multoplication of two numbers

 function mul(int $a, int $b){
    $mul = $a * $b;
    return $mul;
 }
 echo "20 * 5 =" .mul(20,5) ."<br>";

 //modulus of two numbers

 function mod(float $a, float $b){
    $mod = $a % $b;
    return $mod;
 }
 echo "15 % 2 = " .mod(15,2) ."<br>"
?>