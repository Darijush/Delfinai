<?php
if('GET' == $_SERVER['REQUEST_METHOD']){
    $color = $_GET['color']?? 2;
        if($color !== 2){
            $bgCol = "style='background-color:$color'";
        }else{
        $bgCol = "";
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
<body class='body-black' <?=$bgCol?>>
    <a href="http://localhost/delfinai/08-10/hwMechanics/task3/hwt3.php"  >BLACK</a>
        <form action="http://localhost/delfinai/08-10/hwMechanics/task3/hwt3.php" method="get">
        <input type="text" name="color">
        <button type="submit">Kita spalva</button>
    </form>
</body>
</html>