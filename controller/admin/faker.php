<?php
require_once "../../model/config.php";
$connexion = new connexion();
$pdo = $connexion->getConnexion();
$pdo->exec("DELETE FROM immobilier");
$sql = "";

$proprietaires = ["Alice Johnson", "Bob Smith", "Charlie Brown", "Diana Prince"];
$localites = ["New York", "Los Angeles", "Chicago", "Houston", "Phoenix", "Philadelphia", "San Antonio", "San Diego", "Dallas", "San Jose"];
$domaineUsages = ["bureau", "domicile"];
$nature = ["Appartement", "Villa"];

for ($i = 1; $i < 110; $i++) {
    $ref = "$i";
    $prop = $proprietaires[array_rand($proprietaires)];
    $loc = $localites[array_rand($localites)];
    $nb = rand(1, 10);
    $dom = $domaineUsages[array_rand($domaineUsages)];
    $nat = $nature[array_rand($nature)];
    $sc = rand(1, 100) + rand(0, 99) / 100;
    if ($nat == "Appartement") {
        $sql .= "INSERT INTO immobilier (reference, proprietaire, localite, nbPieces, domaineUsage, nature, nbEtage, surfaceCommune) VALUES ('$ref', '$prop', '$loc', $nb, '$dom', '$nat', NULL, $sc);";
    } else {
        $ne = rand(1, 3);
        $sql .= "INSERT INTO immobilier (reference, proprietaire, localite, nbPieces, domaineUsage, nature, nbEtage, surfaceCommune) VALUES ('$ref', '$prop', '$loc', $nb, '$dom', '$nat', $ne, NULL);";
    }
}

$res = $pdo->exec($sql);
if ($res) {
    echo "success";
} else {
    echo "failed";
}
?>
