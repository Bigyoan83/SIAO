<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" href="../css/connexion.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
    </head>
    <body>
        <div class="body">
            <div class="top">
                <a class="imglogo" href="../home.php">
                    <img class="imglogo1" src="../images/itinova.png"></a>
                <nav class="nav" id="topNav">
                    <ul>
                        <div>
                            <div></div>
                            <a href="../Service/gouvernance.php">Gouvernance</a>
                            <a href="../equipe/equipe.php">Equipe SIAO</a>
                            <a href="../actualites.php">Actualité</a>
                            <a href="#activité">Pôle d'activités</a>
                            <a href="#ressource">Ressources</a>
                            <a href="#agenda">Agenda</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </ul>    
                </nav>
            </div>
            <div class="container">
                <div class="login-container">
                    <h2>Se Connecter</h2>
                    <?php
                        // Afficher un message d'erreur si l'email existe déjà
                        if (isset($_GET['error']) && $_GET['error'] == 'login_incorrect') {
                            echo '<p style="color: red; text-align: center;">Email ou mot de passe incorrect !</p>';
                        }
                    ?>
                    <form action="connexion.php" method="post">
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label for="mot_de_passe">Mot de passe</label>
                            <input type="password" id="password" name="mot_de_passe" required>
                        </div>
                        <div class="input-group">
                            <button type="submit">Connexion</button>
                        </div>
                        <p class="register-link">Pas encore de compte ? <a href="incription/page_inscription.php">Inscrivez-vous</a></p>
                    </form>
                </div>
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
