<?php

$user=$_POST['user'];
$pass=$_POST['pass'];

$mysqli= new mysqli('localhost', 'root', '', 'kevin') or die(mysqli_error($mysqli));

$result=$mysqli->query("SELECT * FROM admin WHERE username='$user' AND password='$pass'") or die($mysqli->error);

$donnees = $result->fetch_assoc();
if ($donnees['username'] == $user && $donnees['password'] == $pass) {
	session_start();
	header("location:list.php"); 
}else{
	$erreur = "<span style='color:red'> ✘ ID ou mot de passe invalide </span>";
	require_once 'index.html';
}

?>