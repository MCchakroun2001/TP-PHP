<?php

require_once 'Article.php';
require_once 'Fournisseur.php';




$id = isset($_POST['id']) ? $_POST['id'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prix = isset($_POST['prix']) ? $_POST['prix'] : '';
$stock = isset($_POST['stock']) ? $_POST['stock'] : '';


$article = new Article($id, $nom, $prix, $stock);


echo "ID: {$article->id}, Nom: {$article->nom}, Prix: {$article->prix}, Stock: {$article->stock}";
?>
