<?php

use Petro\Read;

// require __DIR__ . '/01/Title.php';
// require __DIR__ . '/01/Read.php';
// require __DIR__ . '/02/Read.php';
spl_autoload_register(function ($class) {
    require __DIR__ . '/01/Read.php';
    echo $class.'<br>';
});
$book1 = new Petro\Read;
$book2 = new Antano\Read;

echo $book1->funBook();
echo '<br>';
echo $book2->funBook();