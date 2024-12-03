<?php
session_start();
include('article/supprimer_article.php');

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
        <link rel="stylesheet" type="text/css" href="css/article.css"/>
        <link rel="stylesheet" type="text/css" href="css/article_admin.css"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
    </head>
    <body>
        <div class="body">
            <div class="top">
                <a class="imglogo" href="home.php">
                    <img class="imglogo1" src="images/itinova.png"></a>
                <nav class="nav" id="topNav">   
                    <ul>
                        <div>
                            <div></div>
                            <a href="Service/gouvernance.php">Gouvernance</a>
                            <a href="#equipe">Equipe SIAO</a>
                            <a href="actualites.php" style="background-color: #79c0ff; border-radius: 10px;">Actualité</a>
                            <a href="#activité">Pôle d'activités</a>
                            <a href="#ressource">Ressources</a>
                            <a href="#agenda">Agenda</a>
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

            <div class="titre">
                <h1>Actualités</h1>
            </div>
            <div class="phrase_intro">
                <p>Retrouvez ici tous les articles et actualités liés au SIAO.</p>
            </div>

            <div class="act">
                <?php 
                    if (isset($_SESSION['user_name']) && $_SESSION['email']=='admin@gmail.com') {
                        echo '<center><a href="article/ajouter_un_article.php">Ajouter un article</a></center> ';
                    }
                ?><br>
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
                                    <a href="article/lire_plus.php?id=' . $row["id"] . '" class="article-link">Lire plus</a>'; 
                                    if (isset($_SESSION['user_name']) && $_SESSION['email']=='admin@gmail.com') {
                                        echo '
                                        <div class="article-icons">
                                            <a href="article/modif_article.php?id=' . $row["id"] . '">
                                                <img src="images/modif.png" class="icon"></a>
                                            <a href="actualites.php?id=' . $row["id"] . '">
                                                <img src="images/supprimer.png" class="icon"></a>
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