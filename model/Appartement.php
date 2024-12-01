<?php
class Appartement extends Immobilier
{
    public $surfaceCommune;
    public function __construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $surfaceCommune)
    {
        parent::__construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage);
        $this->surfaceCommune = $surfaceCommune;
    }
    /**
     * Get the value of surfaceCommune
     */
    public function getSurfaceCommune() {
        return $this->surfaceCommune;
    }
    /**
     * Set the value of surfaceCommune
     */
    public function setSurfaceCommune($surfaceCommune) {
        $this->surfaceCommune = $surfaceCommune;
        return $this;
    }
    public function __set($name,$value){
        $this->$name=$value;
    }
    public function __get($name){
        return $this->$name;
    }

}
?>
