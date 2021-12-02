<?php

$dbHName = getenv('CLOUDSQL_HOST_NAME');
$dbConn = getenv('CLOUDSQL_CONNECTION_NAME');
$dbName = getenv('CLOUDSQL_DATABASE_NAME');
$dbUser = getenv('CLOUDSQL_USER');
$dbPass = getenv('CLOUDSQL_PASSWORD');

$connection = mysqli_connect($dbHName, $dbUser, $dbPass,$dbName,null,$dbConn);

if(!$connection){
  echo "Error!" . mysqli_connect_error();
}else {
  echo "Succces";
}

