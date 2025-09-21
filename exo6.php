<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal.
    Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$nbArticles = 5;
$prixHT = 9.99;
$totalHT = $nbArticles * $prixHT;

// Afficher le total TTC d'une facture
$tauxTVA = 0.2;

$totalTTC = $nbArticles * $prixHT * (1 + $tauxTVA);

echo "Prix unitaire de l'article : $prixHT <br>";
echo "Quantité : $nbArticles <br>";
echo "Taux de TVA : $tauxTVA <br>";
echo "Le montant de la facture à régler est de : $totalTTC €";