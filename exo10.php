<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat,
    écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php
//Les donées / variables
$montant_a_payer = 152;
$montant_verse = 200;
// le calcul de monnaie
$resultat = $montant_verse - $montant_a_payer;
//affichage des donneés
echo "Montant à payer : $montant_a_payer €<br>";
echo "Montant versé : $montant_verse €<br>";
echo "Reste à payer : $resultat €<br>";
echo "***************************************************<br>";
echo "Rendu de monnaie :<br>";
//Tableau pour les billets/pièces
$billets_10 = intdiv($resultat, 10);  // intdiv permet d'avoir une division qui donne un résultat entier (ignore les decimales), et en combinaison avec % permet d'enchainer les division sur les restes
$reste = $resultat % 10;

$billets_5 = intdiv($reste, 5);
$reste = $reste % 5;
//Ici, on ne mettra pas reste comme variable, car ce qui reste sera forcément les pièces de 1€ donc on en fait la variable
$pieces_2 = intdiv($reste, 2);
$pieces_1 = $reste % 2;

echo "$billets_10 billets de 10 € - $billets_5 billet(s) de 5 € - $pieces_2 pièce(s) de 2 € - $pieces_1 pièce(s) de 1 €";