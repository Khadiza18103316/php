<?php

// declare (strict_types=1);
// function foo(): mixed{
//     return [1.5];
// }
// var_dump(foo());

/** Functions */
declare (strict_types=1);

function foo(int $x, int $y): int{
    var_dump($x, $y);
   if($x % $y == 0 ){
       return $x / $y;
   }
   return $x;
}
$arr = ['y' => 2, 'x' => 1];
echo foo(...$arr);