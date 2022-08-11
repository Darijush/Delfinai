<?php

if('POST' == $_SERVER['REQUEST_METHOD']){
    $form = $_POST['formA']?? "Nothing posted";
    if(!file_exists(__DIR__.'/data.json')){
        file_put_contents(__DIR__.'/data.json',json_encode([]));
    }
    $data= json_decode(file_get_contents(__DIR__.'/data.json',1));
    $data[]=$form;
    file_put_contents(__DIR__.'/data.json',json_encode($data));
    header("Location: http://localhost/delfinai/08-10/hwMechanics/task8/rose.php?Stay=1");
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
<body style="background-color: pink">
<form action="http://localhost/delfinai/08-10/hwMechanics/task8/rose.php?" method="POST">
        <input type="text" name="formA">
        <button type="submit">GO TO ROSE</button>
    </form>
    
</body>
</html>