<?php
session_start();
include('./supprimer_article.php');

// Suppression d'un article si l'ID est fourni
if (isset($_GET['id'])) {
    $del = $_GET['id'];
    $sql = $connexion->prepare("DELETE FROM article WHERE id = ?");
    $sql->bind_param("i", $del); //Lier la variable article_id à la requête SQL, en indiquant qu'il s'agit d'un entier (i).
    $sql->execute();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/article_admin.css"/>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
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
                            <a href="../Service/gouvernance.php">Gouvernance</a>
                            <a href="#contact">Contact</a>
                            <a href="../actualites.php">Actualité</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!-- Vérifiez si l'utilisateur est connecté -->
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                                <a href="../connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                            <?php else: ?>
                                <!-- Sinon, on affiche le bouton de connexion -->
                                <a href="../connexion/page_connexion.php">Se Connecter/S'inscrire</a></li>
                            <?php endif; ?>
                        </div>
                    </ul>  
                </nav>
            </div>
            <div class="list-articles-container">
                <?php
                    include('../Connexion_BDD.php');
                            
                    $sql = $connexion->prepare("SELECT id, titre, content, nom, date_creation FROM article");
                    $sql->execute();
                    $resultat = $sql->get_result();
                            
                    if ($resultat->num_rows > 0) {
                        echo '<div class="article-cards">'; 
                        while ($row = $resultat->fetch_assoc()) {
                            echo '
                            <div class="article-card">
                                <h2>' . htmlspecialchars($row["titre"]) . '</h2>
                                <p class="article-content">' . htmlspecialchars($row["content"]) . '</p>
                                <p class="article-author">Publié par ' . htmlspecialchars($row["nom"]) . ' le ' . htmlspecialchars($row["date_creation"]) . '</p>
                                <a href="ajouter_un_article.php?id=' . $row["id"] . '" class="article-link">Lire plus</a>
                                <div class="article-icons">
                                    <a href="modif_article.php?id=' . $row["id"] . '">
                                        <img src="../images/modif.png" class="icon">
                                    </a>
                                    <a href="liste.php?id=' . $row["id"] . '">
                                        <img src="../images/supprimer.png" class="icon">
                                    </a>
                                </div>
                            </div>';
                        }
                        echo '</div>'; 
                    } else {
                        echo "Aucun article trouvé.";
                    }
                ?>
            </div>
        </div>
        <script src="../Scrip.js"></script>
    </body>
</html>
