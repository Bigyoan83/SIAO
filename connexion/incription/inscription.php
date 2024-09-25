<?php
include('../../Connexion_BDD.php');

echo $_POST['nom'].'<br>';

$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['mot_de_passe'];

$sql = "INSERT INTO utilisateur (id, email, mot_de_passe) VALUES ('John','john@example.com' 'Doe')";
$bdd->exec($sql);
if ($connexion->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion
$connexion->close();
?>
