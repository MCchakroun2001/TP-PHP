<?php

$article = new Article(1, 'Article A', 20.0, 50);

$fournisseur = new Fournisseur(101, 'Fournisseur XYZ');

echo "Article : {$article->id}, {$article->nom}, {$article->prix}<br>";

echo "Fournisseur : {$fournisseur->id}, {$fournisseur->nom}<br>";


?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Stock</th>
    </tr>
    <?php echo $article; ?>
</table>

<select>
    <?php echo $fournisseur; ?>
</select>


?>