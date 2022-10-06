<?php

/**
 *  Exercice 1
 * 
 * Sel et Miel dispose de 10 Places numérotées de 1 à 10. 
 * A l'aide d'une boucle
 *  
 * Afficher la liste des tables :
 * - Place 1 
 * - Place 2
 * - ...
 * - Place 10 
 * 
 * 
 * Utilisez les boucles: while et for
 *  
 *   while (...) {
 *      affiche numéro 
 *    }
 * 
 *   for(...) {}

 */
echo "<p> boucle while </p>";
$chiffre = 1;
while ($chiffre <=10) {
    if ($chiffre % 2 == 1){
        echo "place  $chiffre dans la table vip  <br> ";
    }

    
    else{

        echo "place  $chiffre dans la table norma <br>";  
    }

    $chiffre = $chiffre +1;


}


 


/**
 * Exerice 1.a 
 *  Implémenter un comptage jusqu'à 10, à l'aide d'une boucle
 *    while
 *    for 
 *
 */

echo "boucle for ";
for( $nbr = 1 ;$nbr <=10 ;$nbr++){
    echo "<p> $nbr </p>";
}



/**
* Exercice 1.b
*   Afficher les numéros d'étage d'un immeuble de 20 étages.
*   en utilisant une boucle 
*       - for 
*       - while 
*/

 
