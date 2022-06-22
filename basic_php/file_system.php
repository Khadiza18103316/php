<?php

//working with file system
mkdir('foo/bar', recursive: true);
if(file_exists('foo.txt')){
echo filesize('foo.txt');
file_put_contents('foo.txt', 'hello world');
clearstatcache();
echo filesize('foo.txt');
}else{
    echo 'File not found';
}

if(! file_exists('foo.txt')){
    echo 'File not found';
    return;
}

//
$file = fopen('foo.txt', 'r');
var_dump($file);

//
$content = file_get_contents('foo.txt', offset:3, length:2 );
echo $content;

//
file_put_contents('bar.txt', 'hello');
file_put_contents('bar.txt', 'world', FILE_APPEND);

//
unlink('bar.txt');
//
rename('foo.txt', 'bar.txt');
?>