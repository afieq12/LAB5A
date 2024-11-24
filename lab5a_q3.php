<?php

function calculateArea($length, $width) {
    return $length * $width;
}


$length = 4; // Example length
$width = 2;   // Example width
$area = calculateArea($length, $width);


echo "The area of a rectangle with a width of $length and $width is: $area";
?>
