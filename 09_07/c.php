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
$sql = "SELECT *
        FROM clients
        RIGHT JOIN phones
        ON clients.id = phones.client
    ";




$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();

echo"<pre>";
print_r($data);
