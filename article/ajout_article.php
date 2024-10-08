<?php
session_start();

include('../Connexion_BDD.php');


$content = $_POST['content'];
$titre = $_POST['titre'];
$accroche = $_POST['accroche'];
$nom = $_SESSION['user_name'];


$sql = "INSERT INTO article (titre,accroche, content,nom) VALUES ('$titre', '$accroche', '$content','$nom')";
if ($connexion->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: http://localhost/SIAO/article/article.php');
} else {
    echo "Error: " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion
$connexion->close();
?>