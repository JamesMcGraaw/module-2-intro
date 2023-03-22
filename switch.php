<?php

$i = 0;

switch ($i) {
    case 0:
        // no break
    case 1:
        // no break
    case 2:
        echo '<p>i is less than 3 but not negative</p>';
        break;
    case 3:
        echo '<p>i is 3</p>';
        break;
    default:
        echo '<p>i is unknown</p>';
        break;
}