<?php

if('GET' == $_SERVER['REQUEST_METHOD']){
    $red = $_GET['ToRed']?? 2;
    if($red == 1){
        header("Location: http://localhost/delfinai/08-10/hwMechanics/task5/red.php"); 
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
<body>
    <a href="http://localhost/delfinai/08-10/hwMechanics/task5/blue.php?ToRed=1" >Maybe to Red?</a>
    
</body>
</html>