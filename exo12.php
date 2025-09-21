<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), 
    dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.</p>

<h2>Résultat</h2>

<?php

//On crée un tableau associatif prénom et langue
$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

//On crée la fonction utilisant un switch pour choisir la salutation en fonction de la langue
function direBonjour($prenom, $langue) {
    switch ($langue) {
        case "FRA":
            $salutation = "Salut";
            break;
        case "ENG":
            $salutation = "Hello";
            break;
        case "ESP":
            $salutation = "Hola";
            break;
        default:
            $salutation = "Bonjour";
    }
    echo "$salutation $prenom<br>";
};

//On utilise ksort pour trier le tableau par ordre alphabétique des prénoms
ksort($personnes);

//On utilise une boucle foreach pour parcourir le tableau et utiliser la bonne salutation par prénom
foreach ($personnes as $prenom => $langue) {
    direBonjour($prenom, $langue);
};