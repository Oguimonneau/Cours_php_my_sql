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
	'pseudo' => $_POST['pseudo'],
	'message' => $_POST['message'],

	));
echo 'Le message a bien été ajouté !';
?>