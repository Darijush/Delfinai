<?php
echo '<pre>';
$cat = 'Greyyy';
// POST scenarijus. Po POST'O reikia redirectinti
if('POST' == $_SERVER['REQUEST_METHOD']){
    $ster = $_POST['Formster']?? "Nothing posted";
    if(!file_exists(__DIR__.'/data.json')){
        file_put_contents(__DIR__.'/data.json',json_encode([]));
    }
    $data= json_decode(file_get_contents(__DIR__.'/data.json',1));
    $data[]=$ster;
    file_put_contents(__DIR__.'/data.json',json_encode($data));
    header("Location: http://localhost/delfinai/08-10/");
    die;
}

// $ster2 = $_GET['Formster2']?? "Nothing passed";
//GET scenarijus, parodo puslapi apacioje
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 017 08-10</title>
</head>
<body>
    <a href="http://localhost/delfinai/08-10/"><?= $cat?></a>
    <form action="http://localhost/delfinai/08-10/" method="post">
        <input type="text" name="Formster">
        <button type="submit">Real</button>
    </form>
    <!-- <form action="http://localhost/delfinai/08-10/" method="get">
        <input type="text" name="Formster2">
        <button type="submit">Real2</button>
    </form> -->
    <ul>
        <?php foreach(json_decode(file_get_contents(__DIR__.'/data.json',1)) as $val): ?>
        <li><?=$val?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>