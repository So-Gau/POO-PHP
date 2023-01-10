<?php
/**
 * Objet compte bancaire
 */
class Compte {

    /**
     * contructeur du compte bancaire
     *
     * @param string $nom nom du titulaire
     * @param float $montant du solde
     */
    public function __construct(string $nom,float $montant = 100)
    {
        // on attribue le nom à la propriété titulaire de l'instance crée
        $this->titulaire = $nom; 
        //on attribue le montant à la propriété solde
        $this->solde = $montant;
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

    /**
     * Déposer de l'argent sur le compte
     *
     * @param float $montant montant depose
     * @return void
     */
    public function deposer(float $montant) {
        // on verifie si le montant est positif
        if($montant > 0){
            $this->solde += $montant;
        }
    }
}