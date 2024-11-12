<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AjouterMaTable extends Vue_Composant
{
    private string $msgErreur;

    public function __construct( string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Ajouter un enregistrement</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'> 
<form>
    <table> 
        <tr> <td>id</td><td>Automatique !</td> </tr>
         <tr>    <td>champ1</td><td> <input type='text' name='champ1'> </td></tr>
        <tr>     <td>champ2</td> <td> <input type='text' name='champ2'> </td></tr>
    </table>
    <input type='hidden' name='case' value ='maTable'>
    <button type='submit' name = 'action' value='enregistrerAjouter'> Ajouter !!</button>
    </form>
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}