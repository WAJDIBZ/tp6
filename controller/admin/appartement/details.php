<?php

$ref = $_GET['ref'];
require_once "../../../model/CRUDAppartement.php";
require_once "../../../model/Appartement.php";
$crud = new CRUDAppartement();
$res = $crud->RecuppererApp($ref);
include "../../../view/admin/appartement/details.php";

