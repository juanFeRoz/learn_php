<?php

// You can use scientific notation in floats
$x = 9.18e-15;
var_dump($x);


// You should never compare floats directly, they have small rounding errors
$y = 0.23;
$z = 1 - 0.77;

echo $y, ' ', $z;

if ($y == $z) {
    echo 'equal';
}

else {
    echo 'not equal';
}

// NaN occurs when there is an undefined operation
echo log(-1);

//INF happens when you overflow floats
echo PHP_FLOAT_MAX * 3;

// To check if a float is NaN or INF use built-in functions
echo is_nan(NAN), is_infinite(INF);