<?php

// 1.function addTwoNumbers($a, $b):int{
//   $sum=$a+$b;
// return $sum;
// }

// echo addTwoNumbers(5,7);

// 2.function sayNamaste(){
//   echo 'Hi Namaste';
// }

// sayNamaste();

// 3.echo ucfirst('hi');
// $greet= function($name){
// return "Hi $name";
// };

// echo $greet('Jagdeep');

// 5.$double = fn($n) => $n * 2;

// echo $double(4);

// $callable = strtoupper(...);
// echo $callable('hello jagdeep');
//6. declare(strict_types=1);
//  function addNumbers(int|float $a, int|float $b): string {
//  return $a + $b;
// }
// echo addNumbers(3, 4.2); // Outputs: 7.2
$a=10;
function add(){
  //local variable 
  return global $a;
}

echo add();