<?php
//permet de se connecter a la bdd
$serveur = "localhost";
$utilisateur = "root";
<<<<<<< Updated upstream
$motDePasse = "";
=======
$motDePasse = "root";
>>>>>>> Stashed changes
$nomBaseDeDonnees = "mon_site_web";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);
if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

?>