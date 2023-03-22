<?php

$a = 100;
$b = '50';

//AND

if ($a === 100 && $b == 50) {
    echo '<p>AND successful</p>';
} else {
    echo '<p>AND unsuccessful</p>';
}


$x = 100;
$y = 50;

//AND

if ($x >= 100 && $y <= 50) {
    echo '<p>AND successful</p>';
} else {
    echo '<p>AND unsuccessful</p>';
}


$c = true;
$d = false;

$e = $c or $b;
var_dump($e);
echo '<p></p>';

$e = $c || $b;
var_dump($e);
echo '<p></p>';