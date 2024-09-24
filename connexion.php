<?php
$serveur = "localhost";
$utilisateur = "root";  
$motDePasse = "";     
$nomBaseDeDonnees = "mon_site_web";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}
?>