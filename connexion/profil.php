<?php include_once("../navbar.php"); ?>
<?php
include('../Connexion_BDD.php');

if (!isset($_SESSION['user_name'])) {
    header('Location: http://localhost/SIAO/connexion/page_connexion.php');
    exit();
}

$user_name = $_SESSION['user_name'];
?>


        <link rel="stylesheet" href="../css/menu_deroulant.css">

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