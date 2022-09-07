<?php

$host = '127.0.0.1';
$db   = 'del_finai';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql="DELETE FROM trees WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['id']]);
    header('Location: http://localhost/delfinai/09_07/index.php');
    die;
};
$sql = "SELECT id, type, height, title FROM trees ";
//WHERE (type=2 OR type=3)AND (height<12) AND title ='pusis'//WHERE type<>1 ORDER BY height DESC,type ASC LIMIT 2
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();
?>
<ul>
    <?php foreach ($data as $t) : ?>
        <li> ID: <?= $t['id'] ?> Type: <?= ['Lapuotis', 'Spygliuotis', 'Palme'][$t['type'] - 1] ?> Height: <?= $t['height'] ?> ID: <?= $t['title'] ?>

        </li>

    <?php endforeach ?>
</ul>

<form action="" method="post">
    ID <input type="text" name="id"></br></br>
    <button type="submit">DELETE</button>
</form>

