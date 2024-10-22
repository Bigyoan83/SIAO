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
        <link rel="stylesheet" type="text/css" href="../css/Service.css"/>
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
    </head>
    <body>
        <div class="body">
            <div class="top">
                    <img class="imglogo" src="../images/SIAO.webp">
                    <nav class="nav" id="topNav">   
                        <ul>
                            <div>
                                <a href="#home" class="active">Accueil</a>
                                <a href="Service/le_SIAO.php">Qui sommes nous ?</a>
                                <a href="#contact">Contact</a>
                                <a href="actualites.php">Actualité</a>
                                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <!-- Vérifiez si l'utilisateur est connecté -->
                                <?php if (isset($_SESSION['user_name'])): ?>
                                    <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                                    <a href="../connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                                <?php else: ?>
                                    <!-- Sinon, on affiche le bouton de connexion -->
                                    <a href="../connexion/connexion.html">Se Connecter/S'inscrire</a></li>
                                <?php endif; ?>
                        </div>
                        </ul>  
                    </nav>
                </div>
            </nav>

            <div style="margin-top:5px; text-align: center; display: flex; justify-content: space-around;">
                <?php
                    include('../Connexion_BDD.php');
                            
                    // Requête pour récupérer tous les articles
                    $sql = $connexion->prepare("SELECT id, titre, content, nom, date_creation FROM article");
                    $sql->execute();
                    $resultat = $sql->get_result();
                            
                    if ($resultat->num_rows > 0) {
                        echo '<div style="display: flex; flex-wrap: wrap; gap: 20px;">'; // Conteneur flex pour les cartes
                    
                        // Boucle pour afficher les articles
                        while ($row = $resultat->fetch_assoc()) {
                            echo '
                            <div style="border: 1px solid black; padding: 20px; border-radius: 10px; width: 300px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <h2 style="font-size: 20px; color: #333;">' . htmlspecialchars($row["titre"]) . '</h2>
                                <p style="color: #555; font-size: 14px; margin-bottom: 10px;">' . htmlspecialchars($row["content"]) . '</p>
                                <p style="color: #888; font-size: 12px;">Publié par ' . htmlspecialchars($row["nom"]) . ' le ' . htmlspecialchars($row["date_creation"]) . '</p>
                                <a href="article.php?id=' . $row["id"] . '" style="text-decoration: none; color: #0066cc; font-weight: bold;">Lire plus</a>
                                <div>
                        
                                    <a href="modif_article.php?id=' . $row["id"] . '" style="text-decoration: none; color: #0066cc; font-weight: bold;">
                                        <img src="../images/modif.png" style="width: 30px; height: 30px">
                                    </a>
                        
                                    <a href="liste.php?id=' . $row["id"] . '" style="text-decoration: none; color: #0066cc; font-weight: bold;">
                                        <img src="../images/supprimer.png" style="width: 30px; height: 30px">
                                    </a>
                                </div>
                            </div>';
                        }
                    
                        echo '</div>'; // Fin du conteneur flex
                    } else {
                        echo "Aucun article trouvé.";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
