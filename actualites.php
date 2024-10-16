
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
            <nav class="nav" id="topNav">
                <div class="profile">
                    <img src="images/SIAO.webp">
                </div>
                <ul>
                    <div>
                        <a href="home.php" class="active">Accueil</a>
                        <a href="Service/le_SIAO.php">Qui sommes nous ?</a>
                        <a href="#contact">Contact</a>
                        <a href="actualites.php">Actualité</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Vérifiez si l'utilisateur est connecté -->
                        <?php if (isset($_SESSION['user_name'])): ?>
                            <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                            <a href="connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                        <?php else: ?>
                            <!-- Sinon, on affiche le bouton de connexion -->
                            <a href="../connexion/connexion.html">Se Connecter/S'inscrire</a></li>
                        <?php endif; ?>
                   </div>
                </ul>    
            </nav>
            <div style="margin-top:5px; text-align: center; display :flex; justify-content :space-around; ">
                <?php
                    include('Connexion_BDD.php');
                                            
                    $sql = $connexion->prepare("SELECT id, titre, accroche, content, nom, date_creation FROM article");
                    $sql->execute();
                    $resultat = $sql->get_result();
                                            
                    if ($resultat->num_rows > 0) {
                        echo '<div style="display: flex; flex-wrap: wrap; gap: 20px;">'; // Conteneur flex pour les cartes
                        // Afficher les résultats sous forme de cartes
                        while ($row = $resultat->fetch_assoc()) {
                            echo '
                            <div style="border: 1px solid black ; padding: 20px; border-radius: 10px; width: 300px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <h2 style="font-size: 20px; color: #333;">' . htmlspecialchars($row["titre"]) . '</h2>
                                <h3 style="font-size: 20px; color: #333;">' . htmlspecialchars($row["accroche"]) . '</h3>
                                <p style="color: #888; font-size: 12px;">Publié par ' . htmlspecialchars($row["nom"]) . ' le ' . htmlspecialchars($row["date_creation"]) . '</p>
                                <a href="article.php?id=' . $row["id"] . '" style="text-decoration: none; color: #0066cc; font-weight: bold;">Lire plus</a>
                            </div>';
                        }
                        echo '</div>';
                    } else {
                        echo "Aucun article trouvé.";
                    }
                ?>

            </div>
        </div>
    </body>
</html>