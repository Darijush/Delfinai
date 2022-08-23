<?php
echo '<pre>';
require __DIR__ . '/Stikline.php';
require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';

// $s200 = new Stikline(200);
// $s150 = new Stikline(150);
// $s100 = new Stikline(100);
// $s200->ipilti(1000);

// $s150->ipilti($s200->ipilti(1000)->ispilti());
// $s100->ipilti($s150->ipilti($s200->ipilti(1000)->ispilti())->ispilti());

// var_dump($s200);
// var_dump($s150);
// var_dump($s100);
$krepsys = new Krepsys;
while ($krepsys->deti(new Grybas)) {
}




var_dump($krepsys);
