<?php
echo '<pre>';
require __DIR__.'/vendor/autoload.php';
// require __DIR__.'/MarsoPalydovas.php';
// require __DIR__.'/Tenisininkas.php';

// $p1 = Kosmosas\MarsoPalyovas::create();
// $p2 = Kosmosas\MarsoPalyovas::create();
// $p3 = Kosmosas\MarsoPalyovas::create();
// $p4 = Kosmosas\MarsoPalyovas::create();

// var_dump($p1);
// var_dump($p2);
// var_dump($p3);
// var_dump($p4);

// $z1 = new Tenisininkas('Jonas');
// $z2 = new Tenisininkas('Petras');
// Tenisininkas::zaidimoPradzia();

// $z2->perduotiKamuoliuka();
// echo '<br>';
// $z1->perduotiKamuoliuka();
$abc = new Abc;
echo $abc->read();
// echo '<br>';
// echo $abc->readA();