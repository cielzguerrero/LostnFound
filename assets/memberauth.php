<?php

$id = $_SESSION['m_id'];

$query = "SELECT * FROM members WHERE m_id = :m_id";
$statement = $conn->prepare($query);
$data = [':m_id' => $id];

$statement->execute($data);
$statement->setFetchMode(PDO::FETCH_OBJ);
$result = $statement->fetch();