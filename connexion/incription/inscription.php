<?php
include('../../Connexion_BDD.php');

echo $_POST['nom'].'<br>';

$nom = $_POST['nom'];
$email = $_POST['email'];
$password = password_hash($_POST['mot_de_passe'],PASSWORD_DEFAULT);

$sql = "INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$password')";
if ($connexion->query($sql) === TRUE) {
    echo '<script type="text/javascript">
            alert("Votre inscription à été complétée");
            document.location.href="../connexion.html";
        </script>;';
} else {
    echo "Error: " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion
$connexion->close();
?>