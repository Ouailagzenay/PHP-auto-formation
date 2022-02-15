<?php

$filename = 'readme.txt';


$f = fopen($filename, 'w+');
if ($f) {
    // process the file
    // ...
    echo 'The file ' . $filename . ' is open';
    fclose($f);
}