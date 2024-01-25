<?php
// Booleans
// 0 and -0 == false
// 0.0 and -0.0 == false
// '' == false
// '0' == false
// NULL == false
// [] == false

$isComplete = 'false'; 

if ($isComplete) {
    echo 'Success';
}

else {
    echo 'Failure';
}