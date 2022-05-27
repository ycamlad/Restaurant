<?php
$serveur = "localhost";
$login = "root";
$motdepasse = "";
$database = "resto";;



// Création de la connexion avec la base de données
$connexion = new mysqli($serveur, $login, $motdepasse, $database);

if ($connexion->connect_error) {
    die("Erreur, pas possible de se connecter à la base de données : " . $connexion->connect_error);
}

// Exécution d'une requête SQL.
$sql = "select * from resto.reservation";
$resultat = $connexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
while($ligne = mysqli_fetch_array($resultat))
{
?>
<tr>
    <td><?php echo $ligne['jour']?></td>
    <td><?php echo $ligne['couvert']?></td>
    <td><?php echo $ligne['nom']?></td>
    <td><?php echo $ligne['email']?></td>
    <td><?php echo $ligne['annulation']?></td>
</tr>
    <br />
<?php
}
?>

<a href="index.html">page principal</a>
</body>
</html>
