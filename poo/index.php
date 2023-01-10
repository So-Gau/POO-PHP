<?php
require_once 'class/Compte.php';

// on instancie le compte
$compte1 = new compte;
// on ecrit dans la propriété titulaire
$compte1->titutlaire = "sarah";
// on ecrit dans la propriété solde
$compte1-> solde = 500;

var_dump($compte1);

$compte2 = new compte;
$compte2->titutlaire = "lulu";
$compte2->solde = 352.25;

 var_dump($compte2);