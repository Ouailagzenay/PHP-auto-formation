<?php

$filename = 'population.txt';
$f = fopen($filename, 'r');

if($f) {
    $contents = fread($f, filesize($filename));
    fclose($f);
    echo ($contents);
}