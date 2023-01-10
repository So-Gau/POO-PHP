<?php
require_once 'class/Compte.php';

// on instancie le compte
$compte1 = new compte;
// on ecrit dans la propriété titulaire
$compte1->titutlaire = "sarah";

var_dump($compte1);

$compte2 = new compte;
$compte2->titutlaire = "lulu";
 var_dump($compte2);