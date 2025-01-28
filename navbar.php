<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="body">
            <div class="top">
            <a class="imglogo" href="../accueil/home.php">
                <img class="imglogo1" src="../images/itinova.png"></a> 
            <nav class="nav" id="topNav">   
                <ul>
                    <div>
                        <div></div>
                        <a href="../Service/gouvernance.php">Gouvernance</a>
                        <a href="../equipe/equipe.php">Equipe SIAO/ Pôle d'activités</a>
                        <a href="../actu/actualites.php">Actualité</a>
                        <a href="https://basedeconnaissances.sisiao.dihal.gouv.fr/support/utiliser-le-si-siao" target="_blank">Ressources</a>
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