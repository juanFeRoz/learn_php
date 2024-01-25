<?php
// Integers
// The range of an int depends on the machine
// My machine is 64 bits 
echo PHP_INT_MAX . '<br />';

// Base 10
$x = 10;
echo $x . '<br />';

// Base 16
$y = 0xFF;
echo $y . '<br />';
// Base 8
$z = 066;
echo $z . '<br />';

// Base 2
$w = 0b001110;
echo $w . '<br />';

// Integer overlow
$n = PHP_INT_MAX + 1;
echo $n . '<br />';
// When an integer overflows it becomes a float
var_dump($n);
echo '<br />';

// Casting to int
$m = (int)'false';
// When casting a string to an integer php will attemp to extract any numeric parts, if it can't, it will become a zero
echo $m . '<br />';

// You can use underscores for readibility reasons
$oneMillion = 1_000_000;
echo $oneMillion;