<?php
if('GET' == $_SERVER['REQUEST_METHOD']){
    $color = $_GET['color']?? 2;
        if($color == 1){
            $bgCol = '<body class="body-red">';
            }else{
                $bgCol = '<body class="body-black">';
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

    
    <a href="http://localhost/delfinai/08-10/hwMechanics/task1/hwMechanics.php"  >BLACK</a>
    <a href="http://localhost/delfinai/08-10/hwMechanics/task1/hwMechanics.php?color=1"   method="GET">RED</a>
</body>
</html>