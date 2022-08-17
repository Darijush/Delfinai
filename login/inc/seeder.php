<?php
$users = [
    ['name' => 'bebras', 'pass' => md5('123')],['name' => 'briedis', 'pass' => md5('123')],
];
file_put_contents('users.json',json_encode($users));