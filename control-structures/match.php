<?php
 $a=2;
 $result = match($a){
    1 =>'value is one',
    2 =>'value is two',
    default =>'value is not one or two',
 };

 echo $result;
?>