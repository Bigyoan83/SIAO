<?php include_once("../navbar.php"); ?>
<link rel="stylesheet" href="../css/connexion.css">

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
                        <p>Vous avez déjà un compte ?  <a href="page_connexion.php">Se connecter</a></p>
                </div>    
            </div>  
        </div>
    <script src="../Scrip.js"></script>
</body>
</html>
