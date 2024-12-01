<?php
require_once "../../../model/CRUDVilla.php";
$crud = new CRUDVilla();
$LesVillas = $crud->ListerVilla();
include "../../../view/admin/villa/indexVilla.php";
?>