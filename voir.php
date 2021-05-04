<!DOCTYPE html>
<html lang="en">

<head>
  <title> Projet Dedicatus </title>
  <meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="css/bootstrap.min.css">
  		<script src="css/jquery.min.js"></script>
  		<script src="css/popper.min.js"></script>
  		<script src="css/bootstrap.min.js"></script>
  <style>
  	body {background-color: White;}
  /* Make the image fully responsive */
  .carousel-inner img {
    max-width: 100%;
    height: auto;
  }
  </style>
</head>

<body>

<div class="container">	

    <div class="navbar-header">

      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">

           <a class="navbar-brand" href="#">
             <img src="image/kevin.png" alt="Logo" style="width:50px;">
           </a>
          <li class="nav-item">
            <a class="nav-link" href="list.php">Liste</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Ajouter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php">Supprimer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit.php">Modifier</a>
          </li>

        </ul>
      </nav> 

    </div>

    <h1 style="font-family: poppins sans-serif"><center> A propos de l'Utilisateur </center></h1>

    <?php require_once 'configuration.php'; ?>

    <center><div class="card" style="width:400px; font-family: poppins sans-serif">
        <div class="card-body">
          <img class="card-img-top" src="image/utilisateur.jpg" alt="Card image" width="100%" height="100%">
          <h5> Nom: <?php echo $nom; ?> </h5>
          <h5> Prénom: <?php echo $prenom; ?> </h5>
          <h5> Mail: <?php echo $mail; ?> </h5>
          <button class="btn btn-warning" type="submit" name="edit"> <a href="form.php?edit=<?php echo $id; ?>" onclick="return(confirm('Voulez-vous vraiment modifier cet utilisateur?'));"> Modifier </a> </button>
        </div>
    </div></center>

</div>

</body>

</html>