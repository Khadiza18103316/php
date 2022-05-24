<?php

$currentTime = time();
echo $currentTime . '<br />';
echo $currentTime + 5 * 24 *60 *60 . '<br/>';
echo $currentTime -  60 *60*24 . '<br/>';

echo '<br/>';

echo date('m/d/y g:ia') . '<br/>';
echo date('m/d/y g:ia', $currentTime + 5 * 24 *60 *60) . '<br/>';
echo date('m/d/y g:ia', $currentTime -  60 *60*24) . '<br/>';

echo date_default_timezone_get();

date_default_timezone_set('UTC'); 

echo '<br/>';

echo date('m/d/y g:ia') . '<br/>';
echo date('m/d/y g:ia', $currentTime + 5 * 24 *60 *60) . '<br/>';
echo date('m/d/y g:ia', $currentTime -  60 *60*24) . '<br/>';

echo date_default_timezone_get() . '<br/>';

//
echo '<br/>';
echo date('m/d/y g:ia', mktime(0,0,0,4,10,null)) ;

echo '<br/>';

$date = date('m/d/y g:ia', strtotime('last day of february 2020'));
echo '<pre>';
print_r(date_parse_from_format('m/d/y g:ai', $date));
echo '</pre>';
?>