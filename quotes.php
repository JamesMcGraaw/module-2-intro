<?php

$name = 'Fred';

echo '<p>$name</p>';

echo "<p>$name</p>";

$pet = 'crocodile';

echo "<p> I have three $pets</p>";

echo '<p>I have three $pets</p>';

echo "<p>I have three {$pet}s</p>";

//Type juggling - automatic conversion from one to another

$a = '3'; //String
$b = 4; //Integer
$result = $a * $b; //Integer
var_dump($result); //Gives you info about variable (type and what it would display)
print_r($result); //Just gives you human readable info
echo '<p></p>';

//Type Casting - programmer explicit changing from one type to another
$a = 'Hello';
$result = (bool)$a;
var_dump($result);
echo '<p></p>';

$a = '';
$result = (bool)$a;
var_dump($result);
echo '<p></p>';

$a = [];
$result = (bool)$a;
var_dump($result);
echo '<p></p>';

$nums = [1, 2, 3, 4, 5];

echo '<pre>';  //Pre-tag preformats them differently
var_dump($nums);
echo '</pre>';

echo '<p></p>';

echo '<pre>';
print_r($nums);
echo '</pre>';