<?php
// $ symbol we define variable in php
// variable can syart with char or with _

// $a // valid
// $_a// valid 
// $1a//invalid

// $a=1; // int
// $A=12;
// $b="hello";// string
// $c=4.5;//float
// $d=true;// boolean
// $e=null;

// echo gettype($A);
// $x=12;
// function a(){
//     global $x;global scope
//     echo $x;
// }
// a();

// function a(){
//     $x=12; local scope
    
// }
// echo $x;

// static variable 
// function abc(){
//     static $x=0;
//     $x++;
//     echo $x."\n";
// }

// abc();
// abc();
// abc();
// abc();
// abc();

// $a=[];//array

// class A {
//     function abc(){

//     }
// }
// $obj= new A();
// $obj //object type

$a='dynamic';
$$a="i am here";
echo $dynamic;
?>