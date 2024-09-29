<?php
// if
// syntax if(){}
// $x=9;
// if($x>10){
//     echo "x is greater than 10";
// }else{
//     echo "x is less than or equal to 10";
// }

//else if
// $x=10;
// if($x>10){
//     echo "x is greater than 10";
// }elseif($x<10){
//     echo "x is less than 10";
// }else{
//     echo "x is equal to 10";
// }

// 1 shortest form of if else
// $x=10;
// if($x>10) echo "x is greater than 10";
// else echo "x is less than or equal to 10";
// $x=10;
// if($x < 10):
//     echo "x is less than 10";
//     else:
//         echo "x is greater than or eqal to 10";
//         endif;


// $x=10;
// if($x>10){
//     echo "x is greater than 10";
// }elseif($x<10){
//     echo "x is less than 10";
// }else{
//     echo "x is equal to 10";
// }
//switch
$x=9;
switch(true){
    case $x>10:
        echo "x is greater than 10";
        break;
    case $x<10:
        echo "x is less than 10";
        break;
    default:
    echo "x is equal to 10";
    break;
}

?>