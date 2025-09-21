<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre. Remarque : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php

//Boucle for permet d'avoir toutes les informations sur une ligne 
$nombre = 8; //saisie de la donnée nombre

echo "Table de $nombre avec la boucle for :<br>"; //phrase qui s'affichera avec la valeur nombre
//permet d'écrire en une seule ligne les informations du tableau () pui sle calcul
for ($i = 1; $i <= 10; $i++) {
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat<br>";
};

//Boucle while
echo "Table de $nombre avec la boucle while :<br>";
//On coupe plus en étpaes, (valeur i inférieur ou égale à 10) puis après l'affichage du tableau l'ajout de ligne (1++ donc à chaque ligne/boucle i+1)
$i = 1;
while ($i <= 10) {
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat<br>";
    $i++;
};