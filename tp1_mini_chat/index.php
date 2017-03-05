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
        <!-- Utilise Bootstrap -->
        <!--  Production <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/jquery.js"></script>
        <!--  Production <script src="bootstrap/js/bootstrap.min.js"></script>-->
        <script src="bootstrap/js/bootstrap.js"></script>

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