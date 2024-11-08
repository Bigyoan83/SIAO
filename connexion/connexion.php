<?php
session_start();
include('../Connexion_BDD.php');

$email = $_POST['email'];
$password = $_POST['mot_de_passe'];

$sql = $connexion->prepare("SELECT email, nom, mot_de_passe  FROM utilisateur WHERE email = ?");
//Prépare une requête SQL. Cela signifie que la requête est écrite avec un emplacement réservé (?) pour éviter les injections SQL. Cela est plus sûr que d'insérer directement les variables dans la requête.
$sql->bind_param("s", $email);
//Associe la valeur de $email au ? dans la requête. Le "s" signifie que l'email est une chaîne de caractères (string).
$sql->execute();
$resultat = $sql->get_result();
$row = $resultat->fetch_assoc();

if ($row) {
    $passwordHash = $row["mot_de_passe"];
    if (password_verify($password, $passwordHash)) {
        // Stocker le nom dans la session
        $_SESSION['user_name'] = $row['nom'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['success_message'] = "Connexion réussie, bienvenue " . $row['nom'] . " !";
        echo '<div class="tenor-gif-embed" data-postid="18272777" data-share-method="host" data-aspect-ratio="1.61616" data-width="100%"><a href="https://tenor.com/view/loading-complete-gif-18272777">Loading Complete GIF</a>from <a href="https://tenor.com/search/loading-gifs">Loading GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>';
        header('Refresh:7; URL=../home.php'); // Redirection vers la page d'accueil après connexion
        exit();
        } else {
        header("Location: page_connexion.php?error=login_incorrect");
    }
} else {
    header("Location: page_connexion.php?error=login_incorrect");
}

$connexion->close();
?>

