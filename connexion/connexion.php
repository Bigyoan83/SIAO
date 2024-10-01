<?php
session_start();
include('../Connexion_BDD.php');

$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

$sql = $connexion->prepare("SELECT id, nom, mot_de_passe, email FROM utilisateur WHERE email = ?");
//Prépare une requête SQL. Cela signifie que la requête est écrite avec un emplacement réservé (?) pour éviter les injections SQL. Cela est plus sûr que d'insérer directement les variables dans la requête.
$sql->bind_param("s", $email);
//Associe la valeur de $email au ? dans la requête. Le "s" signifie que l'email est une chaîne de caractères (string).
$sql->execute();
$resultat = $sql->get_result();
$row = $resultat->fetch_assoc();

if ($row) {
    if ($mot_de_passe == $row["mot_de_passe"]) {
        // Stocker le nom dans la session
        $_SESSION['user_name'] = $row['nom'];
        $_SESSION['success_message'] = "Connexion réussie, bienvenue " . $row['nom'] . " !";

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

