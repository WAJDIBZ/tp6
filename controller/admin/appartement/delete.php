<?php
require_once "../../../model/CRUDAppartement.php";

if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
    echo "<script>
        var confirmDelete = confirm('Are you sure you want to delete this item?');
        if (confirmDelete) {
            window.location.href = 'delete.php?confirm=true&ref=$ref';
        } else {
            window.location.href = 'lister.php';
        }
    </script>";
}

if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $ref = $_GET['ref'];
    $crud = new CRUDAppartement();
    $res = $crud->SupprimerApp($ref);
    if ($res) {
        header("location:lister.php");
    } else {
        echo "Probleme de suppression !!";
    }
}
?>
