<?php
echo'<pre>';
require __DIR__.'/Tv.php';
require __DIR__.'/Kibiras.php';


// $tv1 = new Tv(12);


// var_dump($tv1);
// print_r($tv1->showList());
$kibiras1 = new Kibiras;
$kibiras2 = new Kibiras;

$kibiras2->pridetiDaugAkmenu(15);
$kibiras1->prideti1Akmeni();
$kibiras1->prideti1Akmeni();
$kibiras1->pridetiDaugAkmenu(3);

$kibiras2->prideti1Akmeni();

echo $kibiras1->kiekPririnktaAkmenu();
echo '<br>';
echo $kibiras2->kiekPririnktaAkmenu();
echo '<br>';
echo $kibiras1->kiekVisoAkmenu();
