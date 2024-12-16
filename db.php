<?php

try {
    $host = '127.0.0.1';
    $db   = 'gaming_gear';
    $user = 'gaming_gear_user';
    $pass = '123456';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES   => false, 
    ];
    $pdo = new PDO($dsn, $user, $pass, $options);

} catch (PDOException  $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    exit;
}

?>