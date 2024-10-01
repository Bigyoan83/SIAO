<?php
if ($resultat->num_rows > 0) {
    // Afficher les résultats
    while ($row = $resultat->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nom: " . $row["nom"] . " - Email: " . $row["email"] .  " - Nom: " . $row["mot_de_passe"] . "<br>";
    }
} else {
    echo "Aucun utilisateur trouvé.";
}

?>