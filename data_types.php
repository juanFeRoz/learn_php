<?php
// Strict typing
declare(strict_types=1);

// Escalar types
// bool
$completed = true;
// int 
$index = 1;
// float
$error = 0.5;
// string
$greeting = 'Hello!';

echo $completed . '<br />';
echo $index . '<br />';
echo $error . '<br />';
echo $greeting . '<br />';

// gettype returns the type of a variable
echo gettype($completed) . '<br />';

// var_dump returns the type of the variable and the value it holds
echo var_dump($error) . '<br />';

// Compound types
// array
$list = [1, 2, 3.5, 'xd', false];
print_r($list);
echo '<br >';

// With strict types enabled you cannot pass a float to an integer function
function multiply(int $x, float $y)
{
    return $x * $y;
}

echo multiply(3, 2) . '<br />';

// Type casting
$n = '3';
$m = (int)$n;

echo var_dump($n) . '<br />' , var_dump($m);