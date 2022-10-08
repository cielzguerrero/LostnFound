<?php

$id = $_SESSION['id'];

$query = "SELECT * FROM users WHERE id = :id";
$statement = $conn->prepare($query);
$data = [':id' => $id];

$statement->execute($data);
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetch();