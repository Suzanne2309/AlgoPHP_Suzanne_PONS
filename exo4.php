<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$inverse = strrev($phrase);

    if($phrase == $inverse) {
        echo "La phrase $phrase est un palindrome";
    } else {
       echo "la phrase $phrase n'est pas un palindrome";
    };

?>