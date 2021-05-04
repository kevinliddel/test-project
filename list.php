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
      <li class="search-box">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link rel="stylesheet" href="css/search.css">
      <input type="text" class="search-box-input" id="myInput" placeholder="Que cherchez-vous ?">
      <button class="search-box-btn" type="submit">
          <i class="search-box-icon material-icons">search</i>
      </button>
    		
        
    	</li>
    </ul>
  </nav> 
</div>

<h1 class="text-center"> Liste des Utilisateurs </h1>

  	<?php require_once 'configuration.php'; ?>

    <?php 
      if(isset($_SESSION['message'])):
    ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
      <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      ?>
    </div>
    <?php endif ?>

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
          <th>Voir</th>
          <th>Modifier</th>
          <th>Supprimer</th>

        </tr>
      </thead>

      <?php
          while($donnees = $result->fetch_assoc()):
      ?>
      <tbody id="myTable">
          <tr class="text-center">

          <th> <?php echo $donnees['nom']; ?> </th>
          <th> <?php echo $donnees['prenom']; ?> </th>
          <th> <?php echo $donnees['mail']; ?> </th>
          <th> <button class="btn btn-info" icon="fa fa-eye" name="check"> <a href="voir.php?check=<?php echo $donnees['id']; ?>"> Voir </a> </button> </th>
          <th> <button class="btn btn-warning" icon="fa fa-pencil"> <a href="edit.php?id=<?php echo $donnees['id']; ?>"> Modifier </a> </button> </th>
          <th> <button class="btn btn-danger" icon="fa fa-trash"> <a href="delete.php?id=<?php echo $donnees['id']; ?>"> Supprimer </a> </button> </th>

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

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>