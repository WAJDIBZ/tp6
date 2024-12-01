<?php
class Villa extends Immobilier
{
   public $nbEtage;
    public function __construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $nbEtage)
    {
        parent::__construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage);
        $this->nbEtage = $nbEtage;
    }
    /**
     * Get the value of nbEtage
     */
    public function getNbEtage() {
        return $this->nbEtage;
    }
    /**
     * Set the value of nbEtage
     */
    public function setNbEtage($nbEtage) {
        $this->nbEtage = $nbEtage;
        return $this;
    }
    
}
?>