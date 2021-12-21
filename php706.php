<?php

$personal = function(){
    return "Hello<br />";
};
$personal2 =fn()=>return "Hello world";

$student= function($x,$y){
    return $x +$y;
};
$student2 =fn($x,$y)=>$x+$y;
echo $personal();
echo $personal2();
echo $student(10,5);
$student(20,10);
