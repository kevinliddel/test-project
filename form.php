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

<?php require_once 'configuration.php'; ?>

<div class="row justify-content-center">
<form role="form" action="list.php" method="POST">

	<h1 class="text-center"> Modifier l'utilisateur </h1>

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="form-group">
		<label>Nom</label>
		<input type="Text" class="form-control" value="<?php echo $nom; ?>" placeholder="Enter your first name" name="nom" required>
    	<div class="valid-feedback">Valide</div>
    	<div class="invalid-feedback">Veuillez renseigner ce champ</div>
    </div>
	
    <div class="form-group">
		<label>Prénom</label>
		<input type="Text" class="form-control" value="<?php echo $prenom; ?>" placeholder="Enter your second name" name="prenom" required>
    	<div class="valid-feedback">Valide</div>
   		<div class="invalid-feedback">Veuillez renseigner ce champ</div>
    </div>
	
    <div class="form-group">
		<label>Mail</label>
		<input type="Text" class="form-control" value="<?php echo $mail; ?>" placeholder="Enter your email" name="mail" required>
    	<div class="valid-feedback">Valide</div>
    	<div class="invalid-feedback">Veuillez renseigner ce champ</div>
    </div>

    <div class="form-group">
		<button class="btn btn-info" type="submit" name="update">Modifier</button>
    </div>

</form>
</div>

</div>

</body>
</html>