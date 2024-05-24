<?php

$pdo = new PDO('mysql:host=localhost;dbname=exercise;port=3306;charset=utf8', 'root', 'secret', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

$result = $pdo->query('SELECT * FROM tb_name');
$products = $result->fetchAll();