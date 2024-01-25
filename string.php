<?php
// You can acces characters in a string like you would do in an array, negative numbers acces from the last character
$s = 'string';

// echo $s[-1];

// Apart from double and single quotes you can use heredoc and nowdoc to represent strings. They allow for multiline strings.
// Heredoc allows variables, Nowdoc does not

//Heredoc
$here = <<<HERE
ln 1
ln 2
$s
HERE;

$here2 = <<<'HERE'
ln 1
ln 2
$s
HERE;
echo nl2br($here);
echo '<br />';
echo nl2br($here2);