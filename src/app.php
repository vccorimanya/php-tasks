<?php

$dbConn = getenv('CLOUDSQL_CONNECTION_NAME');
$dbName = getenv('CLOUDSQL_DATABASE_NAME');
$dbUser = getenv('CLOUDSQL_USER');
$dbPass = getenv('CLOUDSQL_PASSWORD');


$pdo = new PDO($dbConn, $dbUser, $dbPass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

