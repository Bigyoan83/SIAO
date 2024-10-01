<?php

include('../Connexion_BDD.php');


$sql = $connexion->prepare("SELECT id, titre, content, nom, date_creation FROM article");

$sql->execute();
$resultat = $sql->get_result();
$row = $resultat->fetch_assoc();


if ($resultat->num_rows > 0) {
    // Afficher les résultats
    while ($row = $resultat->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - titre: " . $row["titre"] . " - content: " . $row["content"] .  " - nom: " . $row["nom"] .  " - date_creation: " . $row["date_creation"] . "<br>";
    }
} else {
    echo "Aucun utilisateur trouvé.";
}

?>