<?php
require __DIR__.'/Nso.php';
require __DIR__.'/Tv.php';
require __DIR__.'/Vartotojas.php';

echo '<pre>';
// $nso1 = new Nso;
// $nso2 = new Nso;
// $nso3 = new Nso;


// $samsung = new Tv('silver');
// $silelis = new Tv('black');
// $lg = new Tv('yellow');
// // $lg->color = 'black';
// // var_dump($lg);
// echo $lg->color;
// echo "\n";
// $lg->show();
// $lg->showColor();
// // echo $lg->name;
// echo $lg->size;
// $lg->size = '20"';
// echo "\n";
// echo $lg->size;
$vartotojas1 = new Vartotojas();
$vartotojas1 -> vardas = "Jonas";
$vartotojas1-> pavarde = "Jonaitis";
echo $vartotojas1 -> pasisveikink();