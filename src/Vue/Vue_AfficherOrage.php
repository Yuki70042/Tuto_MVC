<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AfficherOrage extends Vue_Composant
{
    private int|float $imc;
    /**
     * @var mixed|string
     */
    private mixed $msgErreur;

    /**
     * @param float|int $imc
     */
    public function __construct($distanceOrage, $msgErreur="")
    {
        $this->distanceOrage = $distanceOrage;
        $this->msgErreur = $msgErreur;
    }

    public function donneTexte(): string
    {
        $str="
        <p>La distance entre vous et l'orage est de : $this->distanceOrage km</p>
        ";
        return $str;
    }

}