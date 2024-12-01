<?php

$ref = $_GET['ref'];
require_once "../../../model/CRUDVilla.php";
require_once "../../../model/Villa.php";
$crud = new CRUDVilla();
$res = $crud->RecuppererVilla($ref);
include "../../../view/admin/villa/detailsvilla.php";

    
    
