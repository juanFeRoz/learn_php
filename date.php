<?php
echo time() . '<br/>';
echo time() + 3 * 24 * 60 * 60 . '<br/>';
echo time() - 5 * 24 * 60 * 60 . '<br/>';

echo date_default_timezone_get() . '<br/>';

echo date('d/m/Y h:i:sa') . '<br/>';
echo date('d/m/Y h:i:sa', time() + 3 * 24 * 60 * 60). '<br/>';
echo date('d/m/Y h:i:sa', time() - 5 * 24 * 60 * 60). '<br/>';


date_default_timezone_set('America/Bogota');

echo date_default_timezone_get() . '<br/>';

echo date('d/m/Y h:i:sa') . '<br/>';
echo date('d/m/Y h:i:sa', time() + 3 * 24 * 60 * 60). '<br/>';
echo date('d/m/Y h:i:sa', time() - 5 * 24 * 60 * 60). '<br/>';

echo date('d/m/Y', mktime(hour: 8, day: 9, month: 1, year:2024)) . '<br/>';

echo date('m/d/Y', strtotime('09/01/2024'));