<?php

//Arithmetic Operators(+ - * / % **) 
$x = 10;
$y = 2;
var_dump($x % $y);

//Assignment Operators(= += -= *= /= %= **=) 
$x = 5;
$x +=  3;
echo $x;

//String Operators(. *=)
$x = 'Hello';
$x .= ' world';
echo $x;

//Comperison Operators(== === <> < > ?? ?: )
$x =5;
$y =10;
var_dump($x < $y);
var_dump($x > $y);
var_dump($x <= $y);
var_dump($x >= $y);
var_dump(0 == '0ada');

$x = 'Hello World';
$y = strpos($x , 'H');

$request = $y === false ? 'H Not Found' : 'H Found at index ' . $y;
echo $result;

$y = $x ?? 'hello';

var_dump($y);

//Error control Operators (@)

$x = @file('foo.txt');

//Increment & Decrement Operators (++ --)
$x ='abc';
echo ++$x;
echo $x;

// Logical  Operators (&& || ! and or xor)
$x =false;
$y = false;

function hello(){
    echo 'hello world';
    return false;
}
var_dump($x && hello() || true);

?>