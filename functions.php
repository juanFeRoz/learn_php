<?php

declare(strict_types=1);

// with strict types enabled you can define the data types of the parameters and the return value
function fun(int $x): int {
    return $x;
}

// a ? before the return type indicates that it can also return null
function gun(int $x): ?int {
    return $x;
}

// you can also set the return type to void
function zun(): void {
}

// a function can have a variable amount of parameters
function vari(int ...$args): int {
   return array_sum($args);
}

echo vari(1,2,3,4,5,6);

// functions can called with named parameters
function namedParameter(int $x, int $y): int {
    return $x / $y;
}

echo namedParameter(y: 2, x: 4);

function staticVariables() {
    static $x = 0;

    $x++;
    return $x;
}

echo staticVariables();
echo staticVariables();
echo staticVariables();
echo staticVariables();
echo staticVariables();
echo '<br />';

// variable functions
function f(float $x): float {
    return $x * $x * $x;
}

$f = 'f';
echo $f(3.1416) . '<br />';

// anonymus functions & closure functions
$c = 22.1;
$g = function (float $x) use($c): float {
    return 2 * $x + $c;
};
echo $g(2.7) . '<br />';

// arrow functions & callback functions
$array = [1, 2, 3, 4];

$array2 = array_map(fn($x) => $x * $x, $array);

echo '<pre>';
echo print_r($array);
echo print_r($array2);
echo '<pre/>';