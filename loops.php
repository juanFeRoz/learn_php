<?php

$user = [
    'name' => 'Juan',
    'email' => 'juan@gmail.com',
    'skills' => ['php', 'java', 'c++'],
];

foreach ($user as $key => $value) {
    // to handle printing an array when using foreach you can json_encode it
    // echo $key . ':' . json_encode($value) . '<br/>';
    
    // or you could conditionally start a nested foreach
    echo $key . ':';
    if (is_array($value)) {
        foreach ($value as $skill) {
            echo $skill . ' ';
        }
    }
    else {
        echo $value;
    }
    echo '<br />';
};