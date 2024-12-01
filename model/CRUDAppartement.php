<?php
include_once 'config.php';
include_once 'Immobilier.php';
class CRUDAppartement
{
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
   
function AjouterApp(Appartement $appartement)
{
    $sql = "INSERT INTO immobilier (reference, proprietaire, localite, nbPieces, domaineUsage, nature, nbEtage, surfaceCommune) VALUES ('$appartement->reference', '$appartement->proprietaire', '$appartement->localite', $appartement->nbPieces, '$appartement->domaineUsage', 'Appartement', NULL, $appartement->surfaceCommune)";
    $res = $this->pdo->exec($sql);
    return $res;
}

    function RecuppererApp($reference)
    {
        $sql = "SELECT * FROM immobilier WHERE reference=$reference";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function ModifierApp(Appartement $appartement)
    {
        $sql = "UPDATE immobilier SET proprietaire='$appartement->proprietaire',localite='$appartement->localite',nbPieces=$appartement->nbPieces,domaineUsage='$appartement->domaineUsage',surfaceCommune=$appartement->surfaceCommune WHERE reference=$appartement->reference";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function SupprimerApp($reference)
    {
        
        $sql = "DELETE FROM immobilier WHERE reference=$reference";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function ListerApp()
    {
        $sql = "SELECT * FROM immobilier WHERE Nature='Appartement'";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
