<?php
// match expression does a job similar to the switch statement
// it does a strict comparision, in contrast to the loose comparision of the switch statement
// because its an expression it's result can be assigned to a variable
// the key-value pairs needs to be exhaustive
// the key-value can be any valid expression

$reponse = 1;
$result = match($reponse) {
    1 => 'ok',
    2 => 'ouch',
    default => 'unknow'
};

echo $result;
