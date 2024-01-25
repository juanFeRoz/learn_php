<?php

// Constants with define are created at runtime
define('PI', 3.1416);

echo PI;

// Constants with const are created at compile time
const EULER = 2.7182;

echo EULER;

// You can create constants dynamically
$debt = 'debt';

define('STATUS_' . $debt, 8);

echo STATUS_debt;

// Using the PHP_VERSION constant defined in the language

echo PHP_VERSION;

// Magic constants can change theri value in some circumstances

echo __LINE__;
echo __LINE__;


// Variable variables take the value of a variable an makes it the name of another variable
$juan = 'nombre';
$$juan = 'juan';

echo "{$juan}, {$$juan}";