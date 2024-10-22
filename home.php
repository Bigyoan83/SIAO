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
            <nav class="nav" id="topNav">
                <div class="profile">
                    <img class="imglogo" src="images/SIAO.webp">
                </div>
                <ul>
                    <div>
                        <a href="#home" class="active">Accueil</a>
                        <a href="Service/le_SIAO.php">Qui sommes nous ?</a>
                        <a href="#contact">Contact</a>
                        <a href="actualites.php">Actualité</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Vérifiez si l'utilisateur est connecté -->
                        <?php if (isset($_SESSION['user_name'])): ?>
                            <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                            <a href="connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                        <?php else: ?>
                            <!-- Sinon, on affiche le bouton de connexion -->
                            <a href="connexion/connexion.html">Se Connecter/S'inscrire</a></li>
                        <?php endif; ?>
                   </div>
                </ul>  
            </nav>

            <!-- Affichage du message de succès -->
            <?php if (isset($_SESSION['success_message'])): ?>
                <div class="message-succes">
                    <p><?php echo htmlspecialchars($_SESSION['success_message']); ?></p>
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
                            Bienvenue au SIAO / 115 du Var
                        </h2>
                        <p>Nous sommes heureux de vous accueillir sur notre site dédié aux usagers et aux professionnels.<br>
                        Il rassemble toutes les informations utiles à l'accueil et l'orientation <br> des personnes en situation de précarité en besoin d'un hébergement ou en démarche d'insertion par le logement.</p>
                    </section>
                </div>
                <div class="images">
                    <img src="images/Région_Sud_83.png">
                </div>
            </div>

            <div class="actu">
                <section class="nos-actu">
                    <h2>
                        Actualité
                    </h2>
                    <div>
                 
                    </div>
                </section>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.9782952425126!2d6.758187475365137!3d43.429632966863046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ce97f07281724b%3A0x87d23ffec9c62660!2sSIAO-115%20du%20VAR!5e1!3m2!1sfr!2sfr!4v1725000504505!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps"></iframe>
            </div>
        </div>
        <script src="Scrip.js"></script>
    </body>
</html>
