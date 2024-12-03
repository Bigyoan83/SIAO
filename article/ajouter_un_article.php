<?php
session_start();
if ($_SESSION['email']!='admin@gmail.com' && $_SESSION['user_name'] != 'admin'){
    header('Location: http://localhost/SIAO/home.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/article_admin.css"/>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
    </head>
    <body>
        <div class="body">
            <div class="top">
                <a class="imglogo" href="../home.php">
                    <img class="imglogo1" src="../images/SIAO.webp"></a>
                <nav class="nav" id="topNav">   
                    <ul>
                        <div>
                            <div></div>
                            <a href="../Service/gouvernance.php">Gouvernance</a>
                            <a href="#equipe">Equipe SIAO</a>
                            <a href="../actualites.php">Actualité</a>
                            <a href="#activité">Pôle d'activités</a>
                            <a href="#ressource">Ressources</a>
                            <a href="#agenda">Agenda</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- Vérifiez si l'utilisateur est connecté -->
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                                <a href="../connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                            <?php else: ?>
                                <!-- Sinon, on affiche le bouton de connexion -->
                                <a href="../connexion/page_connexion.php">Se Connecter/S'inscrire</a></li>
                            <?php endif; ?>
                        </div>
                    </ul>  
                </nav>
            </div>
            <div class="ajout_article">
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
            </div>
        </div>
        <script src="../Scrip.js"></script>
        <footer>
            <ul>
                <li>F.A.Q</li>
                <li>Mentions égales</li>
                <li>Conditions générales</li>
                <li><a href="contact@siao115var.com">Nous contacter </a></li>
            </ul>
        </footer>
    </body>
</html>
