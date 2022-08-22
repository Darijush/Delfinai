<?php
echo'<pre>';
require __DIR__.'/Tv.php';
require __DIR__.'/Kibiras.php';
require __DIR__.'/SuperKibiras.php';

// $tv1 = new Tv(12);


// var_dump($tv1);
// print_r($tv1->showList());
$kibiras1 = new SuperKibiras;
$kibiras2 = new Kibiras;

$kibiras2->pridetiDaugAkmenu(15);
$kibiras1->prideti2Akmenis();
$kibiras1->prideti1Akmeni();
$kibiras1->pridetiDaugAkmenu(3);

$kibiras2->prideti1Akmeni();

echo $kibiras1->kiekPririnktaAkmenu();
echo '<br>';
echo $kibiras2->kiekPririnktaAkmenu();
echo '<br>';
echo $kibiras1->kiekVisoAkmenu();
echo '<br>';
echo Kibiras::kiekYraAkmenu();
