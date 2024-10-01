<?php
session_start();
include('../Connexion_BDD.php');

if (!isset($_SESSION['user_name'])) {
    header('Location: http://localhost/SIAO/connexion/connexion.html');
    exit();
}

$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>
    <h1>Bienvenue sur votre profil, 
        <?php echo htmlspecialchars($user_name); // htmlspecialchars pour éviter les injections XSS
        ?>!</h1>
    <p>Voici vos informations :</p>
    
    
    <a href="logout.php">Déconnexion</a>
</body>
</html>