<?php
session_start();
include('../Connexion_BDD.php');

// Vérifie si l'ID est présent dans l'URL
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];

    // Préparation de la requête pour récupérer les informations de l'article
    $sql = $connexion->prepare("SELECT titre, content, nom, date_creation FROM article WHERE id = ?");
    $sql->bind_param("i", $article_id);  // Sécurise l'ID pour éviter les injections SQL
    $sql->execute();
    $result = $sql->get_result();

    // Vérifie si l'article existe
    if ($result->num_rows > 0) {
        $article = $result->fetch_assoc();
    } else {
        echo "Article non trouvé.";
        exit;
    }
} else {
    echo "ID d'article manquant.";
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" type="text/css" href="../css/article.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>
            <?php echo htmlspecialchars($article['titre']); ?> - SIAO 83
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <a href="#equipe">Equipe SIAO</a>
                            <a href="../actualites.php">Actualité</a>
                            <a href="#activité">Pôle d'activités</a>
                            <a href="#ressource">Ressources</a>
                            <a href="#agenda">Agenda</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <a href="../connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a>
                            <?php else: ?>
                                <a href="../connexion/connexion.php">Se Connecter/S'inscrire</a>
                            <?php endif; ?>
                        </div>
                    </ul>
                </nav>
            </div>

            <div class="article-detail">
                <h1 class="article-title"><?php echo htmlspecialchars($article['titre']); ?></h1>
                <p class="article-author">Publié par <?php echo htmlspecialchars($article['nom']); ?> le <?php echo htmlspecialchars($article['date_creation']); ?></p>
                <div class="article-content">
                    <?php echo nl2br(htmlspecialchars($article['content'])); ?>
                </div>
            </div>
        </div>
        <script src="../Scrip.js"></script>    
    </body>
</html>



