<?php
require __DIR__.'/Nso.php';
require __DIR__.'/Tv.php';
echo '<pre>';
// $nso1 = new Nso;
// $nso2 = new Nso;
// $nso3 = new Nso;


$samsung = new Tv('silver');
$silelis = new Tv('black');
$lg = new Tv('yellow');
// $lg->color = 'black';
// var_dump($lg);
echo $lg->color;
echo "\n";
$lg->show();
$lg->showColor();
// echo $lg->name;
echo $lg->size;
$lg->size = '20"';
echo "\n";
echo $lg->size;