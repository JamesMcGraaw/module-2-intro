<?php
// Variables

//$4site = 'not yet'; - ILLEGAL CODE

$fourSite = 'not yet';

echo '<p>' . $fourSite . '</p>';

// Constants

define('PI', 3.1415927);  /*PHP storm knows that it's better to use const */

const EULER = 2.7182818;

if ( PI < 4) {
    define('HEIGHT', '100vh');  //define makes it global within a block of code//
//    const WIDTH = '90vw'; const doesn't work in a block of text - only works at a global level   //
}

echo '<p>' . HEIGHT . '</p>';

$testVar = null;
echo '<p>$testVar is:' . $testVar . '</p>';
echo '<p>' . strtolower(gettype($testVar)) . '</p>';

$address = '10 High Street';
$result = $address * 5;

echo '<p>' . $result . '</p>';  //Code throws up warning - but will times 10 by 5, then can't times High Street by 5. CODE JUGGLING//
//string converted to integer, because it knows it needs to do a maths on it//

$address = 'High Street 10';
$result = $address * 5;
echo '<p>' . $result . '</p>';  //Fatal error because you can't times string by int//

echo '<p>Finished now!</p>';  //Not displayed because the fatal error causes the code to stop running//