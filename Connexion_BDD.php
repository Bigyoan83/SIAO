<?php
//permet de se connecter a la bdd
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$nomBaseDeDonnees = "mon_site_web";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);
if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

?>