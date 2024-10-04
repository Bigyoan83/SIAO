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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu_deroulant.css">
    <title>Profil</title>
</head>
<body>
    <h1>Bienvenue sur votre profil, 
        <?php echo htmlspecialchars($user_name); // htmlspecialchars pour éviter les injections XSS
        ?>!</h1>
    <p>Voici vos informations :</p>

      
    <div class="déconnexion">
        <a href="logout.php">Déconnexion</a>
    </div>

    <div class="menuderoulant">
        <li class="dropdown">
            <a href="#" class="dropbtn">Article</a>
                <div class="dropdown-content">
                    <a href="../article/article.php">Ajouter un article</a>
                    <a href="../article/liste.php">Liste des articles créés</a>
                    <a href="modifier_article.php">Modifier un article</a>
                    <a href="supprimer_article.php">Supprimer un article</a>
                </div>
        </li>
    </div>
</body>
</html>