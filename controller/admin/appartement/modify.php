<?php

require_once "../../../model/CRUDAppartement.php";
require_once "../../../model/Appartement.php";



if (isset($_GET['ref'])) {
    $crud = new CRUDAppartement();
    $reference = $_GET['ref'];
    $app = $crud->RecuppererApp($reference);
    include "../../../view/admin/appartement/modify.php";

}



else{
if (isset($_POST['ok'])) {
    $crud = new CRUDAppartement();
    $reference = $_POST['reference'];
    $proprietaire = $_POST['proprietaire'];
    $localite = $_POST['localite'];
    $nbPieces = $_POST['nbPieces'];
    $domaineUsage = $_POST['domaineUsage'];
    $surfaceCommune = $_POST['surfaceCommune'];

    $appartement = new Appartement($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $surfaceCommune);
    $result = $crud->ModifierApp($appartement);
    if ($result) {
        header("Location: lister.php");
        exit();
    } else {
        echo "Failed to modify the apartment.";
    }
}
}
?>