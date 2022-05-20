<?php

// Loops in php

//while
$i = 0;

while ($i <= 15 ){
   if( $i % 2 === 0 ){
       $i++;
        continue;
    }

    echo $i++ . ',';
}

//do-while
$i = 0;
do{
    echo $i++;
}
while($i <= 15);

//for
$text = ['a', 'b', 'c', 'd'];
$length = count($text);
for($i = 0; $i < $length; $i++);
{
    echo $text[$i] . '<br />';
}

//foreach
$programmingLaguages = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programmingLaguages as $key=> $language){
    echo $key . ':' . $language . '<br />';
}
unset($language);
$language = 'php';
print_r($programmingLaguages);

//Another foreach
$user = [
    'name' => 'Akhi',
    'email' => 'Akhi@gmail.com',
    'skills' => ['php', 'js', 'laravel'],
];
foreach($user as $key => $value){
    echo $key . ': ';
    if(is_array($value)){
        foreach($value as $skill){
            echo $skill . ' - ';
        }
        }else{
            echo $value;
        }
        echo '<br />';
    }
    
    ?>