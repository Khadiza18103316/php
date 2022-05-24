<?php
/** variable scopes */

/**global variable */
// $x = 5;
// function foo(){
//     $GLOBALS['x']= 10;
//     echo $GLOBALS ['x'];
// }
// foo();
// echo $x;

/**static variable */
// function getValue(){
//   static  $value = null;
//   if($value == null){
//       $value = someVaryExpensiveFunction();
//   }

//   //some more processing with $value
//   return $value;
// }
// function someVaryExpensiveFunction(){
//     sleep (2);
//     echo 'Processing';
//     return 10;
// }
// echo getValue() . '<br/>';
// echo getValue() . '<br/>';
// echo getValue() . '<br/>';

/**variable, anonymous & arrow functions */
// $x =1;
// $sum = function (int|float ...$numbers) use (&$x): int|float{
//     return array_sum($numbers);
// };
// echo $sum(1,2,3,4);

$array = [1,2,3,4];
$array2 = array_map(function($element){
    return $element *2;
}, $array);
echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';