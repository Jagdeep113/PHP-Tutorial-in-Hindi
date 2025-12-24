<?php 

// $fruits = array("Apple", "Banana", "Mango");
// $fruit = ["Apple", "Banana", "Mango"];

//array_push($fruits, "Orange");
//array_shift($fruit);
//echo $fruits[2];
//$fruits[1]="Orange";
//$fruits[]="Orange";
//array_unshift($fruit, "Strawberry");
// unset($fruits[0]);
 //print_r($fruit);
//echo implode("/ ", $fruits);

// echo count($fruits);
// for($i=0; $i < count($fruits); $i++ ){
//  echo $fruits[$i]. "\n";
// }

// foreach($fruits as $key=> $val){
//   echo $val. "\n". $key;

// }
// $student = [
// "name" => "Amit",
// "age" => 22,
// "course" => "PHP"
// ];

// echo $student['name'];

// $students = [
// ["name" => "Amit", "marks" => 80],
// ["name" => "Rohit", "marks" => 75],
// ["name" => "Neha", "marks" => 90]
// ];
// //print_r($students);
// //echo $students[0]['marks'];

// foreach($students as $a){
//  echo $a['name']." ".$a['marks']."\n";
// }
$numbers = [1, 2,2, 3, 4, 5];
// $even = array_filter($numbers, fn($n) => $n % 2 == 0);
// print_r($even);
$square = array_map(fn($n) => $n * $n, $numbers);

print_r($square);



