<?php include_once("../navbar.php"); ?>
<link rel="stylesheet" href="../css/connexion.css">
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
                        <p class="register-link">Pas encore de compte ? <a href="./page_inscription.php">Inscrivez-vous</a></p>
                    </form>
                </div>
            </div>
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
