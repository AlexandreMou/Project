<?php

if (isset($_POST['ins'])) {
	$dsn = 'mysql:host=localhost;dbname=quizz;port=3306;charset=utf8';
  
  $Email = $_POST['mail'];
  $Pseudo =  $_POST['pseudo'];
  $mdp =  $_POST['mdp'];
    
try {
 
$pdo = new PDO($dsn, 'root' , '');

}
catch (PDOException $exception) {
 

 exit('Erreur de connexion à la base de données');
 
}
$query = $pdo->query("INSERT INTO users (Pseudo, Email, mdp) VALUES('$Pseudo', '$Email', '$mdp')");
      
}

header('Location: ../index.html');
?>	
