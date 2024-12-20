<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../style.css"/>
        <link rel="stylesheet" href="../../css/connexion.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
    </head>
    <body>
        <div class="body">
             <div class="top">
                <a class="imglogo" href="../../home.php">
                    <img class="imglogo1" src="../../images/SIAO.webp"></a>
                <nav class="nav" id="topNav">
                    <ul>
                        <div>
                            <div></div>
                            <a href="../../Service/gouvernance.php">Gouvernance</a>
                            <a href="#equipe">Equipe SIAO</a>
                            <a href="../../actualites.php">Actualité</a>
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
                    <h2>S'inscrire</h2>

                    <?php
                    // Afficher un message d'erreur si l'email existe déjà
                    if (isset($_GET['error']) && $_GET['error'] == 'email_exists') {
                        echo '<p style="color: red; text-align: center;">Cet email est déjà utilisé. Veuillez en choisir un autre.</p>';
                    }
                    ?>

                    <form action="inscription.php" method="POST">
                        <div class="input-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label for="mot_de_passe">Mot de passe</label>
                            <input type="password" id="password" name="mot_de_passe" required>
                        </div>
                        <div class="input-group">
                            <button type="submit">Inscription</button>
                        </div>
                    </form>
                        <p>Vous avez déjà un compte ?  <a href="../page_connexion.php">Se connecter</a></p>
                </div>    
            </div>  
        </div>
    <script src="../../Scrip.js"></script>
</body>
</html>
