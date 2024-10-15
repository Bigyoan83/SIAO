<?php
session_start();

include('../Connexion_BDD.php');
$sql = $connexion->prepare("DELETE FROM `article` WHERE id = ?");
?>