<?php

    /**
    * Exercice 1
    * Afficher "Bienvenue chez Sel & Miel" 
    */

    echo "Bienvenue chez Sel & Miel <br> ";
    

    /**
    * Exercice 2
    *   
    *  Afficher "Bienvenue chez Sel & Miel". 
    *  "Sel & Miel" étant contenue dans une variable 
    */

    $resto = "Sel & Miel";
    echo"<br>";
    echo "Bienvenu chez" . $resto ;
    
    
    
    
    /**
     * 
     * Exercice 3 
     * 
     * Afficher la concaténation de variables (chaînes de caractères)
     * Par ex: "Bienvenue" 
     *         "Chez Sel & Miel"
     * 
     * ou 
     * 
     * "Bienvenue"
     * "Chez"
     * "Sel & Miel"
     * 
     *
     *  Le résultat attendu:  "Bienvenue chez Sel & Miel"
     */
        //exemple avec titre <h3></h3> pour retours à la ligne faciles
       
    echo "<h3> Bienvenu </h3>";
    echo "<h3> Chez </h3>";
    echo "<h3> Sel & Miel </h3>";
 

    
    /**
     * 
    * Exercice 4 
    * Afficher le nom d'une crêpe et son prix, en utilisant des variables
    *  exemple: Crêpe aux Fraises: 9 EUR
    */
    $crepe = "Crêpe aux Fraises";
    $pri = 9;


    echo $crepe ." : ".$pri."eur";
   

    /**
     * Exercice 5 
     *  Crêpe aux Fraises: 9 EUR
     *  Crêpe au Sucre: 10 EUR
     *  Crêpe aux oeufs: 20 EUR
     * 
     *   Sachant que les prix ci-dessus sont Hors TVA. 
     *   TVA est 6% 
     *   
     *   Afficher les prix TVA comprise. 
     * 
     */

    $crepefraisebase  = 9;
    $crepesucrebase = 10;
    $crepeoeufsbase = 20;

    $ctvac = 1.06;
    $tvacfraise = $crepefraisebase * $ctvac;
    echo "<br>";
    echo "<h3>Prix TVAC de la crepe fraise est : $tvacfraise eur </h3>";

    
    
    
    
     

    




?>



