<?php include_once("../navbar.php");
include('../Connexion_BDD.php');
// Suppression d'un article si l'ID est fourni
if (isset($_GET['id'])) {
    $del = $_GET['id'];
    $sql = $connexion->prepare("DELETE FROM article WHERE id = ?");
    $sql->bind_param("i", $del); //Lier la variable article_id à la requête SQL, en indiquant qu'il s'agit d'un entier (i).
    $sql->execute();
}
?>
    <link rel="stylesheet" type="text/css" href="../css/article.css"/>
    <link rel="stylesheet" type="text/css" href="../css/article_admin.css"/>
    <link rel="stylesheet" type="text/css" href="../style.css"/>

            <div class="titre">
                <h1>Actualités</h1>
            </div>
            <div class="phrase_intro">
                <p>Retrouvez ici tous les articles et actualités liés au SIAO.</p>
            </div>

            <div class="act">
                <?php 
                    if (isset($_SESSION['user_name']) && $_SESSION['email']=='admin@gmail.com') {
                        echo '<center><a href="../article/ajouter_un_article.php">Ajouter un article</a></center> ';
                    }
                ?><br>
                <div class="actu">
                    <?php
                        include('../Connexion_BDD.php');                         
                        $sql = $connexion->prepare("SELECT id, titre, accroche, content, nom, date_creation FROM article");
                        $sql->execute();
                        $resultat = $sql->get_result();                       
                        if ($resultat->num_rows > 0) {
                            echo '<div class="article-container">';
                            while ($row = $resultat->fetch_assoc()) {
                                echo '
                                <div class="article-card">
                                    <h2 class="article-title">' . htmlspecialchars($row["titre"]) . '</h2>
                                    <h3 class="article-subtitle">' . htmlspecialchars($row["accroche"]) . '</h3>
                                    <p class="article-author">Publié par ' . htmlspecialchars($row["nom"]) . ' le ' . htmlspecialchars($row["date_creation"]) . '</p>
                                    <a href="../article/lire_plus.php?id=' . $row["id"] . '" class="article-link">Lire plus</a>'; 
                                    if (isset($_SESSION['user_name']) && $_SESSION['email']=='admin@gmail.com') {
                                        echo '
                                        <div class="article-icons">
                                            <a href="../article/modif_article.php?id=' . $row["id"] . '">
                                                <img src="../images/modif.png" class="icon"></a>
                                            <a href="../actu/actualites.php?id=' . $row["id"] . '">
                                                <img src="../images/supprimer.png" class="icon"></a>
                                        </div>';
                                    }
                                    echo '</div>';
                                }
                                echo '</div>';
                            } else {
                                echo "Aucun article trouvé.";
                                
                            }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="Scrip.js"></script>
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