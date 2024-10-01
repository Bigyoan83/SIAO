<?php
session_start();

include('../Connexion_BDD.php');


$content = $_POST['content'];
$titre = $_POST['titre'];
$nom = $_SESSION['user_name'];

$sql = "INSERT INTO article (titre, content,nom) VALUES ('$titre', '$content','$nom')";
if ($connexion->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: http://localhost/SIAO/article/article.php');
} else {
    echo "Error: " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion
$connexion->close();
?>