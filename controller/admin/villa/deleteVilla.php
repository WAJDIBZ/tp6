<?php
require_once "../../../model/CRUDVilla.php";

if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
    echo "<script>
        var confirmDelete = confirm('Are you sure you want to delete this item?');
        if (confirmDelete) {
            window.location.href = 'deleteVilla.php?confirm=true&ref=$ref';
        } else {
            window.location.href = 'listerVilla.php';
        }
    </script>";
}

if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $ref = $_GET['ref'];
    $crud = new CRUDVilla();
    $res = $crud->SupprimerVilla($ref);
    if ($res) {
        header("location:listerVilla.php");
    } else {
        echo "Probleme de suppression !!";
    }
}
?>
