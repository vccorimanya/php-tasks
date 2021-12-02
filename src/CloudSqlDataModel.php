<?php

$statement = $pdo->prepare('SELECT * FROM users');
$statement->bindValue('id', $id, PDO::PARAM_INT);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);

echo "$result";