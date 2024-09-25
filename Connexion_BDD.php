<?php
//permet de se connecter a la bdd
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "toor";
$nomBaseDeDonnees = "mon_site_web";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);
include('../connexion.php');
if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

?>