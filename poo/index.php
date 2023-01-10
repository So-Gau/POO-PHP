<?php
require_once 'class/Compte.php';

// on instancie le compte
$compte1 = new Compte('sarah');
// on ecrit dans la propriété titulaire
// $compte1->titulaire = "sarah";
// on ecrit dans la propriété solde
$compte1-> solde = 500;

var_dump($compte1);

$compte2 = new Compte('lulu');
// $compte2->titulaire = "lulu";
$compte2->solde = 352.25;

 var_dump($compte2);