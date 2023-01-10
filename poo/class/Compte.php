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
   
    /**
     * return une chaine de caractère affichant le solde
     *
     * @return string
     */
    public function voirSolde() {
        return "le solde du compte est de $this->solde euros ";
    }

    /**
     * retire un montant du solde du compte
     *
     * @param float $montant à retirer
     * @return void
     */
    public function retirer(float $montant) 
    {
        // on verifie le montant et le sodle
        if($montant > 0 && $this->solde >= $montant)  {
            $this->solde -= $montant;
        }else{
            echo "montant invalide ou solde insuffisant";
        }
    }
}