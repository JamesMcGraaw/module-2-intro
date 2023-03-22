<?php

$null = '';
$bool = true;
const INT = 5;
const FLOAT = 6.9;
$string = 'I am a string!';
$array = [4, 4, 4];

echo '<p>' . $null . '</p>';
echo '<p>' . $bool . '</p>';
echo '<p>' . INT . '</p>';
echo '<p>' . FLOAT . '</p>';
echo '<p>' . $string . '</p>';
echo '<p>' . $array . '</p>'; // Throws up a warning - this is expected - can't echo out an array.

var_dump($null);
echo '<p></p>';
var_dump($bool);
echo '<p></p>';
//var_dump(INT); Warning - can't var_dump a constant, it's not a variable
echo '<p></p>';
//var_dump(FLOAT);
echo '<p></p>';
var_dump($string);
echo '<p></p>';
var_dump($array);
echo '<p></p>';

print_r($null);
echo '<p></p>';
print_r($bool);
echo '<p></p>';
//print_r(INT); Warning - can't print_r a constant, it's not a variable
echo '<p></p>';
//print_r(FLOAT);
echo '<p></p>';
print_r($string);
echo '<p></p>';
print_r($array);
echo '<p></p>';