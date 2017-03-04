<?php
//Connection à la databe
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'root');
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
  			<form action="cible.php" method="post">
			<p>
			    Votre pseudo : <input type="text" name="pseudo" /><br/>
			    Votre message : <input type="text" name="message" /><br/>
			    <input type="submit" value="Envoyer" />
			</p>
		</form>
  	</center>
		    
    <!-- La liste des massages -->

    <!-- Le pied de page -->

    <footer id="pied_de_page">
        <p>Copyright Kahilom, tous droits réservés</p>
    </footer>
    
    </body>
</html>