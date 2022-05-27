<?php
$serveur = "localhost";
$login = "root";
$motdepasse = "";
$database = "resto";
$jour=$_POST['jour'];
$couvert=$_POST['couvert'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$anuul=$_POST['annulation'];



// Création de la connexion avec la base de données
$connexion = new mysqli($serveur, $login, $motdepasse, $database);

if ($connexion->connect_error) {
    die("Erreur, pas possible de se connecter à la base de données : " . $connexion->connect_error);
}

// Exécution d'une requête SQL.
$sql = "insert into resto.reservation ( jour, couvert, nom, email, annulation) values ('$jour', '$couvert', '$nom', '$email', '$anuul')";
$resultat = $connexion->query($sql);

header("location:AfficherResto.php");