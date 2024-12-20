<?php
session_start();
include('../Connexion_BDD.php');

if (!isset($_SESSION['user_name'])) {
    header('Location: http://localhost/SIAO/connexion/page_connexion.php');
    exit();
}

$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" href="../css/menu_deroulant.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <a href="profil.php" class="page" style="background-color: #79c0ff;">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                            <?php else: ?>
                                <!-- Sinon, on affiche le bouton de connexion -->
                                <a href="page_connexion.php">Se Connecter/S'inscrire</a></li>
                            <?php endif; ?>
                        </div>
                    </ul>  
                </nav>
            </div>
            <center>
            <div class="mid">
                <h1>Bienvenue sur votre profil, 
                    <?php echo htmlspecialchars($user_name); // htmlspecialchars pour éviter les injections XSS
                    ?>!</h1>
                <p>Voici vos informations :</p>


                <div class="déconnexion">
                    <a href="logout.php">Déconnexion</a>
                </div>             
            </div>
            </center>
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