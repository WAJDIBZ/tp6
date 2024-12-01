
<?php
include "../../../view/admin/appartement/add.php";
if (isset($_POST['ok'])) {
    require_once "../../../model/CRUDAppartement.php";
    require_once "../../../model/Appartement.php";
    $referance = $_POST['referance'];
    $proprietaire = $_POST['proprietaire'];
    $localite = $_POST['localite'];
    $nbPieces = $_POST['nbPieces'];
    $domaineUsage = $_POST['domaineUsage'];
    $surfaceCommune = $_POST['surfaceCommune'];

    $crud = new CRUDAppartement();
    $appartement = new Appartement($referance, $proprietaire, $localite, $nbPieces, $domaineUsage, $surfaceCommune);
    $result = $crud->AjouterApp($appartement);

    if ($result) {
        header("Location: lister.php");
        exit();
    } else {
        echo "Failed to add the appartement.";
    }
}
?>
