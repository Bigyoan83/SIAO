<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$nomBaseDeDonnees = "mon_site_web";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}
// Requête SQL pour récupérer les utilisateurs
$email = 'jeff@gmail.com';
$sql = "SELECT id, nom, mot_de_passe , email FROM utilisateur WHERE email = 'jeff@gmail.com'";

$resultat = $connexion->query($sql);
if ($resultat->num_rows > 0) {
    if($_POST['email'] == $row["email"] && $_POST['mot_de_passe'] == $row["mot_de_passe"]){
        echo ("Vous êtes bien connecté à l'utilisateur". $row['nom']);
    } else{
        return ("connexion echouée");
}
}
// Fermer la connexion
$connexion->close();
?>