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

         <!-- Utilise Bootstrap CDN -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>Mon premier mini-Chat</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       essai
    </header>
   
    <!-- Le formulaire -->
    
  	<center>
  			<form action="ajoute_message.php" method="post">
			<p>
			    Votre pseudo : <input type="text" name="pseudo" required="" /><br/>
			    Votre message : <input type="text" name="message" required="" /><br/>
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