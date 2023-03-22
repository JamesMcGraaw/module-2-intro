<?php

$a = 9;
$b = 4;

// Instead of writing this:

if ($a < $b) {
    $greeting = '<p>less</p>';
} else {
    $greeting = '<p>equal or more</p>';
}

echo $greeting;

// You can write this:

$greeting = $a < $b ? '<p>less</p>' : '<p>more</p>';

echo $greeting;



// The second operand can be omitted.

$name = 'Ada';

$greeting = '<p>Hello ' . ($name ?: 'Guest') . '. Welcome!</p>';

echo $greeting;

$name = ''; // Empty string is falsy

$greeting = '<p>Hello ' . ($name ?: 'Guest') . '. Welcome!</p>';

echo $greeting;