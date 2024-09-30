<?php

session_start();
include('..//Connexion_BDD.php');

$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    <h1>Bienvenue sur votre profil, <?php echo $user_name; ?> !</h1>
    <p>Voici vos informations :</p>
    <!-- Tu peux afficher d'autres informations de l'utilisateur ici -->
    
    <a href="logout.php">Déconnexion</a>
</body>
</html>