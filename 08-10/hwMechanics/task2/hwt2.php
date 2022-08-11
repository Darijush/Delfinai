<?php
if('GET' == $_SERVER['REQUEST_METHOD']){
    $color = $_GET['color']?? 2;
        if($color == 2){
            $bgCol = "<body class='body-black'>";
        }else{
            $bgCol = "<body  style='background-color:#$color'>";
        }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?=$bgCol?>
    <a href="http://localhost/delfinai/08-10/hwMechanics/task2/hwt2.php"  >BLACK</a>
    <a href="http://localhost/delfinai/08-10/hwMechanics/task2/hwt2.php?color="   method="GET">RED</a>
</body>
</html>