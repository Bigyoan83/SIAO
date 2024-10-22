<?php
include('../../Connexion_BDD.php');

$nom = $_POST['nom'];
$email = $_POST['email'];
$password = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

$sql_check = "SELECT * FROM utilisateur WHERE email = ?";
$stmt = $connexion->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo '<script type="text/javascript">
            alert("Cet email est déjà utilisé. Veuillez en choisir un autre.");
            document.location.href="inscription.html";
        </script>';
} else {
    $sql_insert = "INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES (?, ?, ?)";
    $stmt = $connexion->prepare($sql_insert);
    $stmt->bind_param("sss", $nom, $email, $password);

    if ($stmt->execute() === TRUE) {
        echo '<script type="text/javascript">
                alert("Votre inscription a été complétée avec succès.");
                document.location.href="../connexion.html";
            </script>';
    } else {
        echo "Erreur : " . $stmt->error;
    }
}

// Fermer la connexion
$connexion->close();
?>