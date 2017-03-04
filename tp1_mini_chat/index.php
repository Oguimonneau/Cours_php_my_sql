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
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon premier mini-Chat</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       
    </header>
   
    <!-- Le formulaire -->
    
  	<center>
  			<form action="ajoute_message.php" method="post">
			<p>
			    Votre pseudo : <input type="text" name="pseudo" /><br/>
			    Votre message : <input type="text" name="message" /><br/>
			    <input type="submit" value="Envoyer" />
			</p>
		</form>
  	</center>
		    
    <!-- La liste des messages -->
    <?php
    $reponse = $bdd->query('SELECT * FROM messages_chat order by id_chat desc');
       // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
        <p><strong><?php echo $donnees['pseudo']?></strong> : <?php echo $donnees['message']?></p> 
        <?php 
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

    <!-- Le pied de page -->

    <footer id="pied_de_page">
        <p>Copyright Kahilom, tous droits réservés</p>
    </footer>
    
    </body>
</html>