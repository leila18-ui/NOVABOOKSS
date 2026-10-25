<?php 
require 'config.php';
if ($_SERVER['REQUEST_METHOD']!== 'POST'){
    header('Location: inscription.php' );
    exit;
}


$nom = $_POST['nom'];
$email = $_POST['email'];
$pass = $_POST['mdp'];

if($nom || $email ||$pass){
header('Location: inscription.php?erreur=champs_vides');
}

$sql = 'INSERT INTO user (nom, email, mdp) VALUES (?, ?, ?)';
$marequete = $pdo->prepare($sql);
$pass_hach = password_hash($pass, PASSWORD_DEFAULT);
$marequete->execute([$nom, $email, $pass]); 


header ('Location: succesins.php');
exit;
