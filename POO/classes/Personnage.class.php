<?php

class Personnage{
    public $nom;
    public $prenom;
    public $age;
    public $sexe;

public function __construct($nom, $prenom, $age, $sexe){
$this->nom = $nom;
$this->prenom = $prenom;
$this->age = $age;
$this->sexe = $sexe;
}

public function presentation($nom, $prenom, $age, $sexe){
var_dump("$this->nom $this->prenom $this->sexe $this->age")
}

}
$obj1 = new Personnage();

$obj1->presentation();

?>