<?php
// Arrays

$programmingLanguages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website'=> 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'relaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'relaseDate' => 'Nov 28, 2019'],

        ]
        ],
        'python' => [
            'creator' => 'Guide Yan Rossum',
            'extension' => '.py',
            'website' => 'www.python.org',
            'isOpenSource' => true,
            'versions' => [
            ['version' => 3.9, 'relaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'relaseDate' => 'Oct 14, 2019'],    
            ],
            ],
]; 

$array = [1,2,3];
unset($array[0], $array[1], $array[2]);
$array[] = 1;
print_r($array);
?>