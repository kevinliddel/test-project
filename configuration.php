<?php

session_start();

$id=0;
$nom='';
$prenom='';
$mail='';

$mysqli= new mysqli('localhost', 'root', '', 'kevin') or die(mysqli_error($mysqli));

if(isset($_POST['save']))
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];

	$mysqli->query("INSERT INTO db (nom, prenom, mail, password) VALUES ('$nom', '$prenom', '$mail', '$password')") or die($mysqli->error());

	$_SESSION['message'] = "Utilisateur ajouter avec succès";
	$_SESSION['msg_type'] = "success";
	/*
	if (!preg_match("/^[a-zA-Z\s]+$/", $nom))
	{
		$output="<span style='color:green'>✓</span>";
	}
	else
	{
		$error="<span style='color:red'>✘ Votre nom contient des caractères étrangères</span>";
		require_once 'add.php';
	}
	if (!preg_match("/^[a-zA-Z\s]+$/", $prenom))
	{
		$output="<span style='color:green'>✓</span>";
	}
	else
	{
		$error="<span style='color:red'>✘ Votre prénom ne doit contenir que des lettres</span>";
		require_once 'add.php';
	}
	$regex="/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-z]{2,}+$/";
	if(preg_match($regex, $_POST['mail']))
	{
		$output="<span style='color:green'>✓</span>";
	}
	else
	{
		$error="<span style='color:red'>✘ Adresse email invalide</span>";
		require_once 'add.php';
	}*/
}

if(isset($_GET['check']))
{
	$id = $_GET['check'];
	$result=$mysqli->query("SELECT * FROM db WHERE id=$id") or die($mysqli->error());
	{
		$donnees=$result->fetch_array();
		$nom=$donnees['nom'];
		$prenom=$donnees['prenom'];
		$mail=$donnees['mail'];
	}
}

if(isset($_GET['delete']))
{
	$id = $_GET['delete'];

 	$mysqli->query("DELETE FROM db WHERE id= $id") or die($mysqli->error());
 	header("location:list.php");

 	$_SESSION['message'] = "Utilisateur supprimer avec succès";
	$_SESSION['msg_type'] = "danger";
}

if(isset($_POST['deleteMultiple']))
{
	$numberOfCheckbox=count($_POST['records']);
	$i=0;
	while($i<$numberOfCheckbox){
		$key=$_POST['records'][$i];
		$mysqli->query("DELETE FROM db WHERE id= $key") or die($mysqli->error());
		$i++;
	}
 	header("location:list.php");

 	$_SESSION['message'] = "Utilisateurs supprimer avec succès";
	$_SESSION['msg_type'] = "danger";
}

if (isset($_GET['edit'])) 
{
 	$id=$_GET['edit'];

	$result=$mysqli->query("SELECT * FROM db WHERE id=$id") or die($mysqli->error());
	{
		$donnees=$result->fetch_array();
		$nom=$donnees['nom'];
		$prenom=$donnees['prenom'];
		$mail=$donnees['mail'];
	}
} 

if (isset($_POST['update'])){
	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['mail'];

	$mysqli->query("UPDATE db SET nom='$nom', prenom='$prenom', mail='$mail' WHERE id= $id") or die($mysqli->error());
	header("location:list.php");

	$_SESSION['message'] = "Utilisateur modifier avec succès";
	$_SESSION['msg_type'] = "success";
	/*
	if (!preg_match("/^[a-zA-Z\s]+$/", $nom))
	{
		$output="<span style='color:green'>✓</span>";
	}
	else
	{
		$error="<span style='color:red'>✘ Votre nom contient des caractères étrangères</span>";
		require_once 'form.php';
	}
	if (!preg_match("/^[a-zA-Z\s]+$/", $prenom))
	{
		$output="<span style='color:green'>✓</span>";
	}
	else
	{
		$error="<span style='color:red'>✘ Votre prénom ne doit contenir que des lettres</span>";
		require_once 'form.php';
	}
	$regex="/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-z]{2,}+$/";
	if(preg_match($regex, $_POST['mail']))
	{
		$output="<span style='color:green'>✓</span>";
	}
	else
	{
		$error="<span style='color:red'>✘ Adresse email invalide</span>";
		require_once 'form.php';
	}*/
}

?>