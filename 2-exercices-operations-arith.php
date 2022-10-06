<?php

/**
 * Exercice 1 
 * 
 * Sachant qu'à Interface3, il y a des formations différentes. 
 * Quelques exemples de formations avec leur nombre de stagiaires (nombre fictif) 
 *  
 *   WEB : 18
 *   WAD : 15
 *   Unity: 15
 *   ASR : 20 
 * 
 *   Calculer et afficher le total de stagiaires pour ces formations 
 */

$WEB = 18;
$WAD  = 15;
$Unity = 15;
$ASR = 20;

$tot = $WEB+$WAD+$Unity+$ASR;

echo "web = $WEB <br>";
echo "wad = $WAD <br>";
echo "unity = $Unity<br>";
echo "asr = $ASR<br>";
echo "<p> Le nombre de stagaire est : $tot</p>";



 /**
 * Exercice 2 
 * 
 *  Vous fêtez un anniversaire. 
 *  Pour allumer les bougies du gâteau, vous utilisez 3 allumettes d'une boîte de 50. 
 *  
 *  1. Calculer et afficher le nombre qu'il reste. 
 *  
 *  2. Et si votre boîte d'allumettes en contenait 120 ?
 *     Utilisez la puissance de flexbililité des variables 
 * 
 */


$bougie = 120;
$utilise = 3;
$reste = $bougie-$utilise;

echo "le reste : $reste ";



 /**
 * Exercice 3
 * 
 *  Interface3 dispose de 10 salles de cours. 
 *  Combien faudrait-il de stagiaires par classe, s'il y 210 stagiaires inscrites?  
 *  
 *  Calculer et afficher ce nombre
 * 
 */
$salle = 10;
$stagaire = 210;
$dispo = $stagaire/$salle;


echo "<p> il faut : $dispo pars salle </p>";


 
 /**
 * Exercice 4
 * 
 *  Vous êtes sorties entre  copines (5 au total), avaient mangé des pizzas, pour 12,56 EUR chacune. 
 *  Combien sera l'addition ? 
 *  Calculez et afficher ce nombre 
 */
$cop = 5;
$pizza = 12.56;
$prix = $cop*$pizza;

echo "<p>l'ddition est de : $prix eur</p>";
  

 /**
 * Exercice 5
 * 
 *  Calculer et afficher le reste de la division de 25 par 3. 
 *  Indice : utilisez l'opération modulo 
 * 
 * 
 *  
 */
$grand = 25;
$petit = 3;
$divi = $grand % $petit;

echo "<p> <h2>le reste de la division est :$divi </h2></p>";


?>