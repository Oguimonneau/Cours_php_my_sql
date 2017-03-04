<?php
//Connection à la databe
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'root',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO messages_chat(pseudo, message) VALUES(:pseudo, :message)');
$req->execute(array(
	'pseudo' => htmlspecialchars($_POST['pseudo']),
	'message' => htmlspecialchars($_POST['message']),

	));
// Retour sur la page principale
header('Location: index.php');
?>