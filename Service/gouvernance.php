<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" type="text/css" href="/css/gouvernance.css"/>
        <link rel="stylesheet" type="text/css" href="/Service/gouvernance.css"/>
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
                            <a href="/Service/gouvernance.php" style= "background-color : #79c0ff; border-radius: 10px;">Gouvernance</a>
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
                                <!-- htmlspecialchars pour éviter les injections XSS -->
                            <?php else: ?>
                                <!-- Sinon, on affiche le bouton de connexion -->
                                <a href="../connexion/page_connexion.php">Se Connecter/S'inscrire</a></li>
                            <?php endif; ?>
                        </div>
                    </ul>  
                </nav>
            </div>
            <div class="conteneur_titre">
                <div class="titre-contenu-gouvernance">
                    <p>Les SIAO sont essentiellement financés par les services <br> de l'Etat chargés de la cohésion sociale.</p>
                </div>
            </div>
            <div class="pack_1">
                <div class="image_gourvernance"></div>
                <div class="contenu-gournance">
                    <div class="intro-gouvernance">
                        <p>Opérateur de service public, le SIAO met en œuvre les orientations et décisions de l’Etat </p>
                    </div>
                    <div class="paragraphe">
                        <p>Une nouvelle gouvernance territoriale des SIAO est assurée au travers d’un Comité stratégique partenarial.Sous la présidence du préfet de département, cette instance associe l’ensemble des acteurs intervenant dans les parcours d’accès au logement,à l’hébergement et à l’accompagnement des personnes sans domicile ou mal logées </p>
                    </div>
                    <div class="paragraphe">
                        <p>Les collectivités territoriales , les acteurs du champ de la santé , de l’emploi , les représentants des résidences sociales ,les bailleurs sociaux sont partie prenante  de cette gouvernance, disposant  de  compétences,de ressources et de leviers utiles et importants ; Le Comité stratégique partenarial permet de discuter collectivement de la stratégie pour la résorption du sans-abrismeou du mal logement sur le territoire, et surtout de sa mise en œuvre où chacun doit être impliqué et jouer son rôle.</p>
                    </div>
                </div>
                <div class="paragraphe">
                    <p>Le CSP permet au SIAO d’être doté d’un pilotage qui traduit l’articulation des politiques publiques entre elles et la responsabilité partagée de la gouvernance du SIAO est une co-responsabilité </p>
                </div> 
            </div>
        </div>
        <script src="../Scrip.js"></script>
    </body>
</html>