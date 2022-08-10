<?php
if('GET' == $_SERVER['REQUEST_METHOD']){

    header("Location: http://localhost/delfinai/08-10/hwMechanics/task4/orange.php");
    die;
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
<body style="background-color: yellow">

    
    <a href="http://localhost/delfinai/08-10/hwMechanics/task1/hwMechanics.php"  >BLACK</a>
    <a href="http://localhost/delfinai/08-10/hwMechanics/task1/hwMechanics.php?color=1"   method="GET">RED</a>
</body>
</html>