<?php include_once("../navbar.php"); ?>

       <link rel="stylesheet" type="text/css" href="./equipe.css"/>

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
                        <img class="organigrame" src="../images/Organigrame.png" alt="organisme">
                    </section>
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
                <li><a href="mailto:siaovar@gmail.com">Nous contacter </a></li>
            </ul>
        </footer>
    </body>
</html>