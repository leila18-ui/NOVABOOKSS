<?php
session_start();
require 'config.php';

if(isset($_POST['connecter'])){ 
 
//Verifier que des champs ne sont pas vides
if(!empty($_POST['email'])AND !empty($_POST['password'])){
   $email = htmlspecialchars($_POST['email']);
   $password = $_POST['password'];
   $req = $pdo->prepare("SELECT id FROM user WHERE email=? " );
   $req-> execute(array ($email, $password));
   $cpt = $req->rowCount();

   if($cpt == 0) {
    $password_crypte = password_hash( $password , PASSWORD_DEFAULT );
    $req = $pdo -> prepare ("INSERT INTO user (email, mdp) VALUES (?, ?)");
    $message = "Votre compte à bien été trouvé ";
   }else{
    $messag = "Désolé nous ne troiuvons pas ce compte ";
   }

   }else{
  $message = 'Veuillez entrer un message';

  }

 } 