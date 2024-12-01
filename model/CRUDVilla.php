<?php
include_once 'config.php';
include_once 'Immobilier.php';

class CRUDVilla{
    private $pdo;
    function __construct()
    {
        try {
            $con = new connexion();
            $this->pdo = $con->getConnexion();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function AjouterVilla(Villa $villa)
    {
        $sql = "INSERT INTO immobilier (reference, proprietaire, localite, nbPieces, domaineUsage, nature, nbEtage, surfaceCommune) VALUES ('$villa->reference', '$villa->proprietaire', '$villa->localite', $villa->nbPieces, '$villa->domaineUsage', 'Villa', $villa->nbEtage, NULL)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function RecuppererVilla($reference)
    {
        $sql = "SELECT * FROM immobilier WHERE reference=$reference and nature='Villa'";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function ModifierVilla(Villa $villa)
    {
        $sql = "UPDATE immobilier SET proprietaire='$villa->proprietaire', localite='$villa->localite', nbPieces=$villa->nbPieces, domaineUsage='$villa->domaineUsage', nbEtage=$villa->nbEtage WHERE reference=$villa->reference AND nature='Villa'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function SupprimerVilla($reference)
    {
        $sql = "DELETE FROM immobilier WHERE reference=$reference and nature='Villa'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ListerVilla()
    {
        $sql = "SELECT * FROM immobilier WHERE nature='Villa'";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    
}