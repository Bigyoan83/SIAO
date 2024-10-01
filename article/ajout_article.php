<?php
include('../Connexion_BDD.php');


$content = $_POST['content'];
$titre = $_POST['titre'];

$sql = "INSERT INTO article (titre, content) VALUES ('$titre', '$content')";
if ($connexion->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: http://localhost/SIAO/article/article.html');
} else {
    echo "Error: " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion
$connexion->close();
?>