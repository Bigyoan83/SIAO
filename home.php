<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="body">
            <div class="top">
            <a class="imglogo" href="home.php">
                <img class="imglogo1" src="images/SIAO.webp"></a> 
            <nav class="nav" id="topNav">   
                <ul>
                    <div>
                        <div></div>
                        <a href="Service/gouvernance.php">Gouvernance</a>
                        <a href="#equipe">Equipe SIAO</a>
                        <a href="/actualites.php">Actualité</a>
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
                            Service intégré d’accueil et d’orientation                        
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
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.9782952425126!2d6.758187475365137!3d43.429632966863046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ce97f07281724b%3A0x87d23ffec9c62660!2sSIAO-115%20du%20VAR!5e1!3m2!1sfr!2sfr!4v1725000504505!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps"></iframe>
            </div>
        </div>
        <script src="Scrip.js"></script>
        </div>
    </body>
</html>
