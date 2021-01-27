<?php

class Employe{

public $nom;
public $prenom;
public $dateEmb;
public $poste;
public $sal_ann;
public $service;

public function __construct($nom, $prenom, $dateEmb, $poste, $sal_ann, $service){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateEmb = $dateEmb;
    $this->poste = $poste;
    $this->sal_ann = $sal_ann;
    $this->service = $service;
}

public function experience($dateEmb){
   $experS = time() - strtotime($dateEmb);
   $exper = ((($experS/60)/60)/24)/365;
   echo 'Employe est dans l’entreprise depuis '.round($exper).' annees.';
   //echo date('Y-m-d H:i:s');
}
}
$Employe1 = new Employe('ivan', 'dorn', '2017-10-27 14:00:00', 'directeur', '10000', 'chef');
$Employe1->experience('2017-10-27 14:00:00');

?>