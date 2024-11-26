<?php
session_start();

include('../Connexion_BDD.php');

$content = $_POST['content'];
$titre = $_POST['titre'];
$accroche = $_POST['accroche'];
$nom = $_SESSION['user_name'];


$sql = $connexion->prepare("INSERT INTO article (titre, accroche, content, nom) VALUES (?,?,?,?)");
//Prépare une requête SQL. Cela signifie que la requête est écrite avec un emplacement réservé (?) pour éviter les injections SQL. Cela est plus sûr que d'insérer directement les variables dans la requête.
$sql->bind_param("ssss", $titre, $accroche, $content, $nom);

//Associe la valeur de $email au ? dans la requête. Le "s" signifie que l'email est une chaîne de caractères (string).


if ($sql->execute() === TRUE) {
    echo "New record created successfully";
    header('Location: http://localhost/SIAO/article/ajouter_un_article.php');
} else {
    echo "Error: " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion
$connexion->close();
?>