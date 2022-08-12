<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>BANK v.1</title>
</head>
<body>
    <header>
    <?php require __DIR__.'./components/header.php'?>

    </header>
    <div class="container" style = "padding-top: 100px">
        <ul class="list-group col-10">
        <?php require __DIR__.'./components/accountList.php'?>
        </ul>
    </div>

  
    
    
</body>
</html>