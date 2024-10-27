<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/article.css"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
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
                            <a href="Service/le_SIAO.php">Qui sommes nous ?</a>
                            <a href="#contact">Contact</a>
                            <a href="actualites.php">Actualité</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>

                            <!-- Vérifiez si l'utilisateur est connecté -->
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                                <a href="connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li> <!-- htmlspecialchars pour éviter les injections XSS -->
                            <?php else: ?>
                                <!-- Sinon, on affiche le bouton de connexion -->
                                <a href="connexion/page_connexion.php">Se Connecter/S'inscrire</a></li>
                            <?php endif; ?>

                        </div>
                    </ul>  
                </nav>
            </div>

            <div class="actu">
                <?php
                    include('Connexion_BDD.php');                         
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
                                <a href="article/lire_plus.php?id=' . $row["id"] . '" class="article-link">Lire plus</a>
                            </div>';
                        }
                        echo '</div>';
                    } else {
                        echo "Aucun article trouvé.";
                    }
                ?>
            </div>
        </div>
        <script src="Scrip.js"></script>
    </body>
</html>