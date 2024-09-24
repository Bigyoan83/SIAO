<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$nomBaseDeDonnees = "mon_site_web";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

// Requête SQL pour récupérer les utilisateurs
$sql = "SELECT id, nom, email FROM utilisateurs";
$resultat = $connexion->query($sql);

if ($resultat->num_rows > 0) {
    // Afficher les résultats
    while ($row = $resultat->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nom: " . $row["nom"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Aucun utilisateur trouvé.";
}

// Fermer la connexion
$connexion->close();
?>
