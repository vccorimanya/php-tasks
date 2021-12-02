<?php

$dbConn = 'CLOUDSQL_CONNECTION_NAME';
$dbName = 'CLOUDSQL_DATABASE_NAME';
$dbUser = 'CLOUDSQL_USER';
$dbPass = 'CLOUDSQL_PASSWORD';

$dsn = "mysql:unix_socket=/cloudsql/${dbConn};dbname=${dbName}";

$pdo = new PDO($dsn, $dbUser, $dbPass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
