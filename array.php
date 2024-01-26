<?php

declare(strict_types=1);
require 'helper.php';

$programmingLanguages = ['PHP', 'Java', 'C++'];

// you can check if there is an item in a given index of an array with the function isset()
var_dump(isset($programmingLanguages[3]));

// prints the content of the array in a human readable format
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// append an item to an array
$programmingLanguages[] = 'Python';

array_push($programmingLanguages, 'Javascript', 'Ruby', 'C');

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// count the items in an array
echo count($programmingLanguages);

// associative arrayas
$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];
$favoriteLanguage = 'java';
$programmingLanguages[$favoriteLanguage] = '20.0';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// multidimensional arrays
$programmingLanguages = [
    'php' => [
        'version' => '8.2',
        'website' => 'www.php.net'
    ],
    'java' => [
        'version'
        => '21.0',
        'website' => 'www.java.com'
    ]
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php']['website'];

// key overwrite
// php will try to cast the key values to int, if multiple values have the same key the last one will overwrite the rest
$array = [1 => 'a', true => 'b', 1.5 => 'c', '1' => 'd'];


echo '<pre>';
print_r($array);
echo '</pre>';

// null key values
$nullArray = [null => 'null'];

echo '<pre>';
print_r($nullArray);
echo '</pre>';

// if you only assing a numeric value to a key, the next keys will increment according to that value
$numArray = [1, 2, 60 => 3, 4, 5, 6];

echo '<pre>';
print_r($numArray);
echo '</pre>';

// removing elements from the array
$arr = [1,2,3];

// remove the last element and return it
echo array_pop($arr), '<br />';
// remove the first elemente and return it
// any numeric keys will be reset
echo array_shift($arr), '<br />';

// unset removes any element of the array without returning it or reseting numeric keys
$array2 = [1,2,3,4];
unset($array2[2]);

echo '<pre>';
print_r($array2);
echo '</pre>';

// array casting turns the variable into an array containing only the value of the variable at index 0
$x = 1;

echo '<pre>';
print_r((array)$x);
echo '</pre>';

// to check if a key exists in an array you can use a built-in function
$a = ['xd' => 1, 'dx' => null];
echo var_dump(array_key_exists('dx', $a));
// isset will tell you if a key exists and its not null
echo var_dump(isset($a['dx']));

// array functions

// array_chunk splits the array into chunks

$array = [1, 2, 3, 4];

prettyPrintArray($array);

prettyPrintArray(array_chunk($array, 2));

// array_combine combines two arrays of the same length into a new array

$array2 = [5, 6, 7, 8];

prettyPrintArray($array);
prettyPrintArray($array2);

prettyPrintArray(array_combine($array, $array2));

// array_filter filters the array based on a expression that evaluates to bool

$arrayEven = array_filter($array, fn($number) => $number % 2 === 0);

prettyPrintArray($arrayEven);

// no re-index occurs with array_filter, to re-index an array use array_values
prettyPrintArray(array_values($arrayEven));

// array_keys returns all the keys in the array unless a value is specified
$keys = array_keys($array);
prettyPrintArray($keys);

// array_map aplies a callback function to the array
$arrayDouble = array_map(fn($number) => $number * 2, $array);

prettyPrintArray($arrayDouble);

// array_merge merges varius arrays into a single one
$arrayMerged = array_merge($array, $array2);

prettyPrintArray($arrayMerged);

// array destructuring

[$a, $b, $c, $d] = $array;

prettyPrintArray($array);
echo $a . ', ' . $b . ', ' . $c . ', ' . $d . '<br/>';

// comment
//