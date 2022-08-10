<?php
// if('POST' == $_SERVER['REQUEST_METHOD']){

// }

if('GET' == $_SERVER['REQUEST_METHOD']){
    if(!file_exists(__DIR__.'/data.json')){
        file_put_contents(__DIR__.'/data.json',json_encode([]));
    }
    $data= json_decode(file_get_contents(__DIR__.'/data.json'),1);
    $data[]=0;
    file_put_contents(__DIR__.'/data.json',json_encode($data));

}elseif('POST' == $_SERVER['REQUEST_METHOD']){
    if(!file_exists(__DIR__.'/data.json')){
        file_put_contents(__DIR__.'/data.json',json_encode([]));
    }
    $data= json_decode(file_get_contents(__DIR__.'/data.json'),1);
    $data[]=1;
    file_put_contents(__DIR__.'/data.json',json_encode($data));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 017 08-10</title>
</head>
<body <?php echo (count(json_decode(file_get_contents(__DIR__.'/data.json'),1)) < 2 ? "" : ((json_decode(file_get_contents(__DIR__.'/data.json'),1)[count(json_decode(file_get_contents(__DIR__.'/data.json'),1))-1] ) == 0?"style='background-color:green'" :  "style='background-color:yellow'")) ?>>

    <form action="http://localhost/delfinai/08-10/hwMechanics/task6/bgchange.php" method="post">
        <button type="submit">Yellow Backround?</button>
    </form>
    <form action="http://localhost/delfinai/08-10/hwMechanics/task6/bgchange.php" method="get">
        <button type="submit">Green Backsground?</button>
    </form>


</body>
</html>