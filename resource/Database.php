<?php

$username = 'root';
$password = 'edekiedith';
$dsn = 'mysql:host=localhost;dbname=register';

try {
    $db = new PDO($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the register database";
} catch (PDOException $exn) {
    echo "Connection failed" . " because " . $exn->getMessage();
}
