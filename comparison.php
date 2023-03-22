<?php
$a = 5;
$b = '5';

if ($a == $b) {
    echo '<p>Same value</p>';
} else {
    echo '<p>Different value</p>';
}

if ($a === $b) {
    echo '<p>Same value</p>';
} else {
    echo '<p>Different value</p>';
}