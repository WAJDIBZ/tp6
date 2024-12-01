<?php
ob_start();

?>
<div class="container mt-5">
    <table class="table">
        <tr class="table-light">
            <th>Reference</th>
            <th>Proprietaire</th>
            <th>Localite</th>
            <th>Nombre de pieces</th>
            <th>Domaine d'usage</th>
            <th>Nature</th>
            <th>nombre d'étage</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($LesVillas as $val) {
        ?>
            <tr>
                <td><?= $val[0] ?></td>
                <td><?= $val[1] ?></td>
                <td><?= $val[2] ?></td>
                <td><?= $val[3] ?></td>
                <td><?= $val[4] ?></td>
                <td><?= $val[5] ?></td>
                <td><?= $val[6] ?></td>
                <td>
                    <a href="modifyVilla.php?ref=<?= $val[0] ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="deleteVilla.php?ref=<?= $val[0] ?>" class="btn btn-danger btn-sm">Supprimer</a>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Villa List";
include "layoutVilla.php";
?>