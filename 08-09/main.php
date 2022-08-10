<?php

// echo '<pre>';
// echo "\n start \n";
// echo __DIR__; // __DIR__ shows absolute path to file in which we want to include other files
// echo "\n\n";

// header('Content-Type: image/jpg');

// $data = file_get_contents(__DIR__.'/hoodie.jpg');

// echo $data;
// print_r($data);

// echo "\n\n";
// include_once 'inc.php';
// include_once 'inc.php';
// include_once 'inc.php';
// require __DIR__.'/inc.php'; // if required file in other folder need harcode the rest of path in ''
// require 'inc.php';

// echo "\n END \n";

$x = ['Hi'=>'Hello'];
$j  = json_encode($x);
file_put_contents(__DIR__.'/x.json',$j);

echo $j;
$xx = json_decode(file_get_contents(__DIR__.'/x.json'),1);

print_r($xx);