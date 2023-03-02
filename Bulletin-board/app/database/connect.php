<?php

$user = "root";
$pass = "root";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=2chab-bbs2', $user, $pass);
} catch (PDOException $error) {
    echo $error->getMessage();
}
