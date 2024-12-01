<?php

require_once "../../../model/CRUDVIlla.php";
require_once "../../../model/Villa.php";



if (isset($_GET['ref'])) {
    $crud = new CRUDVilla();
    $reference = $_GET['ref'];
    $villa = $crud->RecuppererVilla($reference);
    include "../../../view/admin/villa/modifyVilla.php";
    

}
else if (isset($_POST['ok'])) {
    $crud = new CRUDVilla();
    $reference = $_POST['reference'];
    $proprietaire = $_POST['proprietaire'];
    $localite = $_POST['localite'];
    $nbPieces = $_POST['nbPieces'];
    $domaineUsage = $_POST['domaineUsage'];
    $nbEtage = $_POST['nbEtage'];
    $villa = new Villa($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $nbEtage);
    $result = $crud->ModifierVilla($villa);
    if ($result) {
        header("Location: listerVilla.php");
        exit();
    } else {
        echo "Failed to modify the villa.";
    }
}
else{
    echo "Failed to modify the villa.";
}






?>