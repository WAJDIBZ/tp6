<?php
ob_start();


?>
<div class="container mt-5">
    
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-4">
        <input type="hidden" name="reference" value="<?= $villa[0][0] ?>">
        <div class="mb-3">
            <label for="proprietaire" class="form-label">Propriétaire</label>
            <input type="text" class="form-control" id="proprietaire" name="proprietaire" value="<?= $villa[0][1] ?>" required>
        </div>
        <div class="mb-3">
            <label for="localite" class="form-label">Localité</label>
            <input type="text" class="form-control" id="localite" name="localite" value="<?= $villa[0][2] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nbPieces" class="form-label">Nombre de pièces</label>
            <input type="number" class="form-control" id="nbPieces" name="nbPieces" value="<?= $villa[0][3] ?>" required>
        </div>
        <div class="mb-3">
            <label for="domaineUsage" class="form-label">Domaine d'usage</label>
            <input type="text" class="form-control" id="domaineUsage" name="domaineUsage" value="<?= $villa[0][4] ?>" required>
        </div>
        <div class="mb-3">
            <label for="surfaceCommune" class="form-label">Surface Commune</label>
            <input type="number" step="0.01" class="form-control" id="surfaceCommune" name="nbEtage" value="<?= $villa[0][6] ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="ok">Modifier</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<?php
$titre = "Modify Appartement";
$contenu = ob_get_clean();
include "layoutVilla.php";
?>