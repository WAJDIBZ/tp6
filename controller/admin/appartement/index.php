<?php
require_once "../../../model/CRUDAppartement.php";
$crud = new CRUDAppartement();
$LesAppartements = $crud->ListerApp();
include "../../../view/admin/appartement/index.php";
?>