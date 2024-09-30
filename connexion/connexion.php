<?php
session_start();
// Connexion à la base de données avec le fichier connexion_BDD.php
include('../Connexion_BDD.php');


// Requête SQL pour récupérer les utilisateurs
$email = $_POST['email'];

$sql = "SELECT id, nom, mot_de_passe , email FROM utilisateur WHERE email = '$email'";

// echo $sql;
$resultat = $connexion->query($sql);

$row = $resultat->fetch_assoc();


if ($resultat->num_rows > 0) {
    if($_POST['email'] == $row["email"] && $_POST['mot_de_passe'] == $row["mot_de_passe"]){
        header('Location: http://localhost/SIAO/connexion/profil.php');
    }
} else {
    echo ("email ou mot de passe incorect");
}
// Fermer la connexion
$connexion->close();
?>
