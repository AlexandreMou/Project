<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Creation Quizz</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="../ressources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../ressources/bootstrap/font/bootstrap-icons.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="bg-light">
  <header class="navbar navbar-expand-lg navbar-dark bg-info text-white text-center">
    <nav class="container">
      <div class="container-fluid">
        <div class="navbar-brand">
                  <i class="bi-person-circle" style="font-size: 1.5rem; color:#ffffff;">
                  </i>
                  <h1 class="navbar-brand" style="font-size: 1.9rem; font-weight:bolder; font-style: italic; font-family: cursive;">
                    <?php
                       echo $_SESSION['pseudo'];
                    ?>
                  </h1>
        </div>

      <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Deconnexion.php" style="font-size: 1.3rem;">Déconnection</a>
            </li>
            <li class="nav-item dropdown">
              <a type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="font-size: 1.3rem;">
                Catégories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li style="font-size: 1.3rem;"><a class="dropdown-item" href="listeQuizCategorie.html"> <span aria-hidden="true"><i class="bi-pencil" style="font-size: 1.rem; color:#17a2b8;"></i></span> Animaux</a></li>
                <li style="font-size: 1.3rem;"><a class="dropdown-item" href="listeQuizCategorie.html"> <span aria-hidden="true"><i class="bi-globe" style="font-size: 1.rem; color:#17a2b8;"></i></span> Géographie</a></li>
                <li style="font-size: 1.3rem;"><a class="dropdown-item" href="listeQuizCategorie.html"> <span aria-hidden="true"><i class="bi-hourglass-split" style="font-size: 1.rem; color:#17a2b8;"></i></span> Histoire</a></li>
                <li style="font-size: 1.3rem;"><a class="dropdown-item" href="listeQuizCategorie.html"> <span aria-hidden="true"><i class="bi-type" style="font-size: 1.rem; color:#17a2b8;"></i></span> Grammaire</a></li>
                <li style="font-size: 1.3rem;"><a class="dropdown-item" href="listeQuizCategorie.html"> <span aria-hidden="true"><i class="bi-wifi" style="font-size: 1.rem; color:#17a2b8;"></i></span> Science et technologies</a></li>
                <li style="font-size: 1.3rem;"><a class="dropdown-item" href="listeQuizCategorie.html"> <span aria-hidden="true"><i class="bi-bicycle" style="font-size: 1.rem; color:#17a2b8;"></i></span> Sports </a></li>
                <li style="font-size: 1.3rem;"><hr class="dropdown-divider"></li>
                <li style="font-size: 1.3rem;"><a class="dropdown-item" href="#">Paramètres</a></li>
              </ul>
            </li>
          </ul>
        </div>
        </div>
      </div>
    </nav>
  </header><br>
  <div class="container"> <!-- contenu principal-->   
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">           
                <form method="post" action="php/CreerQuizz.php">

                        <!-- Nom du Quizz-->
                        <h3 class="h3 mb-3 fw-normal text-center" >NOM</h3>
                        <input type="text"  class="form-control" placeholder="nom" name="nom" required /><br>

                        <!-- Type du Quizz-->
                        <h2 class="visually-hidden">Type du Quizz</h2><br>
                        <input type="radio" id="c1" name="type" value="Sport"  checked>Sport
                        <input type="radio" id="c2" name="type"  value="Science et Technologies" checked>Science et Technologies<br>
                        <input type="radio" id="c3" name="type"  value="Animaux" checked>Animaux
                        <input type="radio" id="c4" name="type"  value="Histoire & Geographie" checked>Histoire & Geographie
                        <input type="radio" id="c5" name="type"  value="Grammaire" checked>Grammaire<br><br>

                        <!-- Question-->
                        <h1 class="h3 mb-3 fw-normal text-center" >Veuillez donnez la question</h1>
                        <input type="text"  class="form-control" placeholder="Question" name="question" required /><br>

                        <!-- Reponse 1-->
                        <h2  class="visually-hidden">Reponse 1</h2>
                        <input type="text"  class="form-control" placeholder="Reponse" name="rep1" required="">
                        
                        <!-- Reponse 2-->
                        <h2  class="visually-hidden">Reponse 2</h2>
                        <input type="text"  class="form-control" placeholder="Reponse" name="rep1" required="">
                        
                        <!-- Reponse 3-->
                        <h2  class="visually-hidden">Reponse 3</h2>
                        <input type="text"  class="form-control" placeholder="Reponse" name="rep1" >
                        
                        <!-- Reponse 4-->
                        <h2  class="visually-hidden">Reponse 4</h2>
                        <input type="text"  class="form-control" placeholder="Reponse" name="rep1" >
                        <br>

                        <!-- Solution-->
                        <h2 class="visually-hidden">Solution</h2>
                        <input type="radio" id="s1" name="solution"  value="1"  checked> 1
                        <input type="radio" id="s2" name="solution"  value="2"  checked> 2
                        <input type="radio" id="s3" name="solution"  value="3"  checked> 3
                        <input type="radio" id="s4" name="solution"  value="4"  checked> 4
                        <br>
                        <br>
                        
                        <button class="w-100 btn btn-lg btn-info" name="creationquizz" type="submit">Creer le Quizz</button>
                    </form><br>
                </div>
            </div><br>
        </div>
        <div class="col-md-3"></div>
    </div>  
      
</div> <!-- Fin du contenu principal--> 
<script src="../ressources/jquery/jquery.min.js"></script>
  <script src="../ressources/bootstrap/jquery/jquery.js"></script>
  <script src="../ressources/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../ressources/bootstrap/js/bootstrap.min.js"></script>
  <script src="../ressources/bootstrap/js/bootstrap.js"></script>
</body>
</html>
