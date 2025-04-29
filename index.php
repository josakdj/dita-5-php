<?php

function helloWorld(){
    echo "Hello World";
}

helloWorld();

echo "<br>";
echo "<br>";


function sum() {
    $value = 120+20;
    echo $value;
}

sum();

echo "<br>";
echo "<br>";

function maximum($x,$y) {
    if ($x > $y){
        return $x;
    }else{
        return $y;
    }
};

$a = 20;
$b = 30;

$test = maximum($a,$b);

echo "the max of $a and $b is $test";

echo "<br>";
echo "<br>";

function findNum($num) {
    if($num % 2 == 0){
        echo "$num is divisable by 2";
        echo "<br>";
    }else{
        echo "$num is not divisable by 2";
        echo "<br>";
    }
}

findNum(1);

findNum(2);

findNum(3);

findNum(4);

findNum(5);

findNum(6);

findNum(7);

findNum(8);

findNum(9);

$x = 5;
$y = 6;
// global variable

function localvariable(){
    $y = 4;
    echo $y;
    // local variable
}

localvariable();

function sum2(){
    global $x,$y;
    $y = $x + $y;
    echo "<br>";
}

sum2();
echo $y;

echo "<br>";
function callCounter() {
    static $count = 0;
    $count++;
    echo $count;
}

callCounter();
callCounter();
callCounter();
callCounter();
callCounter();
callCounter();

echo "<br>";
$sports = array("football","besketball","volleiball","topat tenisit");

echo $sports[2];
echo "<br>";
echo end($sports);
echo "<br>";
echo count($sports);
echo "<br>";

for($i=0; $i < 4; $i++){
   echo $sports[$i] . "<br>";
}