<?php

    $Vue->setMenu(new \App\Vue\Vue_Menu_Orage());
    switch ($action) {
        case "defaut":
            $Vue->addToCorps(new \App\Vue\Vue_AccueilOrage());
            break;

        case "calcOrage":
            $ok = true;
            if(isset($_REQUEST["secondes"])){
                if(is_numeric($_REQUEST["secondes"])) {

                }

                else {
                    $ok = false;
                    $msgErreur = "Veuillez renseigner une valeur numériques pour le nombre de seconde";
                }
            }
            else{
                $ok = false;
                $msgErreur = "Veuillez renseigner un nombre de seconde";
            }
            if ($ok) {
                $secondes = $_REQUEST["secondes"];
                $distanceOrage = $secondes /3;
                $Vue->addToCorps(new \App\Vue\Vue_AfficherOrage($distanceOrage));
                     }
            else
            {
                $Vue->addToCorps(new \App\Vue\Vue_AccueilOrage($msgErreur));
            }

            break;
}