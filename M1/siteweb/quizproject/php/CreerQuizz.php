<?php

if (isset($_POST['creationquizz'])) {
	$dsn = 'mysql:host=localhost;dbname=quizz;port=3306;charset=utf8';
  
  $Nom = $_POST['nom'];
  $Categorie= $_POST ['type'];
  $q1 = $_POST['question'];
  $r1 =  $_POST['rep1'];
  $r2 =  $_POST['rep2'];
  $r3 =  $_POST['rep3'];
  $r4 =  $_POST['rep4'];
  $Solution = $_POST['solution'];
    
try {
 
$pdo = new PDO($dsn, 'root' , '');

}
catch (PDOException $exception) {
 

 exit('Erreur de connexion à la base de données');
 
}

$query = $pdo->query("INSERT INTO question (Nom, Categorie, q1, r1, r2, r3, r4, solution) VALUES('$Nom','$Categorie', '$q1', '$r1', '$r2', '$r3', '$r4', '$Solution')");
      
}

header('Location: Accueil.php');
?>	
