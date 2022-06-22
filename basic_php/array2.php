<?php

require 'helpers.php';
//array_reduce
$invoiceItems = [
    ['price' => 9.99, 'qty'=> 3, 'desc'=> 'Item1'],
    ['price' => 29.99, 'qty'=> 2, 'desc'=> 'Item2'],
    ['price' => 149, 'qty'=> 4, 'desc'=> 'Item3'],
    ['price' => 14.99, 'qty'=> 1, 'desc'=> 'Item4'],
    ['price' => 4.99, 'qty'=> 5, 'desc'=> 'Item5'],
];
$total = array_reduce(
    $invoiceItems,
    fn($sum, $item)=> $sum + $item['qty'] * $item['price'],
    500

);
echo $total;

//array_search
$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b' ,'d'];
$key = array_search('d', $array);
if(in_array('a',$array)){
    echo 'Letter Found';
}


$array1 = ['a'=> 1, 'b'=> 2, 'c'=>3, 'd'=> 4, 'e'=>5];
$array2 = ['f'=> 4, 'g'=> 5, 'i'=>6, 'j'=> 7, 'k'=>8];
$array3 = ['l'=> 5, 'm'=> 9, 'n'=>10];

prettyPrintArray(array_diff($array1,$array2,$array3));
prettyPrintArray(array_diff_key($array1,$array2,$array3));

//sort array
$array = ['a'=> 4, 'b'=> 2, 'c'=>5, 'd'=> 1, 'e'=>5];
prettyPrintArray($array);
usort($array, fn($a,$b) => $a <=> $b);
prettyPrintArray($array);

//array distructuring
$array = [1,2,3,4];
[$a,$b,$c,$d] = $array;
echo $a . ',' . $b . ',' .$c . ',' . $d . ',' .  '<br/>';