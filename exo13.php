<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

//On crée la variables contenant le tableau des notes
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

// On affiche le tableau en utilisant une boucle foreach en reprenant chaque $note du tableau $notes
echo "Les notes obtenues par l'élève sont : ";
foreach ($notes as $note) {
    echo $note . " ";
}
echo "<br>";

//Ici on calcule la moyenne, en utilisant array_sum qui calcule la somme des notes du tableau qui va être divisé par count qui permet de renvoyer le nombre total d'élément dans le tableau (donc ici le total de notes) et on enferme tous cela dans round qui permet d'arrondir le résultat à 2 chiffres en décimales
$moyenne = round(array_sum($notes) / count($notes), 2);

//On affiche la moyenne
echo "Sa moyenne générale est donc de : $moyenne";