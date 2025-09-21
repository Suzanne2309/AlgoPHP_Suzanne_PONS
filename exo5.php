<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<h2>Résultat</h2>

<?php

$francs = 100;
$euroEnFrancs = 6.55957;
$resultat = round($francs / $euroEnFrancs, 2);
echo "Montant en Francs = 100 <br>";
echo "100 Francs = $resultat €";
