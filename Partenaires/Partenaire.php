<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
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
                <li class="bouton"><a href="../Service/Service.php">Nos Services</a></li>
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
        <h2>
            Les Partenaires du SIAO / 115 du Var
        </h2>
        </div>
    </body> 
</html>