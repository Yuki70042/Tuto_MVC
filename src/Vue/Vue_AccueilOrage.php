<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AccueilOrage extends Vue_Composant
{

    private string $msgErreur;
    public function __construct(string $msgErreur="")
    {
        $this->msgErreur = $msgErreur;
    }

    public function donneTexte(): string
    {
        $str="
        <h1>Calcul de la distance vous séparant de l'Orage</h1>
        <form>
            <input type='hidden' name='case' value='Orage'>
            
            <p> Combien comptez-vous de seconde après l'apparition de l'éclair?</p>
            <label for='secondes'>Seconde</label>
            <input type='number' name='secondes' id='secondes'>
            
            <button type='submit' name='action' value='calcOrage'>
                Calculer la Distance
            </button>
            
 
             <p>$this->msgErreur</p>
        
        </form>
        ";
        return $str;
    }
}