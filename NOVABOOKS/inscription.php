<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — NovaBooks</title>
    <link rel="stylesheet" href="inscription.css">

    
    <link rel="stylesheet" href="part/header.css">
    <!-- <script src="contact.js" defer></script> -->
</head>
<body>

    <?php require 'part/header.php'?>

<form action="userins.php" method="post" class="login-form">

    <h2 class="login-title">Inscription </h2>


    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="nom" id="nom" name="nom" placeholder="Entrer votre nom " required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
    </div>

    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="mdp" placeholder="••••••••" required>
    </div>

   

    <div class="connexion">
        <button type="submit" name="connecter">Soumettre</button>
    </div>

    <div class="liens">
        <a href="connexion.php" class="mdp">Se connecter à un compte ?</a>   
    </div>

</form>


</body>
</html>