<?php
session_start();
require_once  "init.php"; 
\Sentry\captureException(new Exception('Ceci est un test d’erreur.'));

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="body">
            <div class="top">
            <a class="imglogo" href="home.php">
                <img class="imglogo1" src="images/itinova.png"></a>
            <nav class="nav" id="topNav">   
                <ul>
                    <div>
                        <div></div>
                        <a href="Service/gouvernance.php">Gouvernance</a>
                        <a href="./equipe/equipe.php">Equipe SIAO</a>
                        <a href="actualites.php">Actualité</a>
                        <a href="#activité">Pôle d'activités</a>
                        <a href="#ressource">Ressources</a>
                        <a href="#agenda">Agenda</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>

                        <!-- Vérifiez si l'utilisateur est connecté -->
                        <?php if (isset($_SESSION['user_name'])): ?>
                            <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                            <a href="connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                        <?php else: ?>
                            <!-- Sinon, on affiche le bouton de connexion -->
                            <a href="connexion/page_connexion.php">Se Connecter/S'inscrire</a></li>
                        <?php endif; ?>

                    </div>
                </ul>  
            </nav>
       </div>
        <div class="content">
            <!-- Affichage du message de succès -->
            <?php if (isset($_SESSION['success_message'])): ?>
                <div style="margin: 0; border: 0;" class="message-succes">
                    <p><?php echo htmlspecialchars($_SESSION['success_message']); ?></p>
                    <!-- htmlspecialchars pour éviter les injections XSS -->
                </div>
                <?php
                // Supprimer le message de succès après l'avoir affiché
                unset($_SESSION['success_message']);
                ?>
            <?php endif; ?>

            <div class="présentation">
                <div class="accueil">
                    <section class="bienvenue">
                        <h2>
                            Le SIAO 115 <br>
                            Service intégré d'accueil et d'orientation                        
                        </h2>
                        <p>
                            Le SIAO constitue un élément structurant du service public de la rue au logement
                        </p>
                    </section>
                </div>
            </div>
            <div class="site_externe">
                <a href="https://www.itinova.org/" target="_blank"><button class="redir">Itinova</button></a>
                <a href="https://soliguide.fr/fr" target="_blank"><button class="redir">Soliguide</button></a>
            </div>
            <div class="conteneur_acceuil">
                <div class="paragraphe">
                    <h3>LES PRINCIPES</h3>
                    <p>Le SIAO du var  organise et centralise l’offre d’hébergement et de logement ainsi que l’ensemble des demandes de prise en charge des ménages privés de "chez soi". <br><br>
                    En partant toujours des usagers, il vise à proposer à chacun une orientation la plus adaptée possible à ses besoins. <br><br>
                    Le SIAO repose sur 3 principes fondamentaux sont au cœur de notre action <br><br>
                    <li>L’inconditionnalité de l’accueil et la continuité de la prise en charge : chaque personne et famille sans domicile fixe en situation de détresse ou risquant de l’être, ayant besoin d’un hébergement, doit pouvoir y accéder, en urgence, si nécessaire, et y demeurer jusqu’à son orientation vers une proposition adaptée.</li>
                    <li>Le « logement d’abord » : l’hébergement ne doit pas être une étape indispensable, et lorsque la situation du ménage le permet, l’accès direct au logement adapté ou ordinaire doit être privilégié, avec un accompagnement si nécessaire. Chaque personne ou famille accueillie dans un hébergement ne doit y rester que le temps nécessaire et accéder au logement dans les meilleurs délais dès lors qu’elle y est prête</li>
                    <li>L’accès au service public : toute personne doit pouvoir trouver un service de l’accueil et de l’orientation en tout point du territoire, sans discrimination et apportant une réponse à ses besoins.</li>
                </p> 
                </div>

                <div class="paragraphe">
                    <h3>SES OBJECTIFS</h3>
                    <li>Simplifier les démarches d’accès à l’hébergement ou au logement (ordinaire ou adapté) pour les personnes sans domicile fixe et simplifier l’intervention des travailleurs sociaux qui les accompagnent.</li>
                    <li>Traiter avec équité les demandes en s’appuyant sur la connaissance des disponibilités de l’ensemble de l’offre existant ; orienter la personne en tenant compte de ses besoins et non seulement en fonction de la disponibilité de telle ou telle place.</li>
                    <li>Coordonner les différents acteurs de la veille sociale jusqu’au logement et améliorer la fluidité hébergement-logement.</li>
                    <li>Participer à la constitution d’observatoires locaux afin de mieux évaluer les besoins et les réponses apportées.</li>
                </div>
                
                <div class="paragraphe">
                    <h3>LES MISSIONS</h3>
                    <p><h4>Public-cible :</h4>
                    Les personnes ou familles sans domicile ou éprouvant des difficultés particulières, en raison de l'inadaptation de leurs ressources ou de leurs conditions d'existence, pour accéder par leurs propres moyens à un logement décent et indépendant. <br>
                    <h4>Missions :</h4>
                    <li> Recenser toutes les places d'hébergement, les logements en résidence sociale ainsi que les logements des organismes qui exercent les activités d'intermédiation locative ;</li>
                    <li>Gérer le service d'appel téléphonique (115) pour les personnes ou familles mentionnées au premier alinéa ; </li>
                    <li>Veiller à la réalisation d'une évaluation sociale, médicale et psychique du public-cible, de traiter équitablement leurs demandes et de leur faire des propositions d'orientation adaptées à leurs besoins, transmises aux organismes susceptibles d'y satisfaire ;</li>
                    <li>Suivre le parcours des ménages pris en charge, jusqu'à stabilisation de leur situation ; </li>
                    <li>Contribuer à l'identification des personnes en demande d'un logement, si besoin avec un accompagnement social ;</li>
                    <li>Assurer la coordination des personnes concourant au dispositif de veille sociale, la coordination des acteurs [...]</li>
                    <li>Produire les données statistiques d'activité, de suivi et de pilotage du dispositif d'accueil, d'hébergement et d'accompagnement vers l'insertion et le logement</li>
                    <li>Participer à l'observation sociale.</li>	
                    </p>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.9782952425126!2d6.758187475365137!3d43.429632966863046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ce97f07281724b%3A0x87d23ffec9c62660!2sSIAO-115%20du%20VAR!5e1!3m2!1sfr!2sfr!4v1725000504505!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps"></iframe>
            </div>
        </div>
        
        <script src="Scrip.js"></script>
        <footer>
            <ul>
                <li>F.A.Q</li>
                <li>Mentions égales</li>
                <li>Conditions générales</li>
                <li><a href="contact@siao115var.com ">Nous contacter </a></li>
            </ul>
        </footer>        
    </body>
</html>
