<?php
echo '<pre>';
require __DIR__.'/MarsoPalydovas.php';

$p1 = Kosmosas\MarsoPalyovas::create();
$p2 = Kosmosas\MarsoPalyovas::create();
$p3 = Kosmosas\MarsoPalyovas::create();
$p4 = Kosmosas\MarsoPalyovas::create();

var_dump($p1);
var_dump($p2);
var_dump($p3);
var_dump($p4);