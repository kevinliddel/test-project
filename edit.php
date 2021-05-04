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
  /* Make the video fully responsive */
  video {
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

<h1 class="text-center"> Liste des Utilisateurs </h1>

  	<?php require_once 'configuration.php'; ?>
    <?php 
        $mysqli= new mysqli('localhost', 'root', '', 'kevin') or die(mysqli_error($mysqli));
        $result=$mysqli->query("SELECT * FROM db") or die($mysqli->error);
    ?>

    <table class="table table-striped table-hover table-bordered">
      <thead> 
        <tr class="text-white text-center bg-dark">

          
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Modifier</th>

        </tr>
      </thead>

      <?php
          while($donnees = $result->fetch_assoc()):
      ?>
      <tbody>
          <tr class="text-center">

          
          <th> <?php echo $donnees['nom']; ?> </th>
          <th> <?php echo $donnees['prenom']; ?> </th>
          <th> <?php echo $donnees['mail']; ?> </th>
          <th> <button class="btn btn-warning" type="submit" name="edit"> <a href="form.php?edit=<?php echo $donnees['id']; ?>" onclick="return(confirm('Voulez-vous vraiment modifier cet utilisateur?'));"> Modifier </a> </button> </th>


        </tr>
      </tbody>
      <?php endwhile; ?>

    </table>

    <?php
        function pre_r($array){
          echo '<pre>';
          print_r($array);
          echo '</pre>';
        }
    ?>

</div>

</body>
</html>