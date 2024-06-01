<?php

try {
    echo 'APP-2 Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'simpledb';
    $user = 'simpleuser';
    $pass = 'simplepass';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
