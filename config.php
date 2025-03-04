<?php

$host = '   ';

$dbname = '  ';

$db_username = '  ';

$password = '  ';



try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $db_username, $password, [

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

        PDO::ATTR_EMULATE_PREPARES => false

    ]);

} catch (PDOException $e) {

    die("Database connection failed: " . $e->getMessage());

}

?>

