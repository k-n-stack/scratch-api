<?php

require_once('DatabaseConnection.model.php');

$test = DatabaseConnection::getInstance();

echo print_r($test, true);

$stmt = $test->prepare("INSERT INTO PRODUIT (nom, images, categorie, prix) VALUES (:nom, :images, :categorie, :prix)");
$stmt->bindParam(':nom', $name);
$stmt->bindParam(':images', $image);
$stmt->bindParam(':categorie', $categorie);
$stmt->bindParam(':prix', $prix);

$name = 'test';
$image = 'image';
$categorie = 'cat';
$prix = 20;


$stmt->execute();