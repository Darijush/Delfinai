<?php

if('GET' == $_SERVER['REQUEST_METHOD']){
    $stay = $_GET['Stay']?? 2;
    if($stay == 2){
        header("Location: http://localhost/delfinai/08-10/hwMechanics/task8/pink.php"); 
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #F33A6A">
    <ul>
        <?php foreach(json_decode(file_get_contents(__DIR__.'/data.json',1)) as $val): ?>
        <li><?=$val?></li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>