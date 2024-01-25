<?php
// arithmetic
$x = 10;
$y = 3;

// division will always result in a float unless both operators are int and they are evenly divisible
echo var_dump($x / $y) . '<br/>';
echo var_dump(10 / 2) . '<br/>';
echo var_dump(10 / 2.0) . '<br/>';

// mod operator always returns an int with the sign of the dividend
echo var_dump(-10 % 3.0) . '<br/>';
// fmod return a float
echo var_dump(fmod(10.34, 2.5)) . '<br/>';

// concatenation operator
$s = 'Hello';
$s = $s  . ' world';
$s .= '!';

echo $s . '<br/>';

// equality operator
if (0 == '0') {
    echo 'true' . '<br/>';
} else {
    echo 'false' . '<br/>';
}
// strong equality also checks if the operators are of the same type
if (0 === '0') {
    echo 'true' . '<br/>';
} else {
    echo 'false' . '<br/>';
}
// inequality operator
if (0 != '0') {
    echo 'true' . '<br/>';
} else {
    echo 'false' . '<br/>';
}
// strong inequality
if (0 !== '0') {
    echo 'true' . '<br/>';
} else {
    echo 'false' . '<br/>';
}

// conditional operator
$b = (1 < 2) ? '1 is less than 2' : '2 is less than 1';

echo var_dump($b) . '<br/>';

// null conditional operator
// if m is not null j will be equal to that value, otherwise j will be equal to 'hello'
$m = null;
$j = $m ?? 'hello';
echo var_dump($j) . '<br/>';

// increment operators
$s = 'abcd';
// incrementing a string increments the character number, decrement have no effect
echo ++$s . '<br/>';

$n = null;
// incrementing a null value results in a 1, decrementing have no effect
echo ++$n . '<br/>';

// array operators
$a = [1,2,3];
$b = [4,5,6, 7, 8, 9];

// array union, values with the same key are considered the same object and not added to the union
print_r($a + $b);