<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="body">
            <nav >
                <div class="profile">
                    <img src="images/SIAO.webp">
                </div>
                <ul>
                    <li class="bouton"><a href="home.php">Accueil</a></li>
                    <li class="bouton"><a href="Service/le_SIAO">Qui sommes nous ?</a></li>
                    <li class="bouton">Gouvernance</li>
                    <li class="bouton">Le SIAO</li>
                    <li class="bouton"><a href="./actualites.php">Actualité</a></li>

                    <!-- Vérifiez si l'utilisateur est connecté -->
                    <?php if (isset($_SESSION['user_name'])): ?>
                        <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                        <li class="bouton"><a href="connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                    <?php else: ?>
                        <!-- Sinon, on affiche le bouton de connexion -->
                        <li class="bouton"><a href="connexion/connexion.html">Se Connecter/S'inscrire</a></li>
                    <?php endif; ?>
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
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sed dicta laudantium adipisci voluptates quam commodi veritatis molestias. Earum nisi quisquam doloribus, incidunt assumenda harum ab non sint facere excepturi.
                        </p>    
                    </div>
                </section>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.9782952425126!2d6.758187475365137!3d43.429632966863046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ce97f07281724b%3A0x87d23ffec9c62660!2sSIAO-115%20du%20VAR!5e1!3m2!1sfr!2sfr!4v1725000504505!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="maps"></iframe>
            </div>
        </div>
    </body>
</html>
