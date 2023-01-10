<?php
/**
 * Objet compte bancaire
 */
class Compte {

    /**
     * contructeur du compte bancaire
     *
     * @param string $nom nom du titulaire
     */
    public function __construct(string $nom,float $montant = 100)
    {
        // on attribue le nom à la propriété titulaire de l'instance crée
        $this->titulaire = $nom; 
        //on attribue le montant à la propriété solde
        $this->solde = $montant
    }

    // Propriétés
    /**
     * titulaire du compte
     *
     * @var string
     */
    public $titulaire;
    /**
     * solde du compte
     *
     * @var [float]
     */
    public $solde;

}