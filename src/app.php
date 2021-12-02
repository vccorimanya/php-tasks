<?php

$dbConn = getenv('CLOUDSQL_CONNECTION_NAME');
$dbName = getenv('CLOUDSQL_DATABASE_NAME');
$dbUser = getenv('CLOUDSQL_USER');
$dbPass = getenv('CLOUDSQL_PASSWORD');

$connection = mysqli_connect($dbConn, $dbUser, $dbPass,$dbName);

if(!$connection){
  echo "Error!" .mysqli_connect_error();
}else {
  echo "Succces";
}

