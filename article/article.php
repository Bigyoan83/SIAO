<?php
session_start();
if ($_SESSION['email']!='admin@gmail.com' && $_SESSION['user_name'] != 'admin'){
    header('Location: http://localhost/SIAO/home.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" type="text/css" href="../css/article.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
    </head>
    <body>
        <nav>
            <div class="profile">
                <img src="../images/SIAO.webp">
            </div>
            <ul>
                <li class="bouton"><a href="../home.php">Accueil</a></li>
                <li class="bouton"><a href="../Service/le_SIAO.php">Qui sommes nous ?</a></li>
                <li class="bouton">Gouvernance</li>
                <li class="bouton">Le SIAO</li>
                <li class="bouton"><a href="../actualites.php">Actualité</a></li>

                <!-- Vérifiez si l'utilisateur est connecté -->
                <?php if (isset($_SESSION['user_name'])): ?>
                    <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                    <li class="bouton"><a href="../connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                <?php else: ?>
                    <!-- Sinon, on affiche le bouton de connexion -->
                    <li class="bouton"><a href="../connexion/connexion.html">Se Connecter/S'inscrire</a></li>
                <?php endif; ?>
            </ul>  
        </nav>
    <section class="bienvenue">
        <h2>Ajouter un nouvel article</h2>
        <form action="ajout_article.php" method="POST">
            <div>
                <label class="label" for="titre">Titre de l'article :</label><br>
                <input type="text" class="titre" name="titre" required>
            </div>
            <div>
                <label class="label" for="accroche">Phrase d'accroche</label><br>
                <input class="accroche" type="text" name="accroche" rows="8" required></textarea>
            </div>
            <div>
                <label class="label" for="contenu">Contenu de l'article :</label><br>
                <textarea class="content" name="content" rows="8" required></textarea>
            </div>
            <button type="submit" class="bouton">Ajouter l'article</button>
        </form>
    </section>
</body>
</html>
