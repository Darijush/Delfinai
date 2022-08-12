<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cheked = count($_POST['c']);
    header("http://localhost/delfinai/08-10/hwMechanics/task9/checkbox.php?all='.checked'"); 
    die;
}

$color = isset($_GET['all'])? 'green' : 'crimson';
$aj = range('A','J');
$count = rand (3,10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 017 08-10</title>
</head>
<body style="background: <?= $color ?>">
<?php if (isset($_GET['all'])):?>
    <a href="http://localhost/delfinai/08-10/hwMechanics/task9/checkbox.php">BACK</a>

    <h2> ALL CHECKED: <?= $_GET['all']?>

<?php else : ?>
    <form action="http://localhost/delfinai/08-10/hwMechanics/task9/checkbox.php" method="post">
        <?php foreach(range(1,$count) as $num):?>
                <input type="checkbox" name="c[]"/><?= $aj[$num-1]?>

        <?php endforeach?>
        <button type="submit">SUBMIT</button>
    </form>

    <?php endif ?>

</body>
</html>