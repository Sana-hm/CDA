<?php
    function calcul($tab) {

        $resultat = 0;
        foreach($tab as $chiffre) {
            $resultat += $chiffre;
        }
        return $resultat;
    }
    $tab = array(4, 3, 8, 2);
?>