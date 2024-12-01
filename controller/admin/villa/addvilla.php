
<?php


if (isset($_POST['ok'])) {
    require_once "../../../model/CRUDVilla.php";
    require_once "../../../model/Villa.php";
    $referance = $_POST['referance'];
    $proprietaire = $_POST['proprietaire'];
    $localite = $_POST['localite'];
    $nbPieces = $_POST['nbPieces'];
    $domaineUsage = $_POST['domaineUsage'];
    $nb = $_POST['nb'];

    $crud = new CRUDVilla();
    $villa = new Villa($referance, $proprietaire, $localite, $nbPieces, $domaineUsage, $nb);
    $result = $crud->AjouterVilla($villa);

    if ($result) {
        header("Location: listerVilla.php");
        exit();
    } else {
        echo "Failed to add the villa.";
    }
}
include "../../../view/admin/villa/addVilla.php";
?>

