<?php
session_start();
if (isset($_POST['connexion'])) {
	$dsn = 'mysql:host=localhost;dbname=quizz;port=3306;charset=utf8';
	
  $Pseudo =  $_POST['pseudo'];
  $mdp =  $_POST['mdp'];

try {
 
$pdo = new PDO($dsn, 'root' , '');

}
catch (PDOException $exception) {
 

 exit('Erreur de connexion à la base de données');
 
}

		$query = $pdo->prepare("SELECT * FROM users WHERE Pseudo='$Pseudo' AND mdp='$mdp' ");
        $query->execute();
		$resultat = $query->fetch();

        // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
        if ($resultat['ID_users'] == "" ){
        
            echo "<script type='text/javascript'>alert('Erreur, Mauvais pseudo ou mot de passe');</script>";
			

        }else {
			$_SESSION['id'] = $resultat['ID_users']; // id de l'utilisateur unique pour les requêtes futures
            $_SESSION['pseudo'] = $resultat['Pseudo'];
            $_SESSION['mail'] = $resultat['Email'];
            

            header('Location:  Accueil.php');
        
        }
  	
  }

?>
