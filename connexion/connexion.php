<?php
session_start();
include('../Connexion_BDD.php');

$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

$sql = $connexion->prepare("SELECT id, nom, mot_de_passe, email FROM utilisateur WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$resultat = $sql->get_result();
$row = $resultat->fetch_assoc();

if ($row) {
    if ($mot_de_passe == $row["mot_de_passe"]) {
        // Stocker le nom dans la session
        $_SESSION['user_name'] = $row['nom'];
        header('Location: ../home.php'); // Redirection vers la page d'accueil après connexion
        exit();
    } else {
        echo "Mot de passe incorrect";
    }
} else {
    echo "Email ou mot de passe incorrect";
}

$connexion->close();
?>

