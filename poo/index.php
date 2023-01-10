<?php
require_once 'class/Compte.php';

// on instancie le compte
$compte1 = new Compte('sarah', 500);
// on ecrit dans la propriété titulaire
// $compte1->titulaire = "sarah";
// on ecrit dans la propriété solde
// $compte1-> solde = 500;
var_dump($compte1);

// on dépose 100 euros
$compte1->deposer(100);
$compte1->retirer(-100);

?>

<p><?= $compte1->voirSolde() ?></p>
<?php
// $compte2 = new Compte('lulu');
// $compte2->titulaire = "lulu";
// $compte2->solde = 352.25;

// var_dump($compte2);