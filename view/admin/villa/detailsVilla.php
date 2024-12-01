<?php
ob_start();

?>

?>
<table class="table table-striped table-hover">
    <tr>
        <th>Reference</th>
        <th>Proprietaire</th>
        <th>Localite</th>
        <th>Nombre de pieces</th>
        <th>Domaine d'usage</th>
        <th>nombre d'etages</th>
    </tr>
    <tr>
        <td><?php echo $res[0][0]; ?></td>
        <td><?php echo $res[0][1]; ?></td>
        <td><?php echo $res[0][2]; ?></td>
        <td><?php echo $res[0][3]; ?></td>
        <td><?php echo $res[0][4]; ?></td>
        <td><?php echo $res[0][6]; ?></td>
    </tr>
</table>
<a href="../../controller/admin/listerVilla.php" class="btn btn-primary">Retour</a>





    
<?php
$titre = "Details";
$contenu = ob_get_clean();
include "layoutVilla.php";
?>
    
    
