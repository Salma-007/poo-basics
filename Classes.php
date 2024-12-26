<?php

class Voiture{
    public $matricule;
    private $couleur ;

    public function check($colors){
        $tab = ['bleu','rouge','vert'];
        if(in_array($colors, $tab)){
            echo'its in';
        }
        else{
            echo 'its not';
        }
    }
    public function getCouleur(){
        return $this->couleur;
    }
    public function __construct($mtr, $clr){
        $this->matricule = $mtr;
        $this->couleur = $clr;
    }
    public function nomMatrcicule(){
        echo 'le nom du matricule est : ' .$this->matricule;
    }
    public function voitureColor(){
        echo 'la couleur du voiture est : ' .$this->couleur;
    }

}

$mercedes = new Voiture('B555','bleu');
// $mercedes->matricule = 'A1230';
$mercedes->check('pink');
// $mercedes->voitureColor();
// $mercedes->nomMatrcicule();




?>