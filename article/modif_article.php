<?php
session_start();
include('../Connexion_BDD.php'); 

// Vérifier si l'ID de l'article est passé dans l'URL
if (isset($_GET['id'])) {
    $article_id = $_GET['id'];

    // Récupérer l'article correspondant à l'ID
    $sql = $connexion->prepare("SELECT id, titre, content, nom FROM article WHERE id = ?");
    $sql->bind_param("i", $article_id);
    $sql->execute();
    $result = $sql->get_result();

    // Si l'article existe
    if ($result->num_rows >= 0) {
        $article = $result->fetch_assoc();
    } else {
        echo "Article non trouvé";
        exit();
    }
} else {
    echo "ID de l'article non fourni";
    exit();
}

// Vérifier si le formulaire a été soumis pour la modification
if (isset($_POST['update'])) {
    $new_title = $_POST['titre'];
    $new_content = $_POST['content'];

    // Mettre à jour l'article dans la base de données
    $sql_update = $connexion->prepare("UPDATE article SET titre = ?, content = ? WHERE id = ?");
    $sql_update->bind_param("ssi", $new_title, $new_content, $article_id);

    if ($sql_update->execute()) {
        echo "L'article a été mis à jour avec succès.";
        header("Location: ../actualites.php"); // Rediriger vers la liste des articles après mise à jour
        exit();
    } else {
        echo "Erreur lors de la mise à jour de l'article.";
    }
}
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier l'Article</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <center>
            <h1>Modifier l'Article</h1>
            <div class="modif">
                <form method="post">
                    <label for="titre">Titre de l'article :</label><br>
                    <input type="text" id="titre" name="titre" value="<?php echo htmlspecialchars($article['titre']); ?>" required><br><br>

                    <label for="content">Contenu de l'article :</label><br>
                    <textarea id="content" name="content" rows="10" cols="50" required><?php echo htmlspecialchars($article['content']); ?></textarea><br><br>

                    <button type="submit" name="update">Mettre à jour</button>
                </form>
            </div>
        </center>
    </body>
</html>
