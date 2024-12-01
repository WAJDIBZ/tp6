<?php
ob_start();
?>
<div class="container mt-5">
    <h1 class="text-center">Ajouter une Villa</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-4">
        <div class="mb-3">
            <label for="referance" class="form-label">Réferance</label>
            <input type="text" class="form-control" id="referance" name="referance" required>
        </div>
        <div class="mb-3">
            <label for="proprietaire" class="form-label">Propriétaire</label>
            <input type="text" class="form-control" id="proprietaire" name="proprietaire" required>
        </div>
        <div class="mb-3">
            <label for="localite" class="form-label">Localité</label>
            <input type="text" class="form-control" id="localite" name="localite" required>
        </div>
        <div class="mb-3">
            <label for="nbPieces" class="form-label">Nombre de pièces</label>
            <input type="number" class="form-control" id="nbPieces" name="nbPieces" required>
        </div>
        <div class="mb-3">
            <label for="domaineUsage" class="form-label">Domaine d'Usage</label>
            <select class="form-select" name="domaineUsage" id="domaineUsage" required>
                <option value="Bureau">Bureau</option>
                <option value="Domicile">Domicile</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nb" class="form-label">nombre  d'etages</label>
            <input type="number" step="0.01" class="form-control" id="nb" name="nb">
        </div>
        <button type="submit" class="btn btn-primary" name="ok">Ajouter</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<?php
$titre = "Adding Villa";
$contenu = ob_get_clean();
include "layoutVilla.php";
?>
