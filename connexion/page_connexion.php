<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" href="../css/connexion.css">
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
                            <a href="../Service/le_SIAO.php">Qui sommes nous ?</a>
                            <a href="#contact">Contact</a>
                            <a href="../actualites.php">Actualité</a>
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
    </body>
</html>
