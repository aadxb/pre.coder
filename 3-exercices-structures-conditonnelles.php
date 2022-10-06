<?php




   /**
      * Exercice 6
      * 
      *  Crêpes Sucre: 10 eur
      *  Crêpe Mikado : 15 eur (réduction)
      *  Crêpe Chocolat: 21 eur (réduction)
      *  
      *  Afficher un message de "Réduction" à côté 
      * des crêpes de prix impair
      */
   $cresucre = 10;
   if ($cresucre % 2 == 1){
      echo "crepes sucre : $cresucre eur (reduction) ";
   } else {
      echo "crepes sucre : $cresucre eur";
   }

   echo "<p></p>";
   $mikado = 15;
   if ($mikado % 2 == 1){
      echo "crepes mikado : $mikado eur (reduction) ";
   }else {
      echo "crepes mikado : $mikado eur";
   }

   echo "<p></p>";
   $choc = 21;
   if ($choc % 2 == 1){
      echo "crepes chocolat : $choc eur (reduction) ";
   }else {
      echo "crepes chocolat : $choc eur";
   }
     


    /**
     * 
     * Un nombre impair est un nombre dont le reste de la division entière est égale à 1.
     *  X est impair si X = (y*2) + 1. Exemple: 5/2 = (2*2) + 1
     * Le modulo % est une opération qui va renvoyer le reste.
     *  Ici,dans l'exemple, avec 5/2, il renverrait 1.
     */

    



  /**Exercice 7
       *  Soit l'assocation suivante: 
       *  
       *  
       *  A -> Table 1
       *  B -> Table 2 
       *  C -> Table 3
       *  D -> Table 4
       *  E -> Table 5
       * 
       * A l'aide d'une instruction "Switch",
       *  construisez
       * les associations ci-dessus de sorte que: 
       * 
       *  Exemple: 
       * $lettre='A';
       * switch($lettre){
       *    case 'A' : echo "Table 1"; 
       *                break ;
       
       
       */
echo "<br>";
      $lettre = 'N';
      switch($lettre){
         case 'A': echo "Tabdel 1 ";
                           break;
      
         case 'B': echo "Tabdel 2 ";
                           break;
         case 'C': echo "Tabdel 3 ";
                           break;




       }









?>
