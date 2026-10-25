<?php
session_start();
require 'config.php';

if(isset($_POST['connecter'])){ 

//Verifier que des champs ne sont pas vides
if(!empty($_POST['email'])AND !empty($_POST['password'])){
   $email = htmlspecialchars($_POST['email']);
   $password = $_POST['password'];

   $marequete = $pdo->prepare("SELECT id, mdp FROM user WHERE email=? " );
   $marequete-> execute ([$email]);
   $user = $marequete -> fetch(PDO::FETCH_ASSOC);
   
   if($user && password_verify($password, $user['mdp'] )  ) {
   $_SESSION['user_id'] = $user['id'];
   header('Location: index.php');
   exit;
   
   }else{
   $message = "Email ou mot de passe incorrect. ";
   }


   }else{
   $message = 'Veuillez remplir tous les champs';
}

} 