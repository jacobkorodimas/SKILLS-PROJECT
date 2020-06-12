<?php
    // $host = 'ispconfig-database.sirkit.ca';
    // $user = 'dbu94_fcbhm';
    // $password = 'QEW2@ncqmMw2';
    // $dbname = 'db94_fcbhm';

    $host = 'localhost';
    $user = 'jacob';
    $password = '1234';
    $dbname = 'rapid_air';

    //Set DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

    // Options
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    //PDO instance
    global $pdo;
    $pdo = new PDO($dsn, $user, $password, $options);
?>