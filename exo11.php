<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne).
    Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php

//On crée la variable marques qui contient toutes les chaines de charactères (string) des différentes marques
$marques = ["Peugeot", "Renault", "BMW", "Mercedes", "Porche", "Ferrari", "Opel", "Audi"];

//On affiche le nombre de marques présent dans le tableau et annoncer le tableau
echo "Il y a " . count($marques) . " marques de voitures dans le tableau :<br>";

//On utilise une liste à puces (html ul et li) dans une boucle for
echo "<ul>";
//On donne une valeur de 0 à la variable i, puis on indique que i ne peut pas dépaser le nombre de marque et que i monte de 1 à chaque nouvelles boucle/ligne
for ($i = 0; $i < count($marques); $i++) {
    echo "<li>" . $marques[$i] . "</li>";
};
echo "</ul>";