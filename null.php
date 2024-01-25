<?php
// null constants
$x = null;

var_dump($x);

// you can check if a variable is null with ===
echo var_dump($x === null);

// if a variable is not defined, then it is null
echo var_dump($y);

// if you unset a variable, it becomes null
unset($x);
echo var_dump($x);